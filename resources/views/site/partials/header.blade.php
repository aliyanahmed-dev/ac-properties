<style>
    .banner-pagination .swiper-pagination-bullet {
        width: 16px;
        height: 16px;
        margin: 0 !important;
        opacity: 1;
        background: white;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .banner-pagination .swiper-pagination-bullet-active {
        background: transparent;
        border-color: #EA4B43;
        position: relative;
    }

    .banner-pagination .swiper-pagination-bullet-active::after {
        content: '';
        position: absolute;
        width: 6px;
        height: 6px;
        background: #EA4B43;
        border-radius: 9999px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .swiper-slide-active{
        opacity: 1;
    }
    .testimonial-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
        width: 100px !important;
        border-radius: 10px !important;
    }

    .testimonial-pagination .swiper-pagination-bullet {
        transition: all 0.6s ease;
        margin: 0 8px;
        width: 10px !important;
        height: 10px !important;
        background-color: #EA4B43 !important;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<header>
    {{-- Top Info Bar --}}
    <div class="bg-[#EA4B43] text-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2.5">

            {{-- Contact Information --}}
            <div class="flex items-center gap-7 text-sm">

                {{-- Address --}}
                <a
                    href="https://www.google.com/maps/search/?api=1&query=205-3489+Kingston+Rd+Toronto+ON+Canada"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex items-center gap-2 transition hover:text-white/80"
                >
                    <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/>
                    </svg>
                    <span>205-3489 Kingston Rd, Toronto, ON, Canada</span>
                </a>

                {{-- Email --}}
                <a
                    href="mailto:info@acpropertiesinc.com"
                    class="flex items-center gap-2 transition hover:text-white/80"
                >
                    <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                    <span>info@acpropertiesinc.com</span>
                </a>

                {{-- Phone --}}
                <a
                    href="tel:+1(844)9155678"
                    class="flex items-center gap-2 transition hover:text-white/80"
                >
                    <svg class="h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.46 15.46 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.56 3.58.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.19 2.46.56 3.58a1 1 0 0 1-.24 1.01l-2.2 2.2z"/>
                    </svg>
                    <span>+1 (844) 915 5678</span>
                </a>
            </div>

            {{-- Social Icons --}}
            <div class="flex items-center gap-2.5">
                <a
                    href="https://www.facebook.com/acpropertiesmanagement/" target="blank"
                    class="flex h-7 w-7 items-center text-xs justify-center rounded-full border border-white/70 transition hover:bg-white hover:text-[#EA4B43]"
                >
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a
                    href="https://www.instagram.com/ac_propertiesinc/"  target="blank"
                    class="flex h-7 w-7 items-center text-xs justify-center rounded-full border border-white/70 transition hover:bg-white hover:text-[#EA4B43]"
                >
                    <i class="fab fa-instagram"></i>
                </a>

                <a
                    href="#"
                    class="flex h-7 w-7 items-center text-xs justify-center rounded-full border border-white/70 transition hover:bg-white hover:text-[#EA4B43]"
                >
                    <i class="fab fa-twitter"></i>
                </a>

                <a
                    href="#"
                    class="flex h-7 w-7 items-center text-xs justify-center rounded-full border border-white/70 transition hover:bg-white hover:text-[#EA4B43]"
                >
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>


    {{-- Main Navbar --}}
    <div class="bg-white shadow-sm">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center" >
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="AC Properties Inc."
                    class="h-12 w-40"
                >
            </a>

            {{-- Navigation --}}
            <ul class="hidden items-center gap-5 text-[15px] font-bold text-[#000] lg:flex font-switzer-variable">
                <li>
                    <a href="{{ route('home') }}" class="transition hover:text-[#EA4B43]">
                        Home
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        Services
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43] whitespace-nowrap">
                        Our Rental Properties
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        Listings
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        About Us
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        Marketplace
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        Career
                    </a>
                </li>

                <li>
                    <a href="#" class="transition hover:text-[#EA4B43]">
                        Blogs
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="transition hover:text-[#EA4B43]">
                        Contact
                    </a>
                </li>
            </ul>

            {{-- Right Actions --}}
            <div class="flex items-center gap-5">
                {{-- Search --}}
                <button
                    type="button"
                    class="text-[#000] transition hover:text-[#EA4B43]"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                    >
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-3.5-3.5"/>
                    </svg>
                </button>

                {{-- Add Listing --}}
                <a
                    href="#"
                    class="rounded-full bg-[#EA4B43] px-7 py-3 text-sm font-semibold text-white transition hover:bg-red-600"
                >
                    Add Listing
                </a>
            </div>

        </nav>
    </div>
</header>
