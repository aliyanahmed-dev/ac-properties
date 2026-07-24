<x-site.layout :title="$title" :description="$description">
    <section
    x-data
    x-init="
        new Swiper($refs.bannerSlider, {

            direction: 'vertical',

            slidesPerView: 1,

            spaceBetween: 0,

            loop: true,

            speed: 900,

            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            pagination: {
                el: $refs.bannerPagination,
                clickable: true,
            },

            on: {

                init: function(swiper) {

                    updateBannerProgress(swiper);

                },

                slideChange: function(swiper) {

                    updateBannerProgress(swiper);

                },

            }

        });

        function updateBannerProgress(swiper) {

            const current =
                String(swiper.realIndex + 1).padStart(2, '0');

            $refs.bannerCurrent.textContent = current;

            $refs.bannerProgress.style.transition = 'none';
            $refs.bannerProgress.style.width = '0%';

            setTimeout(() => {

                $refs.bannerProgress.style.transition =
                    'width 5s linear';

                $refs.bannerProgress.style.width = '100%';

            }, 50);

        }
    "
    class="relative h-[700px] w-full overflow-hidden bg-[#000]"
>

    {{-- Video Background --}}
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 h-full w-full object-cover"
    >
        <source src="{{ asset('images/banner-video.mp4') }}" type="video/mp4">
    </video>

    {{-- Swiper --}}
    <div
        x-ref="bannerSlider"
        class="swiper relative z-10 h-full w-full"
    >

        <div class="swiper-wrapper">

            {{-- ================= SLIDE 1 ================= --}}
            <div class="swiper-slide relative h-full w-full">

                <div class="absolute inset-0 bg-black/50"></div>

                <div class="relative mx-auto flex h-full max-w-7xl flex-col justify-center px-4">

                    <div class="max-w-xl">

                        <h1 class="text-7xl font-bold !leading-[1.2] text-white sm:text-6xl !font-involve">
                            A new standard of excellence
                        </h1>

                       <p class="mt-4 max-w-sm text-base text-gray-200 !leading-[1.6]">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>


                          <a href="#"
                                class="group mt-8 inline-flex items-center gap-3 rounded-full bg-white py-2 pl-6 pr-2 text-sm font-semibold text-[#000] transition-all duration-300 hover:bg-[#EA4B43] hover:text-white"
                            >
                            View All Services

                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EA4B43] text-white transition-all duration-300 group-hover:bg-white group-hover:text-[#EA4B43]">
                                <i class="fal fa-long-arrow-right"></i>
                            </span>
                        </a>

                    </div>

                </div>

            </div>


            {{-- ================= SLIDE 2 ================= --}}
            <div class="swiper-slide relative h-full w-full">

                <div class="absolute inset-0 bg-black/50"></div>

                <div class="relative mx-auto flex h-full max-w-7xl flex-col justify-center px-4">

                    <div class="max-w-xl">

                        <h1 class="text-5xl font-bold !leading-[1.2] text-white sm:text-6xl !font-involve">
                            AC Properties & Home Maintenance
                        </h1>

                        <p class="mt-4 max-w-sm text-base text-gray-200 !leading-[1.6]">
                            Your Trusted Partner for Seamless Property Management and Exceptional Home Maintenance.
                        </p>


                            <a href="#"
                            class="group mt-8 inline-flex items-center gap-3 rounded-full bg-white py-2 pl-6 pr-2 text-sm font-semibold text-[#000] transition-all duration-300 hover:bg-[#EA4B43] hover:text-white"
                        >
                            View All Services

                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EA4B43] text-white transition-all duration-300 group-hover:bg-white group-hover:text-[#EA4B43]">
                                <i class="fal fa-long-arrow-right"></i>
                            </span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= VERTICAL DOTS ================= --}}
    <div
        x-ref="bannerPagination"
        class="banner-pagination !absolute !right-10 !top-1/2 !z-30 !flex !-translate-y-1/2 !flex-col !gap-4"
    ></div>


    {{-- ================= BOTTOM PROGRESS ================= --}}
    <div class="absolute bottom-10 left-0 right-10 z-30 ml-auto flex max-w-4xl items-center gap-4 px-4">

        <span
            x-ref="bannerCurrent"
            class="text-lg font-semibold text-[#EA4B43]"
        >
            01
        </span>

        <div class="relative h-[3px] flex-1 overflow-hidden bg-white/70">

            <div
                x-ref="bannerProgress"
                class="absolute left-0 top-0 h-full w-0 bg-[#EA4B43]"
            ></div>

        </div>

        <span class="text-lg font-semibold text-white">
            02
        </span>

    </div>

</section>
<section class="bg-[#EAF3FF] pt-20">
    <div class="mx-auto max-w-7xl px-4">
        <h2 class="mx-auto max-w-3xl text-center text-4xl !font-black !leading-tight text-[#000] sm:text-5xl !font-involve">
            Property Management &amp; Home Maintenance Solutions
        </h2>

        <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2">

                <div class="relative h-[300px] md:h-[340px] group">
                    <a href="#" class="absolute -right-4 -top-4 z-20 flex h-16 w-16 items-center justify-center rounded-full border-[10px] border-[#EAF3FF] bg-white text-black hover:bg-[#EA4B43] hover:text-white group-hover:bg-[#EA4B43] group-hover:text-white transition-all duration-300">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M7 17 17 7M7 7h10v10"/>
                        </svg>
                    </a>

                    <div
                        x-data
                        x-init="
                            new Swiper($refs.homeMaintenanceSlider, {
                                slidesPerView: 1,
                                loop: true,
                                speed: 600,
                                autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false,
                                },
                                navigation: {
                                    nextEl: $refs.homeMaintenanceNext,
                                    prevEl: $refs.homeMaintenancePrev,
                                },
                            })
                        "
                        class="group relative h-full overflow-hidden rounded-[24px] bg-white shadow-sm transition-all duration-300 hover:shadow-md"
                    >
                        <div class="relative z-10 flex items-start px-6 pt-5 md:px-7 md:pt-6">
                            <h3 class="text-lg font-bold text-black md:text-xl !font-involve">Home Maintenance</h3>
                        </div>

                        <div x-ref="homeMaintenanceSlider" class="swiper absolute inset-x-0 -bottom-10 h-[250px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/home.webp') }}" alt="Home Maintenance" class="absolute -bottom-14 left-0 h-auto w-full -scale-x-100 object-contain object-bottom">
                                </div>
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/home.webp') }}" alt="Home Maintenance" class="absolute -bottom-14 left-0 h-auto w-full -scale-x-100 object-contain object-bottom">
                                </div>
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/home.webp') }}" alt="Home Maintenance" class="absolute -bottom-14 left-0 h-auto w-full -scale-x-100 object-contain object-bottom">
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-3 right-7 z-10 flex items-center gap-3">
                            <button x-ref="homeMaintenancePrev" type="button" class="text-4xl leading-none text-black transition hover:text-[#EA4B43]">←</button>
                            <button x-ref="homeMaintenanceNext" type="button" class="text-4xl leading-none text-black transition hover:text-[#EA4B43]">→</button>
                        </div>
                    </div>
                </div>

                <div class="relative h-[300px] md:h-[340px] group">
                    <a href="#" class="absolute -right-4 -top-4 z-20 flex h-16 w-16 items-center justify-center rounded-full border-[10px] border-[#EAF3FF] bg-white text-black hover:bg-[#EA4B43] hover:text-white group-hover:bg-[#EA4B43] group-hover:text-white transition-all duration-300">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M7 17 17 7M7 7h10v10"/>
                        </svg>
                    </a>

                    <div
                        x-data
                        x-init="
                            new Swiper($refs.propertyManagementSlider, {
                                slidesPerView: 1,
                                loop: true,
                                speed: 600,
                                autoplay: {
                                    delay: 3000,
                                    disableOnInteraction: false,
                                },
                                navigation: {
                                    nextEl: $refs.propertyManagementNext,
                                    prevEl: $refs.propertyManagementPrev,
                                },
                            })
                        "
                        class="group relative h-full overflow-hidden rounded-[24px] bg-white shadow-sm transition-all duration-300 hover:shadow-md"
                    >
                        <div class="relative z-10 flex items-start px-6 pt-5 md:px-7 md:pt-6">
                            <h3 class="text-lg font-bold text-black md:text-xl !font-involve">Property Management</h3>
                        </div>

                        <div x-ref="propertyManagementSlider" class="swiper absolute inset-x-0 -bottom-10 h-[250px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/property.webp') }}" alt="Property Management" class="absolute bottom-0 left-[0px] h-auto w-[400px] -scale-x-100 object-contain object-bottom">
                                </div>
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/property.webp') }}" alt="Property Management" class="absolute bottom-0 left-[0px] h-auto w-[400px] -scale-x-100 object-contain object-bottom">
                                </div>
                                <div class="swiper-slide relative">
                                    <img src="{{ asset('images/property.webp') }}" alt="Property Management" class="absolute bottom-0 left-[0px] h-auto w-[400px] -scale-x-100 object-contain object-bottom">
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-5 right-5 z-10 flex items-center gap-3">
                            <button x-ref="propertyManagementPrev" type="button" class="text-4xl leading-none text-black transition hover:text-[#EA4B43]">←</button>
                            <button x-ref="propertyManagementNext" type="button" class="text-4xl leading-none text-black transition hover:text-[#EA4B43]">→</button>
                        </div>
                    </div>
                </div>

            </div>

        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3">
            <div class="relative h-[300px] md:h-[340px] group">
                <a href="#" class="absolute -right-4 -top-4 z-20 flex h-16 w-16 items-center justify-center rounded-full border-[10px] border-[#EAF3FF] bg-white text-black hover:bg-[#EA4B43] hover:text-white group-hover:bg-[#EA4B43] group-hover:text-white transition-all duration-300">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M7 17 17 7M7 7h10v10"/>
                    </svg>
                </a>

                <div class="group relative h-full overflow-hidden rounded-[24px] bg-white shadow-sm transition-all duration-300 hover:shadow-md">
                    <div class="relative z-10 flex items-start px-6 pt-5 md:px-7 md:pt-6">
                        <h3 class="text-lg font-bold text-black md:text-xl !font-involve">Cleaning Services</h3>
                    </div>

                    <div class="absolute inset-x-0 -bottom-10 h-[350px]">
                        <img src="{{ asset('images/cleaning.webp') }}"
                            alt="Cleaning Services"
                            class="absolute -bottom-0 -left-6 h-auto w-[300px] object-contain">
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[340px] group">
                <a href="#" class="absolute -right-4 -top-4 z-20 flex h-16 w-16 items-center justify-center rounded-full border-[10px] border-[#EAF3FF] bg-white text-black  hover:bg-[#EA4B43] hover:text-white group-hover:bg-[#EA4B43] group-hover:text-white transition-all duration-300">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M7 17 17 7M7 7h10v10"/>
                    </svg>
                </a>

                <div class="group relative h-full overflow-hidden rounded-[24px] bg-white shadow-sm transition-all duration-300 hover:shadow-md">
                    <div class="relative z-10 flex items-start px-6 pt-5 md:px-7 md:pt-6">
                        <h3 class="text-lg font-bold text-black md:text-xl !font-involve">Electrician Services</h3>
                    </div>

                    <div class="absolute inset-x-0 -bottom-10 h-[350px]">
                        <img src="{{ asset('images/electrician.webp') }}"
                            alt="Electrician Services"
                            class="absolute -bottom-0 -left-14 h-auto w-[370px] object-contain -scale-x-100">
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[340px] group">
                <a href="#" class="absolute -right-4 -top-4 z-20 flex h-16 w-16 items-center justify-center rounded-full border-[10px] border-[#EAF3FF] bg-white text-black hover:bg-[#EA4B43] hover:text-white group-hover:bg-[#EA4B43] group-hover:text-white transition-all duration-300">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M7 17 17 7M7 7h10v10"/>
                    </svg>
                </a>

                <div class="group relative h-full overflow-hidden rounded-[24px] bg-white shadow-sm transition-all duration-300 hover:shadow-md">
                    <div class="relative z-10 flex items-start px-6 pt-5 md:px-7 md:pt-6">
                        <h3 class="text-lg font-bold text-black md:text-xl !font-involve">Plumbing Services</h3>
                    </div>

                    <div class="absolute inset-x-0 -bottom-10 h-[350px]">
                        <img src="{{ asset('images/plumbing.webp') }}"
                            alt="Plumbing Services"
                            class="absolute -bottom-0 left-6 h-auto w-[190px] object-contain">
                    </div>
                </div>
            </div>

        </div>

        <p class="mt-8 text-center text-sm text-[#000] font-switzer font-semibold">
            Discover top-tier real estate development services.
            <a href="#" class=" underline hover:text-[#EA4B43] transition">View all services</a>
        </p>
    </div>
</section>
<section class="property-section bg-[#EAF3FF] py-24 md:py-25" x-data>
    <div class="mx-auto max-w-7xl px-4">

        {{-- Heading --}}
        <div class="grid grid-cols-1 items-end gap-5 md:grid-cols-12">

            {{-- Left Heading --}}
            <div class="md:col-span-7">
                <span
                    class="mb-5 inline-block rounded-full border border-[#EA4B43] px-5 py-1.5 text-[13px] font-medium uppercase !font-involve"
                >
                    Property Listing
                </span>

                <h3 class="w-full text-4xl font-bold leading-none sm:text-5xl md:w-[500px] md:text-[60px] !font-involve">
                    Explore Our Latest Listings
                </h3>
            </div>

            {{-- View All --}}
            <div class="md:col-span-5">
                <div class="flex items-center gap-6 justify-start md:justify-end">
                    <a
                        href="javascript:;"
                        class="relative text-[17px] font-bold
                        before:absolute before:bottom-0 before:left-0 before:h-0.5 before:w-full
                        before:bg-[#EA4B43] before:transition-all before:duration-[600ms]
                        hover:before:left-auto hover:before:right-0 hover:before:w-0"
                    >
                        View All
                    </a>
                     <div class="flex items-center justify-end gap-3">
                        <button
                            x-ref="propertyPrev"
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-full text-lg transition-all duration-300 hover:border-[#EA4B43] bg-[#EA4B43] text-white"
                        >
                            <i class="far fa-chevron-left"></i>
                        </button>

                        <button
                            x-ref="propertyNext"
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-full text-lg transition-all duration-300 hover:border-[#EA4B43] bg-[#EA4B43] text-white"
                        >
                            <i class="far fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>


        {{-- Property Slider --}}
        <div
            x-init="
                new Swiper($refs.propertySlider, {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    speed: 700,

                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },

                    navigation: {
                        nextEl: $refs.propertyNext,
                        prevEl: $refs.propertyPrev,
                    },

                    breakpoints: {
                        640: { slidesPerView: 1, spaceBetween: 20 },
                        768: { slidesPerView: 2, spaceBetween: 20 },
                        1024: { slidesPerView: 3, spaceBetween: 20 },
                    },
                })
            "
            class="relative mt-12"
        >

            {{-- Swiper --}}
            <div x-ref="propertySlider" class="swiper">
                <div class="swiper-wrapper">


                    {{-- Slide 1 --}}
                    <div class="swiper-slide h-auto">
                        <div class="group h-full rounded-2xl bg-white p-5">

                            {{-- Image --}}
                            <div class="overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Rectangle 6736 (1).webp') }}"
                                    alt="Garden Duplex in Brooklyn"
                                    class="w-full rounded-2xl transition-transform duration-[700ms] group-hover:scale-110"
                                >
                            </div>

                            {{-- Content --}}
                            <div class="mt-5">

                                <h4 class="text-2xl font-bold">
                                    Garden Duplex in Brooklyn
                                </h4>

                                <ul class="mt-3 flex flex-wrap items-center gap-5 py-1 text-[15px] font-medium text-[#4B4B4B]">
                                    <li>
                                        <i class="fal fa-map-marker-alt mr-1"></i>
                                        New York City
                                    </li>

                                    <li>
                                        <i class="fal fa-calendar mr-1"></i>
                                        May 7, 2026
                                    </li>
                                </ul>

                                <ul class="mb-[30px] mt-2.5 flex items-center justify-between border-y border-dashed border-[#12182B1A] py-3 text-sm text-[#4B4B4B] sm:text-[15px]">
                                    <li>
                                        <i class="fal fa-bed mr-1 text-[#074F75]"></i>
                                        2 Bed(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-bath mr-1 text-[#074F75]"></i>
                                        2 Bath(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-vector-square mr-1 text-[#074F75]"></i>
                                        120/m²
                                    </li>
                                </ul>

                                <div class="flex w-full items-center justify-between gap-3">

                                    <div class="flex min-w-0 items-center gap-2.5">
                                        <img
                                            src="{{ asset('images/image-2.png') }}"
                                            alt="David Chan"
                                            class="h-[50px] w-[50px] flex-shrink-0 rounded-full object-cover"
                                        >

                                        <span class="truncate text-lg font-medium text-[#4B4B4B]">
                                            David Chan
                                        </span>
                                    </div>

                                    <a
                                        href="javascript:;"
                                        class="flex-shrink-0 rounded-full border border-[#EA4B43] bg-[#EA4B43] px-6 py-3 text-[15px] font-bold text-white transition-all duration-[700ms] hover:bg-transparent hover:text-black"
                                    >
                                        Details
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- Slide 2 --}}
                    <div class="swiper-slide h-auto">
                        <div class="group h-full rounded-2xl bg-white p-5">

                            <div class="overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Rectangle 6736 (2).webp') }}"
                                    alt="Garden Duplex in Brooklyn"
                                    class="w-full rounded-2xl transition-transform duration-[700ms] group-hover:scale-110"
                                >
                            </div>

                            <div class="mt-5">

                                <h4 class="text-2xl font-bold">
                                    Garden Duplex in Brooklyn
                                </h4>

                                <ul class="mt-3 flex flex-wrap items-center gap-5 py-1 text-[15px] font-medium text-[#4B4B4B]">
                                    <li>
                                        <i class="fal fa-map-marker-alt mr-1"></i>
                                        New York City
                                    </li>

                                    <li>
                                        <i class="fal fa-calendar mr-1"></i>
                                        May 7, 2026
                                    </li>
                                </ul>

                                <ul class="mb-[30px] mt-2.5 flex items-center justify-between border-y border-dashed border-[#12182B1A] py-3 text-sm text-[#4B4B4B] sm:text-[15px]">
                                    <li>
                                        <i class="fal fa-bed mr-1 text-[#074F75]"></i>
                                        2 Bed(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-bath mr-1 text-[#074F75]"></i>
                                        2 Bath(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-vector-square mr-1 text-[#074F75]"></i>
                                        120/m²
                                    </li>
                                </ul>

                                <div class="flex w-full items-center justify-between gap-3">

                                    <div class="flex min-w-0 items-center gap-2.5">
                                        <img
                                            src="{{ asset('images/image-2.png') }}"
                                            alt="David Chan"
                                            class="h-[50px] w-[50px] flex-shrink-0 rounded-full object-cover"
                                        >

                                        <span class="truncate text-lg font-medium text-[#4B4B4B]">
                                            David Chan
                                        </span>
                                    </div>

                                    <a
                                        href="javascript:;"
                                        class="flex-shrink-0 rounded-full border border-[#EA4B43] bg-[#EA4B43] px-6 py-3 text-[15px] font-bold text-white transition-all duration-[700ms] hover:bg-transparent hover:text-black"
                                    >
                                        Details
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- Slide 3 --}}
                    <div class="swiper-slide h-auto">
                        <div class="group h-full rounded-2xl bg-white p-5">

                            <div class="overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Rectangle 6736 (3).webp') }}"
                                    alt="Garden Duplex in Brooklyn"
                                    class="w-full rounded-2xl transition-transform duration-[700ms] group-hover:scale-110"
                                >
                            </div>

                            <div class="mt-5">

                                <h4 class="text-2xl font-bold">
                                    Garden Duplex in Brooklyn
                                </h4>

                                <ul class="mt-3 flex flex-wrap items-center gap-5 py-1 text-[15px] font-medium text-[#4B4B4B]">
                                    <li>
                                        <i class="fal fa-map-marker-alt mr-1"></i>
                                        New York City
                                    </li>

                                    <li>
                                        <i class="fal fa-calendar mr-1"></i>
                                        May 7, 2026
                                    </li>
                                </ul>

                                <ul class="mb-[30px] mt-2.5 flex items-center justify-between border-y border-dashed border-[#12182B1A] py-3 text-sm text-[#4B4B4B] sm:text-[15px]">
                                    <li>
                                        <i class="fal fa-bed mr-1 text-[#074F75]"></i>
                                        2 Bed(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-bath mr-1 text-[#074F75]"></i>
                                        2 Bath(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-vector-square mr-1 text-[#074F75]"></i>
                                        120/m²
                                    </li>
                                </ul>

                                <div class="flex w-full items-center justify-between gap-3">

                                    <div class="flex min-w-0 items-center gap-2.5">
                                        <img
                                            src="{{ asset('images/image-2.png') }}"
                                            alt="David Chan"
                                            class="h-[50px] w-[50px] flex-shrink-0 rounded-full object-cover"
                                        >

                                        <span class="truncate text-lg font-medium text-[#4B4B4B]">
                                            David Chan
                                        </span>
                                    </div>

                                    <a
                                        href="javascript:;"
                                        class="flex-shrink-0 rounded-full border border-[#EA4B43] bg-[#EA4B43] px-6 py-3 text-[15px] font-bold text-white transition-all duration-[700ms] hover:bg-transparent hover:text-black"
                                    >
                                        Details
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- Slide 4 --}}
                    <div class="swiper-slide h-auto">
                        <div class="group h-full rounded-2xl bg-white p-5">

                            <div class="overflow-hidden rounded-2xl">
                                <img
                                    src="{{ asset('images/Rectangle 6736 (4).webp') }}"
                                    alt="Garden Duplex in Brooklyn"
                                    class="w-full rounded-2xl transition-transform duration-[700ms] group-hover:scale-110"
                                >
                            </div>

                            <div class="mt-5">

                                <h4 class="text-2xl font-bold">
                                    Garden Duplex in Brooklyn
                                </h4>

                                <ul class="mt-3 flex flex-wrap items-center gap-5 py-1 text-[15px] font-medium text-[#4B4B4B]">
                                    <li>
                                        <i class="fal fa-map-marker-alt mr-1"></i>
                                        New York City
                                    </li>

                                    <li>
                                        <i class="fal fa-calendar mr-1"></i>
                                        May 7, 2026
                                    </li>
                                </ul>

                                <ul class="mb-[30px] mt-2.5 flex items-center justify-between border-y border-dashed border-[#12182B1A] py-3 text-sm text-[#4B4B4B] sm:text-[15px]">
                                    <li>
                                        <i class="fal fa-bed mr-1 text-[#074F75]"></i>
                                        2 Bed(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-bath mr-1 text-[#074F75]"></i>
                                        2 Bath(s)
                                    </li>

                                    <li>
                                        <i class="fal fa-vector-square mr-1 text-[#074F75]"></i>
                                        120/m²
                                    </li>
                                </ul>

                                <div class="flex w-full items-center justify-between gap-3">

                                    <div class="flex min-w-0 items-center gap-2.5">
                                        <img
                                            src="{{ asset('images/image-2.png') }}"
                                            alt="David Chan"
                                            class="h-[50px] w-[50px] flex-shrink-0 rounded-full object-cover"
                                        >

                                        <span class="truncate text-lg font-medium text-[#4B4B4B]">
                                            David Chan
                                        </span>
                                    </div>

                                    <a
                                        href="javascript:;"
                                        class="flex-shrink-0 rounded-full border border-[#EA4B43] bg-[#EA4B43] px-6 py-3 text-[15px] font-bold text-white transition-all duration-[700ms] hover:bg-transparent hover:text-black"
                                    >
                                        Details
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<section class="team-section py-[100px]">
    <div class="mx-auto grid max-w-7xl grid-cols-12 gap-x-5 gap-y-[30px]">

        {{-- ================= LEFT CONTENT ================= --}}
        <div class="col-span-12 lg:col-span-4">
            <span
                class="mb-5 inline-block rounded-full border border-[#EA4B43] px-5 py-1.5 text-[13px] font-medium uppercase !font-involve"
            >
                Our Team
            </span>

            <h3 class="text-[48px] font-bold leading-none lg:text-[68px] !font-involve">
                Global executive leadership
            </h3>

            <a
                href="javascript:;"
                class="!font-involve group mt-10 inline-flex w-max items-center rounded-full border border-[#E0E0E0] py-[7px] pl-8 pr-1.5 font-medium text-black transition-all duration-500 hover:bg-[#EA4B43] hover:text-white"
            >
                Join Our Team

                <i
                    class="fa fa-arrow-right ml-2 !flex h-12 w-12 items-center justify-center rounded-full bg-[#EA4B43] text-[15px] text-white transition-all duration-500 group-hover:-rotate-45 group-hover:bg-white group-hover:text-black"
                ></i>
            </a>
        </div>


        {{-- ================= TEAM MEMBER 1 ================= --}}
        <div class="col-span-12 lg:col-span-4">
            <div class="group relative mb-[60px]">

                <div class="team-img relative">

                    <div class="overflow-hidden rounded-[30px]">
                        <img
                            src="{{ asset('images/team-2.png') }}"
                            alt="Johan Sanford"
                            class="w-full rounded-[30px] transition-all duration-700 group-hover:scale-110"
                        >
                    </div>

                    <a
                        href="javascript:;"
                        class="absolute -right-3 -top-3 rounded-full border-[10px] border-white bg-white"
                    >
                        <i
                            class="fa fa-arrow-right !flex h-12 w-12 items-center justify-center rounded-full border border-[#EA4B43] bg-[#EA4B43] text-[15px] text-white transition-all duration-500 group-hover:-rotate-45 group-hover:bg-white group-hover:text-black"
                        ></i>
                    </a>

                </div>

                <div
                    class="absolute -bottom-[50px] left-1/2 w-[80%] -translate-x-1/2 rounded-[20px] border border-white/10 bg-black/10 px-5 py-5 text-center backdrop-blur-[30px]"
                >
                    <span class="text-xs uppercase text-white">
                        Executive Assistant
                    </span>

                    <h4 class="mt-1.5 text-[28px] font-medium leading-none text-white !font-involve">
                        Johan Sanford
                    </h4>
                </div>

            </div>
        </div>


        {{-- ================= TEAM MEMBER 2 ================= --}}
        <div class="col-span-12 lg:col-span-4">
            <div class="group relative mb-[60px]">

                <div class="team-img relative">

                    <div class="overflow-hidden rounded-[30px]">
                        <img
                            src="{{ asset('images/team-3.png') }}"
                            alt="Floyd Miles"
                            class="w-full rounded-[30px] transition-all duration-700 group-hover:scale-110"
                        >
                    </div>

                    <a
                        href="javascript:;"
                        class="absolute -right-3 -top-3 rounded-full border-[10px] border-white bg-white"
                    >
                        <i
                            class="fa fa-arrow-right !flex h-12 w-12 items-center justify-center rounded-full border border-[#EA4B43] bg-[#EA4B43] text-[15px] text-white transition-all duration-500 group-hover:-rotate-45 group-hover:bg-white group-hover:text-black"
                        ></i>
                    </a>

                </div>

                <div
                    class="absolute -bottom-[50px] left-1/2 w-[80%] -translate-x-1/2 rounded-[20px] border border-white/10 bg-black/10 px-5 py-5 text-center backdrop-blur-[30px]"
                >
                    <span class="text-xs uppercase text-white">
                        Director Of Architecture
                    </span>

                    <h4 class="mt-1.5 text-[28px] font-medium leading-none text-white !font-involve">
                        Floyd Miles
                    </h4>
                </div>

            </div>
        </div>


        {{-- ================= TEAM MEMBER 3 ================= --}}
        <div class="col-span-12 lg:col-span-4">
            <div class="group relative mb-[60px]">

                <div class="team-img relative">

                    <div class="overflow-hidden rounded-[30px]">
                        <img
                            src="{{ asset('images/team-1.png') }}"
                            alt="Dennis Daniels"
                            class="w-full rounded-[30px] transition-all duration-700 group-hover:scale-110"
                        >
                    </div>

                    <a
                        href="javascript:;"
                        class="absolute -right-3 -top-3 rounded-full border-[10px] border-white bg-white"
                    >
                        <i
                            class="fa fa-arrow-right !flex h-12 w-12 items-center justify-center rounded-full border border-[#EA4B43] bg-[#EA4B43] text-[15px] text-white transition-all duration-500 group-hover:-rotate-45 group-hover:bg-white group-hover:text-black"
                        ></i>
                    </a>

                </div>

                <div
                    class="absolute -bottom-[50px] left-1/2 w-[80%] -translate-x-1/2 rounded-[20px] border border-white/10 bg-black/10 px-5 py-5 text-center backdrop-blur-[30px]"
                >
                    <span class="text-xs uppercase text-white">
                        Founder & CEO
                    </span>

                    <h4 class="mt-1.5 text-[28px] font-medium leading-none text-white">
                        Dennis Daniels
                    </h4>
                </div>

            </div>
        </div>


        {{-- ================= TEAM MEMBER 4 ================= --}}
        <div class="col-span-12 lg:col-span-4">
            <div class="group relative mb-[60px]">

                <div class="team-img relative">

                    <div class="overflow-hidden rounded-[30px]">
                        <img
                            src="{{ asset('images/team-4.png') }}"
                            alt="Leslie Alexander"
                            class="w-full rounded-[30px] transition-all duration-700 group-hover:scale-110"
                        >
                    </div>

                    <a
                        href="javascript:;"
                        class="absolute -right-3 -top-3 rounded-full border-[10px] border-white bg-white"
                    >
                        <i
                            class="fa fa-arrow-right !flex h-12 w-12 items-center justify-center rounded-full border border-[#EA4B43] bg-[#EA4B43] text-[15px] text-white transition-all duration-500 group-hover:-rotate-45 group-hover:bg-white group-hover:text-black"
                        ></i>
                    </a>

                </div>

                <div
                    class="absolute -bottom-[50px] left-1/2 w-[80%] -translate-x-1/2 rounded-[20px] border border-white/10 bg-black/10 px-5 py-5 text-center backdrop-blur-[30px]"
                >
                    <span class="text-xs uppercase text-white">
                        Development Manager
                    </span>

                    <h4 class="mt-1.5 text-[28px] font-medium leading-none text-white">
                        Leslie Alexander
                    </h4>
                </div>

            </div>
        </div>


        {{-- ================= JOIN OUR TEAM CARD ================= --}}
        <div class="col-span-12 lg:col-span-4">

            <div
                class="flex h-[89.5%] flex-col justify-between rounded-[30px] border border-[#E0E0E0] px-10 py-[30px]"
            >

                <div>
                    <img
                        src="{{ asset('images/Container (1).png') }}"
                        alt="Join Our Team"
                        class="max-w-full"
                    >
                </div>

                <div class="text-black">

                    <span class="mb-1 inline-block text-xs font-bold uppercase">
                        Join Our Team
                    </span>

                    <h5 class="mb-[22px] text-3xl font-bold leading-none !font-involve">
                        Start a career with excellent benefits
                    </h5>

                    <a
                        href="javascript:;"
                        class="!font-involve group inline-flex w-max items-center rounded-full border border-[#EA4B43] bg-[#EA4B43] py-[7px] pl-8 pr-1.5 font-medium text-white transition-all duration-500 hover:bg-white hover:text-black"
                    >
                        Current Openings

                        <i
                            class="fa fa-arrow-right ml-2 !flex h-12 w-12 items-center justify-center rounded-full bg-white text-[15px] text-black transition-all duration-500 group-hover:-rotate-45 group-hover:bg-[#EA4B43] group-hover:text-white"
                        ></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
<section class="testimonial pb-20">
    <div class="mx-auto max-w-7xl rounded-[24px] bg-[#EAF3FF] px-5 pb-[140px] pt-[80px] sm:rounded-[32px] lg:px-10 overflow-x-hidden">

        {{-- ================= HEADING ================= --}}
        <div class="flex justify-center">
            <div class="text-center">

                <span
                    class="mb-5 inline-block rounded-full border border-[#EA4B43] px-5 py-1.5 text-[13px] font-medium uppercase text-black !font-involve"
                >
                    Testimonials
                </span>

                <h3
                    class="mx-auto max-w-[800px] text-[38px] font-bold leading-none text-black sm:text-[45px] lg:text-[50px] !font-involve"
                >
                    What our clients say
                </h3>

            </div>
        </div>


        {{-- ================= TESTIMONIAL SLIDER ================= --}}
        <div
            class="relative mt-14"
            x-data
            x-init="
                new Swiper($refs.testimonialSlider, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    centeredSlides: true,
                    loop: true,
                    speed: 600,

                    pagination: {
                        el: $refs.testimonialPagination,
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5,
                            spaceBetween: 0,
                        },
                        1024: {
                            slidesPerView: 1.5,
                            spaceBetween: 0,
                        },
                    },
                    on: {
                        init: function () {
                            updateSlides(this);
                        },
                        slideChangeTransitionStart: function () {
                            updateSlides(this);
                        }
                    }
                });

                function updateSlides(swiper) {
                    swiper.slides.forEach(slide => {
                        slide.style.opacity = '0.5';
                        slide.style.transform = 'scale(0.9)';
                        slide.style.transition = 'all 0.5s ease';
                    });

                    const activeSlide = swiper.slides[swiper.activeIndex];

                    if (activeSlide) {
                        activeSlide.style.opacity = '1';
                        activeSlide.style.transform = 'scale(1)';
                    }
                }
            "
        >

            {{-- Swiper --}}
            <div
                x-ref="testimonialSlider"
                class="swiper !overflow-visible"
            >

                <div class="swiper-wrapper items-stretch">

                    {{-- ================= SLIDE 1 ================= --}}
                    <div class="swiper-slide h-auto">

                        <div
                            class="flex h-full flex-col items-center rounded-2xl bg-white p-7 text-center shadow-[40px_28px_80px_0px_#00000014]"
                        >

                            <img
                                src="{{ asset('images/Google__G__Logo 1.png') }}"
                                alt="Google"
                                class="h-[50px] w-[50px] object-contain"
                            >

                            {{-- Stars --}}
                            <ul class="mt-2 flex items-center gap-1 text-[15px] text-[#FCD503]">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>

                            {{-- Review --}}
                            <p class="mt-4 text-[15px] font-medium leading-6 text-[#8A8A8A]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <h6 class="mt-7 text-[19px] font-medium text-black">
                                From: Sophia Jenkins
                            </h6>

                            <span class="mt-2 text-xs italic text-[#4285F4]">
                                See it on Google
                            </span>

                        </div>

                    </div>


                    {{-- ================= SLIDE 2 ================= --}}
                    <div class="swiper-slide h-auto">

                        <div
                            class="flex h-full flex-col items-center rounded-2xl bg-white p-7 text-center shadow-[40px_28px_80px_0px_#00000014]"
                        >

                            <img
                                src="{{ asset('images/Google__G__Logo 1.png') }}"
                                alt="Google"
                                class="h-[50px] w-[50px] object-contain"
                            >

                            <ul class="mt-2 flex items-center gap-1 text-[15px] text-[#FCD503]">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>

                            <p class="mt-4 text-[15px] font-medium leading-6 text-[#8A8A8A]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <h6 class="mt-7 text-[19px] font-medium text-black">
                                From: Sophia Jenkins
                            </h6>

                            <span class="mt-2 text-xs italic text-[#4285F4]">
                                See it on Google
                            </span>

                        </div>

                    </div>


                    {{-- ================= SLIDE 3 ================= --}}
                    <div class="swiper-slide h-auto">

                        <div
                            class="flex h-full flex-col items-center rounded-2xl bg-white p-7 text-center shadow-[40px_28px_80px_0px_#00000014]"
                        >

                            <img
                                src="{{ asset('images/Google__G__Logo 1.png') }}"
                                alt="Google"
                                class="h-[50px] w-[50px] object-contain"
                            >

                            <ul class="mt-2 flex items-center gap-1 text-[15px] text-[#FCD503]">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>

                            <p class="mt-4 text-[15px] font-medium leading-6 text-[#8A8A8A]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <h6 class="mt-7 text-[19px] font-medium text-black">
                                From: Sophia Jenkins
                            </h6>

                            <span class="mt-2 text-xs italic text-[#4285F4]">
                                See it on Google
                            </span>

                        </div>

                    </div>


                    {{-- ================= SLIDE 4 ================= --}}
                    <div class="swiper-slide h-auto">

                        <div
                            class="flex h-full flex-col items-center rounded-2xl bg-white p-7 text-center shadow-[40px_28px_80px_0px_#00000014]"
                        >

                            <img
                                src="{{ asset('images/Google__G__Logo 1.png') }}"
                                alt="Google"
                                class="h-[50px] w-[50px] object-contain"
                            >

                            <ul class="mt-2 flex items-center gap-1 text-[15px] text-[#FCD503]">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>

                            <p class="mt-4 text-[15px] font-medium leading-6 text-[#8A8A8A]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <h6 class="mt-7 text-[19px] font-medium text-black">
                                From: Sophia Jenkins
                            </h6>

                            <span class="mt-2 text-xs italic text-[#4285F4]">
                                See it on Google
                            </span>

                        </div>

                    </div>


                    {{-- ================= SLIDE 5 ================= --}}
                    <div class="swiper-slide h-auto">

                        <div
                            class="flex h-full flex-col items-center rounded-2xl bg-white p-7 text-center shadow-[40px_28px_80px_0px_#00000014]"
                        >

                            <img
                                src="{{ asset('images/Google__G__Logo 1.png') }}"
                                alt="Google"
                                class="h-[50px] w-[50px] object-contain"
                            >

                            <ul class="mt-2 flex items-center gap-1 text-[15px] text-[#FCD503]">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>

                            <p class="mt-4 text-[15px] font-medium leading-6 text-[#8A8A8A]">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>

                            <h6 class="mt-7 text-[19px] font-medium text-black">
                                From: Sophia Jenkins
                            </h6>

                            <span class="mt-2 text-xs italic text-[#4285F4]">
                                See it on Google
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ================= PAGINATION ================= --}}
            <div
                x-ref="testimonialPagination"
                class="testimonial-pagination !-bottom-[40px] !relative mt-0 text-center"
            ></div>

        </div>

    </div>
</section>
  <section class="rounded-[60px] bg-white py-[100px]">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-5 lg:grid-cols-2 lg:gap-16">

        {{-- ================= LEFT CONTENT ================= --}}
        <div class="enquiry">

            {{-- Badge --}}
            <span
                class="mb-5 inline-block rounded-full border border-[#EA4B43] px-5 py-1.5 text-[13px] font-medium uppercase !font-involve"
            >
                Quick Enquiry
            </span>

            {{-- Heading --}}
            <h3 class="w-full max-w-[440px] text-[42px] font-bold leading-none text-black sm:text-[50px] lg:text-[60px] !font-involve">
                We’d love to hear from you
            </h3>

            {{-- Phone --}}
            <div class="mt-5 flex items-center gap-5">

                {{-- Images --}}
                <div class="flex items-center -space-x-2">

                    <i
                        class="fas fa-phone-alt relative z-10 !flex h-10 w-10 items-center justify-center rounded-full bg-[#EA4B43] text-white"
                    ></i>

                    <img
                        src="{{ asset('images/image.webp') }}"
                        alt="Image"
                        class="h-10 w-10 rounded-full object-cover"
                    >

                </div>

                {{-- Phone Info --}}
                <div>
                    <span class="block text-[13px] font-medium text-[#8A8A8A]">
                        Phone Number
                    </span>

                    <a
                        href="tel:+11112345688"
                        class="text-[19px] font-medium tracking-[-0.5px] text-black transition-all duration-700 hover:text-[#8A8A8A]"
                    >
                        +(111) 123 - 456 88
                    </a>
                </div>

            </div>

        </div>


        {{-- ================= RIGHT CONTENT ================= --}}
        <div>

            {{-- Description --}}
            <p class="mb-7 text-[18px] font-bold leading-[1.3] text-black sm:text-[22px]">
                We’d love to share more with you, please complete this form
                and our dedicated team will get back to you shortly.
            </p>


            {{-- Form --}}
            <form class="flex flex-wrap gap-5">

                {{-- Name --}}
                <input
                    class="mb-2 w-full rounded-full bg-[#F2F2F2] px-7 py-4 text-[#4B4B4B] placeholder:font-medium placeholder:text-[#4B4B4B] focus:outline-none sm:w-[calc(50%-10px)]"
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Your Name*"
                >


                {{-- Email --}}
                <input
                    class="mb-2 w-full rounded-full bg-[#F2F2F2] px-7 py-4 text-[#4B4B4B] placeholder:font-medium placeholder:text-[#4B4B4B] focus:outline-none sm:w-[calc(50%-10px)]"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email*"
                >


                {{-- Phone --}}
                <input
                    class="mb-2 w-full rounded-full bg-[#F2F2F2] px-7 py-4 text-[#4B4B4B] placeholder:font-medium placeholder:text-[#4B4B4B] focus:outline-none sm:w-[calc(50%-10px)]"
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="Phone Number*"
                >


                {{-- Select --}}
                <select
                    class="mb-2 w-full rounded-full bg-[#F2F2F2] px-7 py-4 text-[#4B4B4B] focus:outline-none sm:w-[calc(50%-10px)]"
                    name="inquiry"
                    id="inquiry"
                >
                    <option value="0">
                        Your inquiry about...
                    </option>

                    <option value="1">
                        Property Management
                    </option>

                    <option value="2">
                        Home Maintenance
                    </option>

                    <option value="3">
                        Other Services
                    </option>
                </select>


                {{-- Bottom Row --}}
                <div class="flex w-full flex-col items-start justify-between gap-5 sm:flex-row sm:items-center">

                    {{-- Required Text --}}
                    <p class="w-full max-w-[300px] text-base font-medium leading-[1.4] text-[#4B4B4B]">
                        We're excited to connect with you!
                        Required fields are marked *
                    </p>


                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="!font-involve group flex w-max items-center rounded-full border border-[#EA4B43] bg-[#EA4B43] py-1.5 pl-8 pr-1.5 font-medium text-white transition-all duration-500 hover:bg-white hover:text-black"
                    >
                        Get A Call Back

                        <i
                            class="fa fa-arrow-right ml-2 !flex h-12 w-12 items-center justify-center rounded-full bg-white text-[15px] text-black transition-all duration-500 group-hover:-rotate-45 group-hover:bg-[#EA4B43] group-hover:text-white"
                        ></i>
                    </button>

                </div>

            </form>

        </div>

    </div>
</section>
</x-site.layout>
