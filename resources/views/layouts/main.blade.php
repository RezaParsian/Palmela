<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palmela</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section id="navbar">
    <div class="container mx-auto bg-palmela-100 rounded-full py-4 px-6 flex justify-between">
        <div>
            <a href="./">
                <img src="{{asset('./src/images/palmela-logo.svg')}}" alt="#logo">
            </a>
        </div>

        <div class="hidden md:flex flex-1">
            <ul class="flex gap-4 my-auto flex-1 pl-40" id="nav">
                @if(!request()->is('dashboard*'))
                    <li>
                        <a class="helvetica-medium" title="Home" href="{{route('home')}}">Home</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Our History" href="#">Our History</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Payments" href="#">Payments</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Resources" href="#">Resources</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Shop" href="#">Shop</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Blog" href="#">Blog</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Help" href="{{route('contact')}}">Help</a>
                    </li>
                @else
                    <li>
                        <a class="helvetica-medium" title="Help" href="{{route('currencies.index')}}">Currencies</a>
                    </li>

                    <li>
                        <a class="helvetica-medium" title="Help" href="{{route('contact')}}">Currencies</a>
                    </li>
                @endif
            </ul>

            <div class="flex gap-3">
                <a href="{{route('currencies.index')}}" class="rounded-full bg-palmela-400 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]">
                    @guest
                        Login
                    @else
                        {{auth()->user()->name}}
                    @endif
                </a>

                @auth
                    <form method="post" action="{{route('logout')}}" onclick="this.submit()"
                          class="rounded-full bg-palmela-100 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px] cursor-pointer">
                        @csrf
                        @method('delete')
                        Logout
                    </form>
                @endauth
            </div>
        </div>

        <button id="offCanvasMenuBtn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="md:hidden w-10 h-10">
                <path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/>
            </svg>
        </button>

        <div id="offCanvas" class="fixed bg-palmela-200 right-0 top-0 w-0 h-screen">
            <div class="flex mt-5 px-4 items-center justify-between border-b border-b-palmela-800/10 pb-8">
                <h1 class="text-[#474747]">Palmela</h1>

                <button id="offCanvasCloseMenuBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                        <path fill="#474747"
                              d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/>
                    </svg>
                </button>
            </div>

            <ul class="[&_li]:border-b px-9 [&_li]:border-b-palmela-800/10 [&_li]:p-4 [&_li]:font-Hel_Med">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>

                <li>
                    <a href="#">Our History</a>
                </li>

                <li>
                    <a href="#">Payments</a>
                </li>

                <li>
                    <a href="#">Resources</a>
                </li>

                <li>
                    <a href="#">Shop</a>
                </li>

                <li>
                    <a href="#">Blog</a>
                </li>

                <li>
                    <a href="#">Help</a>
                </li>
            </ul>

            <div class="px-9 mt-6">
                <h4>Contact Info</h4>

                <ul class="mt-5 text-palmela-10 [&_li]:flex [&_li]:gap-2 flex flex-col gap-5">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.4rem" height="1.4rem" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                  d="m19.799 5.165l-2.375-1.83a2 2 0 0 0-.521-.237A2 2 0 0 0 16.336 3H9.5l.801 5h6.035c.164 0 .369-.037.566-.098s.387-.145.521-.236l2.375-1.832c.135-.091.202-.212.202-.334s-.067-.243-.201-.335M8.5 1h-1a.5.5 0 0 0-.5.5V5H3.664c-.166 0-.37.037-.567.099c-.198.06-.387.143-.521.236L.201 7.165C.066 7.256 0 7.378 0 7.5c0 .121.066.242.201.335l2.375 1.832c.134.091.323.175.521.235c.197.061.401.098.567.098H7v8.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-17a.5.5 0 0 0-.5-.5"/>
                        </svg>

                        <span>950 Peninsula Corp Cir #1013, Florida, USA</span>
                    </li>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.4rem" height="1.4rem" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.97 5.97 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4q-.112.002-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4m-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2"/>
                        </svg>

                        <span>hello@palmela.com</span>
                    </li>

                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z"/>
                        </svg>

                        <span>+888 875 76869 758</span>
                    </li>
                </ul>

                <div class="flex gap-4 mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-white w9 h-9 rounded p-2 bg-palmela-800">
                        <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-white w9 h-9 rounded p-2 bg-palmela-800">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-white w9 h-9 rounded p-2 bg-palmela-800">
                        <path
                            d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-white w9 h-9 rounded p-2 bg-palmela-800">
                        <path d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"/>
                    </svg>
                </div>

                <div class="flex gap-3 mt-9 justify-center">
                    <button class="rounded-full bg-palmela-400 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]">
                        Get A Quote
                    </button>

                    <button class="rounded-full bg-palmela-100 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]">
                        More Service
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('content')

<footer class="bg-palmela-900 md:bg-palmela-400 p-3">
    <div class="container mx-auto pt-12 md:pt-32">
        <div class="md:flex items-center">
            <h2 class="text-palmela-200 md:text-black/80 md:!leading-[91px] md:!tracking-[-1.92px] text-[28px] md:text-[96px] md:whitespace-pre-line flex-1">We have no
                hidden fees for
                subscription</h2>

            <div class="flex-1">
                <p class="md:whitespace-pre-line md:font-medium md:!text-[24px] md:!leading-[36px] text-palmela-200 md:text-black/80 my-7 md:my-0">Stay current with text updates, email notifications,
                    online access, or call our friendly support staff
                    24/7 to grow up your own business.</p>

                <button class="bg-palmela-400 md:bg-palmela-800 text-palmela-800 md:text-white rounded-lg px-4 py-3 mt-4 font-Hel_Med">
                    Get setup today
                </button>
            </div>
        </div>

        <div class="relative mt-12 md:mt-32">
            <div class="hidden md:block" id="footer-bg"></div>

            <div class="relative md:px-[150px] md:pb-40">
                <div class="flex flex-col gap-4 md:gap-0 md:flex-row justify-between mb:absolute left-40 right-40 top-6">
                    <h1 class="text-white text-[2.5rem]">Palmela</h1>

                    <a href="#" class="text-palmela-200 md:text-palmela-900 !text-[20px] md:!text-[40px] md:!leading-[36px] font-Hel_Med">support@palmela.com</a>

                    <a href="#" class="text-palmela-200 md:text-palmela-900 !text-[20px] md:!text-[40px] md:!leading-[36px] font-Hel_Med">+394 9300 0077</a>
                </div>

                <div class="md:flex pt-12 md:pt-28">
                    <div class="flex-1">
                        <p class="text-[#ffffffa6] text-[15px] md:!text-[20px] !font-['Inter'] font-light">
                            Need to talk to us directly for your help?
                            <a href="#" class="text-palmela-400 font-medium">Contact US</a>
                        </p>

                        <div class="md:flex items-center mt-5 gap-8">
                            <p class="text-white md:!text-[20px] font-medium !leading-[16px]">Follow Us:</p>

                            <div class="mt-4 md:mt-0 flex gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path
                                        d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path
                                        d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path
                                        d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 mt-4 md:mt-0 md:pl-36">
                        <h5 class="!text-[20px] font-light text-[#ffffffa6] !font-['Inter'] mb-5">Stay connected with us</h5>

                        <div class="flex">
                            <input type="text" placeholder="Enter your email"
                                   class="focus:outline-0 border-r-0 rounded-r-none">

                            <button class="bg-palmela-400 font-medium hover:bg-palmela-100 px-8 rounded-lg rounded-l-none whitespace-nowrap">
                                Subscribe now
                            </button>
                        </div>
                    </div>
                </div>

                <hr class="my-8 border-palmela-50/20">

                <div class="flex flex-col md:flex-row gap-4 md:gap-0">
                    <div class="flex-1">
                        <h3 class="menu-header">Palmela Services</h3>

                        <ul>
                            <li class="menu-item">Manufacturing</li>
                            <li class="menu-item">Marine</li>
                            <li class="menu-item">Payroll</li>
                            <li class="menu-item">Pensions</li>
                            <li class="menu-item">Retail</li>
                        </ul>
                    </div>

                    <div class="flex-1">
                        <h3 class="menu-header">Resources</h3>

                        <ul>
                            <li class="menu-item">Home</li>
                            <li class="menu-item">Home Two</li>
                            <li class="menu-item">Home Three</li>
                            <li class="menu-item">Our Service</li>
                            <li class="menu-item">Refer Friends</li>
                        </ul>
                    </div>

                    <div class="flex-1">
                        <h3 class="menu-header">Quick Links</h3>

                        <ul>
                            <li class="menu-item">Our History</li>
                            <li class="menu-item">Blog</li>
                            <li class="menu-item">FAQ</li>
                            <li class="menu-item">Terms and Conditions</li>
                            <li class="menu-item">Privacy Policy</li>
                        </ul>

                    </div>

                    <div class="flex-1">
                        <h3 class="menu-header">Help and Support</h3>

                        <ul>
                            <li class="menu-item">
                                <a href="{{route('contact')}}">Help</a>
                            </li>
                            <li class="menu-item">Refer Friends</li>
                            <li class="menu-item">Currency Data Api</li>
                            <li class="menu-item">All Country</li>
                            <li class="menu-item">Our Pricing</li>
                        </ul>

                    </div>
                </div>

                <div class="grid grid-cols-2 md:flex justify-between md:absolute bottom-14 right-32 left-32">
                    <a href="{{route('contact')}}" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">Help</a>
                    <a href="#" class="text-palmela-200 md:text-black/80 md:font-Hel_Med">Terms and Conditions</a>
                    <a href="#" class="text-palmela-200 md:text-black/80 md:font-Hel_Med">FAQ</a>
                    <a href="#" class="text-palmela-200 md:text-black/80 md:font-Hel_Med">Our Pricing</a>
                    <a href="#" class="text-palmela-200 md:text-black/80 md:font-Hel_Med">All Country</a>
                    <a href="#" class="text-palmela-200 md:text-black/80 md:font-Hel_Med">Refer Friends</a>

                    <p class="text-[#ffffffa6] text-center md:text-left col-span-2 mt-4 md:mt-0">
                        © Palmela is proudly owned by
                        <a href="#" class="text-palmela-400">HiBootstrap</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

@yield('js')
</body>
</html>
