# Base Kit

A reusable Laravel starter kit. Every project we build starts by copying this repo.
The first consumer will be a property listing management system, but **nothing
property-specific belongs in this codebase**.

## Prime directive

This is a BASE, not an application. Before writing any code, ask:
"Would a hospital CRM and an inventory system both need this?"

- Yes -> it belongs here.
- No  -> it does not belong here. Say so instead of writing it.

Never introduce domain vocabulary (Listing, Property, Agent, Tenant, Invoice, etc.)
into `app/Base/`, `resources/js/admin/components/`, or any shared layer.

## Stack

| Layer | Choice |
|---|---|
| Backend | Laravel (latest), PHP 8.3+ |
| Admin UI | Inertia + Vue 3 Composition API + TypeScript + shadcn-vue |
| Public site | Blade + Alpine.js (NO Inertia, NO Vue by default) |
| Styling | Tailwind CSS v4 (CSS-first config via `@theme`) |
| Database | MySQL 8 (dev), must stay PostgreSQL-compatible |
| Queue/Cache | database driver by default, Redis when available |
| Tests | Pest |

## Architecture: two rendering paths, one app

```
routes/admin.php  -> /admin/*  -> Inertia::render()  -> resources/js/admin/
routes/site.php   -> /*        -> view()            -> resources/views/site/
```

These two worlds share models and services. They share NOTHING else.
Do not import admin Vue components into the public site. Do not add Inertia to
public routes. The public site must render usable HTML with JavaScript disabled.

### Directory conventions

```
app/
  Base/           Reusable kernel. Generic only. Changes here affect every future project.
    Support/      DbHelper and other cross-cutting helpers
  Domain/         Per-project business logic. EMPTY in the base repo.
  Http/
    Controllers/
      Admin/      returns Inertia::render()
      Site/       returns view()
      Api/        returns JsonResource
resources/
  js/
    admin/        Vue + Inertia + shadcn-vue
    site/         Alpine only. Keep this bundle tiny.
  views/
    site/         The public theme. Rebuilt per project. Treat as disposable.
  css/
    tokens.css    Brand tokens. The ONLY file a rebrand should touch.
    admin.css
    site.css
```

## Database portability rules

We develop on MySQL but every project must be able to run on PostgreSQL.
These are hard rules, not suggestions:

1. **No raw SQL.** No `DB::raw`, `whereRaw`, `selectRaw`, `havingRaw` anywhere.
2. **Text search goes through `App\Base\Support\DbHelper::search()`** — it picks
   `ilike` on pgsql and `like` on mysql. Never write `where(..., 'like', ...)` directly.
3. **No engine-specific types.** No native arrays, no `citext`, no `jsonb` operators,
   no database enums. Use string columns with PHP enum casts.
4. **Always list every non-aggregated column in GROUP BY.** MySQL forgives this,
   Postgres does not.
5. **Always order explicitly.** Never rely on implicit row order.
6. **ULIDs over UUIDs** (`HasUlids`). Avoid the native `uuid` type.
7. **Full-text search goes behind Laravel Scout.** Never write `MATCH AGAINST`
   or `tsvector`.

## Shared hosting constraint

This base must deploy to Namecheap/Hostinger-class shared hosting, which has
no Redis, no Supervisor, and no Node. Therefore:

- Default `.env` uses `database` for cache, session, and queue.
- Background jobs run via scheduler, not a persistent worker:
  `Schedule::command('queue:work --stop-when-empty --max-time=55')->everyMinute()->withoutOverlapping();`
- Never assume Redis exists. Never assume a long-running process exists.
- Keep `.env.shared.example` and `.env.vps.example` in sync when adding config.

## Tailwind

Tailwind v3.4, configured in `tailwind.admin.config.js` and `tailwind.site.config.js`.
Each CSS entry selects its config via the `@config` directive, and each config's `content`
globs are scoped to its world, so the public site never ships admin utilities. Shared brand
tokens (HSL CSS vars) live in `resources/css/tokens.css` — the ONLY file a rebrand should touch.

**Never build class names dynamically.** `text-{{ $color }}-500` and
`'bg-' + variant` do not survive Tailwind's scanner. Always emit complete literal
class strings from a lookup map.

## Code style

- Run `composer lint` (Pint) and `composer analyse` (Larastan level 5) before finishing.
- Controllers stay thin. Business logic goes in Action classes.
- Validation goes in Form Request classes, never inline in controllers.
- Use `spatie/laravel-data` DTOs to pass data to the public site — Blade views
  must never receive raw Eloquent models.
- Vue: `<script setup lang="ts">` only. No Options API.
- Prefer editing an existing file over creating a new one.

## Installed packages — use these, don't reinvent

- `spatie/laravel-permission` — roles and permissions
- `spatie/laravel-medialibrary` — file and image handling
- `spatie/laravel-activitylog` — audit trail
- `spatie/laravel-query-builder` — API filtering/sorting/includes
- `spatie/laravel-data` — DTOs

## Commands

```bash
composer run dev      # serve + queue + logs + vite, all at once
composer lint         # Pint
composer analyse      # Larastan
composer test         # Pest
php artisan migrate
npm run build
```

## Working agreement

- **Ask before adding a dependency.** The package list above is deliberate.
- **Ask before creating a new top-level directory.**
- **Plan first on anything touching more than three files.** Show the plan,
  wait for approval, then implement.
- **Never run `migrate:fresh` without asking** — it drops data.
- Never commit `.env`, keys, or credentials.
- After finishing a unit of work, run lint + analyse + test and report the result.

## Current state

Base installation complete: Laravel Vue starter kit, MySQL, auth working
(login, register, password reset, profile, appearance settings).

Route/frontend split complete: `routes/admin.php` (all Inertia under `/admin/*`,
including auth — route names unchanged) + `routes/site.php` (Blade + Alpine at `/`),
two Vite entries (`resources/js/admin/app.ts`, `resources/js/site/app.ts`), split
Tailwind configs, shared tokens in `resources/css/tokens.css`. Public skeleton done:
`<x-site.layout>` + `<x-seo>` components, error pages (404/403/500/503), contact form
(`contact_submissions` table + optional queued mail via `CONTACT_TO`). Larastan
configured (`phpstan.neon`, `composer analyse`) — note: phpstan package download was
blocked by network; run `composer install` on a good connection to finish.

### Next, in order

1. Permissions layer: roles/permissions seeder, `Gate::before` super-admin bypass,
   permission sharing via `HandleInertiaRequests`, a `can()` composable,
   and a permission-filtered nav config file.
2. CRUD engine, built by building user management: base `ResourceController`,
   query-builder filtering, and a `<DataTable>` component (server pagination,
   sorting, column filters, global search, bulk actions, empty/loading states).
   **This is the highest-leverage piece in the whole base — do not rush it.**
3. Platform services: media upload, settings store, activity log viewer,
   notifications, mail templates.
4. Public site remainder: sitemap, `.env.shared.example` / `.env.vps.example`.
5. Reusability: `base:init` command, README, CI matrix testing mysql + pgsql.
