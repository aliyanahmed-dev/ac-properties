


<footer
    class="footer relative z-10 bg-cover bg-no-repeat pt-16 pb-5 before:absolute before:inset-0 before:-z-10 before:h-full before:w-full before:bg-black before:opacity-50"
    style="background-image: url('{{ asset('images/footer-background.webp') }}');">
    {{-- Top CTA --}}
    <div class="flex w-full justify-center">
        <div class="flex w-full max-w-2xl flex-col items-center px-4 text-center text-white">

            <h2 class="mb-5 px-5 text-4xl font-bold leading-none sm:text-5xl md:px-10 md:text-6xl !font-involve">
                Your dream home awaits
            </h2>

            <p class="max-w-xl text-sm leading-6 sm:text-base">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>

            <a
                href="#"
                class="mt-5 flex h-28 w-28 items-center justify-center rounded-full bg-white/25 p-5 text-center text-sm font-medium leading-tight text-white backdrop-blur-md transition-all duration-700 hover:bg-white hover:text-black sm:h-32 sm:w-32 sm:text-base"
            >
                Get Your Free Quote
            </a>

        </div>
    </div>


    {{-- Footer Main Box --}}
    <div class="mx-4 mt-12 rounded-[40px] bg-white px-6 pb-8 pt-14 sm:mx-8 md:mx-12 lg:mx-20 lg:mt-16 lg:px-12 xl:px-20">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-12 lg:gap-5">

            {{-- Logo / About --}}
            <div class="lg:col-span-4">

                <div class="logo">

                    <a href="#">
                        <img
                            src="{{ asset('images/footer-logo.png') }}"
                            alt="Footer Logo"
                            class="max-w-full"
                        >
                    </a>

                    <p class="mt-5 max-w-md text-sm leading-6 text-[#8A8A8A] sm:text-base lg:pr-10">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>

                </div>

            </div>


            {{-- First Menu --}}
            <div class="lg:col-span-2">

                <div class="footer-menu border-l border-[#E0E0E0] pl-6 lg:pl-8">

                    <ul class="text-base">

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Home
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                About Us
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Our Team
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Services
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Testimonials
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Property Listing
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            {{-- Second Menu --}}
            <div class="lg:col-span-2">

                <div class="footer-menu border-r border-[#E0E0E0] pl-4 lg:pl-6">

                    <ul class="text-base">

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Tenants
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Marketplace
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Terms & Conditions
                            </a>
                        </li>

                        <li class="mb-3">
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Privacy Policies
                            </a>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="inline-block font-bold text-black transition-all duration-500 hover:translate-x-2.5 hover:text-[#8A8A8A]"
                            >
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            {{-- Contact / Social --}}
            <div class="lg:col-span-4">

                <div class="footer-social">

                    {{-- Phone --}}
                    <a
                        href="tel:+1 (844) 915 5678"
                        class="mb-2 w-[60%] !inline-block border-b border-[#EA4B43] pb-2 text-base font-bold tracking-tight text-black transition-all duration-500 hover:text-[#8A8A8A] sm:text-2xl"
                    >
                        +1 (844) 915 5678
                    </a>

                    {{-- Email --}}
                    <a
                        href="mailto:info@acpropertiesinc.com"
                        class="border-b w-[60%] !inline-block border-[#EA4B43] pb-2 text-base font-bold tracking-tight text-black transition-all duration-500 hover:text-[#8A8A8A] sm:text-2xl"
                    >
                        info@acpropertiesinc.com
                    </a>


                    {{-- Social Links --}}
                    <ul class="mt-4 flex flex-wrap gap-2.5 text-xs font-semibold text-[#8A8A8A]">

                        <li class="flex items-center">
                            <a
                                href="https://www.facebook.com/acpropertiesmanagement/" target="blank"
                                class="pr-2.5 transition-all duration-500 hover:text-black"
                            >
                                Facebook
                            </a>

                            <span class="h-1 w-1 rounded-full bg-[#8A8A8A]"></span>
                        </li>

                        <li class="flex items-center">
                            <a
                                href="https://www.instagram.com/ac_propertiesinc/"  target="blank"
                                class="pr-2.5 transition-all duration-500 hover:text-black"
                            >
                                Instagram
                            </a>

                            <span class="h-1 w-1 rounded-full bg-[#8A8A8A]"></span>
                        </li>

                        <li class="flex items-center">
                            <a
                                href="#"
                                class="pr-2.5 transition-all duration-500 hover:text-black"
                            >
                                YouTube
                            </a>

                            <span class="h-1 w-1 rounded-full bg-[#8A8A8A]"></span>
                        </li>

                        <li>
                            <a
                                href="#"
                                class="transition-all duration-500 hover:text-black"
                            >
                                Twitter
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            {{-- Copyright --}}
            <div class="col-span-1 md:col-span-2 lg:col-span-12">

                <div class="mt-5 border-t border-[#E0E0E0] pt-6 text-center lg:mt-10 lg:pt-8">

                    <p class="text-sm text-[#8A8A8A]">
                        © Copyright 2026. All Rights Reserved.
                    </p>

                </div>

            </div>

        </div>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
