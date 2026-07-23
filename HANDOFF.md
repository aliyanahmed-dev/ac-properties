# Handoff — Base Kit

**Date:** 2026-07-23
**Machine:** Windows 10, project at `c:\Aliyan\Projects\base-kit` (NOT a git repo — consider `git init` first thing)
**Read first:** `CLAUDE.md` (project rules + roadmap), then this file.

## What just got done (this session)

The route/frontend split (roadmap item #1) plus the public site skeleton (old item #5),
per the approved design. Verified: **38 Pest tests / 95 assertions passing**, `npm run build`
emits both bundles, `composer lint` (Pint) clean, `php artisan migrate` applied on dev MySQL.

### The two-world architecture is now live

```
routes/site.php   -> /            Blade + Alpine  (view())      resources/views/site/
routes/admin.php  -> /admin/*     Inertia + Vue   (Inertia)     resources/js/admin/
```

- **All Inertia lives under `/admin`** — including auth: `/admin/login`, `/admin/register`,
  `/admin/dashboard`, `/admin/settings/*`. **Route names are unchanged** (`login`, `dashboard`,
  `profile.edit`…) — only URLs gained the prefix. Registered in `bootstrap/app.php`:
  `web:` loads `routes/site.php`; the `then:` callback groups `routes/admin.php` under
  `prefix('admin')` + `web` middleware. `routes/web.php` was deleted; `auth.php`/`settings.php`
  are required from `routes/admin.php`.
- **Two Vite entries** (`vite.config.ts`): `resources/js/admin/app.ts` (the old app, moved;
  `@` alias + tsconfig paths now point to `resources/js/admin`) and `resources/js/site/app.ts`
  (Alpine only). Inertia root view: `resources/views/admin/app.blade.php`
  (`HandleInertiaRequests::$rootView = 'admin.app'`).
- **Tailwind v3.4 split** (CLAUDE.md previously said v4 — that was wrong, now corrected):
  `resources/css/tokens.css` (shared HSL vars, the only rebrand file) +
  `admin.css`/`site.css`, each selecting its own config via `@config`
  (`tailwind.admin.config.js` / `tailwind.site.config.js`) with content globs scoped
  per world. Site CSS ~6 KB vs admin ~55 KB — split confirmed working.

### Public site skeleton

- `<x-site.layout>` = `resources/views/components/site/layout.blade.php`
  (props: title/description/canonical/image) + `site/partials/{header,footer}.blade.php`
- `<x-seo>` = `resources/views/components/seo.blade.php` (title, meta description,
  canonical, Open Graph, Twitter)
- Pages: `site/home.blade.php` (route `home`), `site/contact.blade.php`
  (routes `contact` / `contact.store`), error views `errors/{404,403,500,503}.blade.php`
- **Contact form:** `ContactSubmission` model (ULID) + `contact_submissions` migration →
  `Site\ContactController` → `StoreContactRequest` → `Actions\Contact\StoreContactSubmission`
  (stores row; sends queued `ContactSubmissionReceived` notification only when
  `config('mail.contact_to')` / `CONTACT_TO` env is set). Progressive enhancement:
  plain POST works without JS, Alpine adds submit state.

### Tests

New: `tests/Feature/{RouteSplitTest,SeoComponentTest,ErrorPagesTest,ContactFormTest}.php`.
All pre-existing auth/settings tests updated from `/login`-style paths to `/admin/...`.
Suite runs on in-memory SQLite (phpunit.xml).

## ⚠️ Unfinished / gotchas

1. **phpstan/larastan vendor download is INCOMPLETE.** This machine's connection to
   GitHub (codeload/api) times out, so `vendor/phpstan` + `vendor/larastan` never landed.
   Everything is configured and locked (`composer.json` require-dev, `composer.lock`,
   `phpstan.neon` level 5, `composer analyse` script). **On the new device just run
   `composer install`** — then run `composer analyse` for the first time and fix whatever
   level-5 findings appear in `app/` (it has never successfully run yet).
   Note: a global composer config `default-socket-timeout=3000` was set on the OLD machine
   (harmless, but that's why).
2. **`composer run dev` was killed mid-session** (its Vite watcher locked `resources/js`
   during the move). Just restart it; nothing to repair. Old bookmarks: `/` is now the
   public homepage, login lives at `/admin/login`.
3. **`.env.shared.example` / `.env.vps.example` don't exist yet** — CLAUDE.md references
   them; they're slated for the reusability roadmap step. `CONTACT_TO=` was added to
   `.env.example` only.
4. **No git repo** — nothing is committed anywhere; specs/plans exist only as files.
5. tsconfig shows a benign IDE diagnostic about `./resources/js/admin/types` — same
   pattern as before the move; `npm run build` and `vue-tsc` behavior unchanged.

## Design docs from this session

- Spec: `docs/superpowers/specs/2026-07-23-route-and-frontend-split-design.md`
- Plan (all tasks executed): `docs/superpowers/plans/2026-07-23-route-and-frontend-split.md`

## Verify-everything commands

```bash
composer install        # completes phpstan/larastan on a working connection
composer run dev        # serve + queue + vite
composer lint           # Pint  (passing)
composer analyse        # PHPStan level 5 (NEVER YET RUN — expect findings)
composer test           # Pest  (38 passing)
npm run build           # both bundles (passing)
```

## Next up (per CLAUDE.md roadmap)

**Permissions layer:** roles/permissions seeder, `Gate::before` super-admin bypass,
permission sharing via `HandleInertiaRequests`, a `can()` composable, permission-filtered
nav config. After that: the CRUD engine (highest-leverage piece — don't rush it).
