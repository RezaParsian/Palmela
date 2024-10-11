@extends('layouts.main')

@section('content')
    <div x-data="currency">
        <section id="hero" class="pt-28 md:pt-48 pb-12">
            <div class="container mx-auto">
                <div class="flex">
                    <h1 class="p-7">
                        EXCHANGE
                    </h1>

                    <div class="relative left-[14%] top-10">
                        <img src="{{asset('./src/images/hero-shape-3.png')}}" id="hero-shape" alt="shape">
                    </div>
                </div>

                <h1 class="block md:hidden text-right mr-7">CURRENCY</h1>


                <div class="flex flex-col md:flex-row md:gap-12">
                    <div class="w-full md:flex-1 px-4 md:px-16">
                        <div class="bg-palmela-100 rounded mx-auto py-5 px-12 mt-12 md:mt-24">
                            <form class="[&_div]:mt-3">
                                <div class="flex flex-col gap-4">
                                    <label for="amount" class="form-label">Enter Amount</label>
                                    <input type="text" id="amount" x-model="amount"
                                           class="focus:outline-0 focus:border-palmela-400 border p-3 bg-palmela-100 rounded-lg w-full"
                                           value="1">
                                </div>

                                <div class="flex flex-col gap-4">
                                    <label for="from" class="form-label">From</label>

                                    <div class="select-box">
                                        <img decoding="async" class="flagImg" :src="iconFrom" alt="flag">

                                        <select name="from" id="from" x-model="selectedFrom">
                                            <template x-for="currency in currencies">
                                                <option :value="currency.symbol" x-text="currency.symbol" :key="currency.symbol"></option>
                                            </template>
                                        </select>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-4">
                                    <label for="to" class="form-label">To</label>

                                    <div class="select-box">
                                        <img decoding="async" class="flagImg" :src="iconTo" alt="flag">

                                        <select name="to" id="to" x-model="selectedTo">
                                            <template x-for="currency in currencies">
                                                <option :value="currency.symbol" x-text="currency.symbol" :key="currency.symbol"></option>
                                            </template>
                                        </select>
                                    </div>
                                </div>

                                <p class="text-palmela-800 font-semibold mt-3">
                                    <span x-text="Number(amount).toLocaleString()"></span>
                                    <span x-text="selectedFrom"></span>
                                    =
                                    <span x-text="calculate.toLocaleString()"></span>
                                    <span x-text="selectedTo"></span>
                                </p>

                                <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-sm my-6 hover:bg-palmela-200 hover:text-palmela-900">
                                    Get Exchange Rate
                                </button>

                                <p class="text-palmela-900 font-light text-sm mt-3">
                                    Currency rate latest change
                                    <strong class="font-bold">
                                        {{now()->toDateString()}}
                                    </strong>
                                </p>
                            </form>
                        </div>
                    </div>

                    <h1 class="md:mt-[76px] md:flex-1">
                        <span class="hidden md:block">CURRENCY</span>

                        <span class="flex">
                            <span class="rounded-lg shadow-lg shadow-palmela-800 mt-12 md:ml-8 bg-white w-10/12 p-2">
                                  <canvas id="chart">
                                  </canvas>
                            </span>

                            <span class="hidden md:flex items-center cursor-pointer ml-auto">
                                <img src="{{asset('./src/images/scroll-2.svg')}}" alt="scroll-2" class="animate-bounce-slow">
                            </span>
                        </span>
                    </h1>
                </div>
            </div>
        </section>

        <section id="howTo" class="pb-12">
            <div class="container mx-auto">
                <h2 class="px-10 md:px-0 section-title md:whitespace-pre-line text-palmela-900 text-center">
                    How to send currency
                    in 3 easy steps
                </h2>

                <div id="process" class="px-4 md:px-0 md:grid grid-cols-2 md:py-16">
                    <div class="md:ml-64">
                        <h3 class="title">
                            Enter your amount
                            to send in GBP.
                        </h3>

                        <p>It takes just a few minutes, and all you need
                            is an email address.
                        </p>

                        <button class="rounded-lg bg-palmela-500 border border-palmela-800 py-3 md:py-4 px-6 md:px-12 font-semibold my-6 hover:bg-palmela-400 hover:text-black">
                            Get free quote now
                        </button>
                    </div>

                    <div class="md:ml-72">
                        <h3 class="title">
                            Choose recipient
                            in the USA
                        </h3>

                        <p>Add recipient (you'll need their address,
                            bank account/IBAN, swift/BIC) and payment
                            information.
                        </p>

                        <button class="rounded-lg bg-palmela-500 border border-palmela-800 py-3 md:py-4 px-6 md:px-12 font-semibold my-6 hover:bg-palmela-400 hover:text-black">
                            Get started now
                        </button>
                    </div>

                </div>

                <div class="px-4 md:flex md:px-52 md:mt-6">
                    <div class="flex-1">
                        <h3 class="title">Send GBP or anything, receive
                            USD for your business.
                        </h3>

                        <p id="buy">Check the currencies and amount are correct, get the expected
                            delivery date, and send your money transfer.
                        </p>
                    </div>

                    <div class="flex">
                        <button class="mt-6 md:mt-0 rounded-lg bg-palmela-400 py-3 md:py-4 px-6 md:px-12 font-semibold hover:bg-palmela-100 my-auto">
                            View all country
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="account" class="pb-12">
            <div class="container mx-auto md:flex">
                <div class="mx-4 md:mx-0 md:mt-24 md:ml-24">
                    <h2 class="section-title md:whitespace-pre-line text-palmela-900 !text-[70px] !leading-[76px] !tracking-[-2.1px]">
                        Make your money go
                        further & further for
                        business
                    </h2>

                    <p class="my-7 md:my-0 md:whitespace-pre-line text-[#555] md:text-[24px] md:leading-[36px]">The World
                        Account is designed for cross-border businesses
                        trading in multiple currencies. For importers and exporters,
                        whether you do business on a marketplace.
                    </p>
                </div>

                <img src="{{asset('./src/images/simple-img-1.png')}}" alt="simple image" class="ml-auto">
            </div>
        </section>

        <section id="next-step" class="md:pb-48">
            <div class="container mx-auto md:flex">
                <div class="relative md:mt-24 md:ml-24">
                    <img src="{{asset('./src/images/simple-img-2.png')}}" alt="simple image" class="px-2 md:ml-auto">
                    <img src="{{asset('./src/images/simple-img-3.png')}}" alt="simple image"
                         class="ml-auto absolute -bottom-32 -right-0 md:-right-4">
                </div>

                <div class="flex items-center mx-3 md:mx-6 mt-32">
                    <div>

                        <h2 class="section-title whitespace-pre-line text-palmela-900 !text-[70px] !leading-[76px] !tracking-[-2.1px]">
                            Take you next step for
                            your business</h2>

                        <p class="whitespace-pre-line text-[#555] md:text-[24px] md:leading-[36px] my-6">Flex your financial
                            muscle. We’ll spot you with helpful articles, tips,
                            and stories from people like you who are exercising their financial
                            know-how in making every dollar go further.
                        </p>

                        <button class="rounded-lg bg-palmela-400 py-4 px-12 font-semibold hover:bg-palmela-100 my-auto mt-12">
                            View our services
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="brands" class="px-18 py-12">
            <h4 class="text-center text-palmela-800 text-[20px] md:text-[22px] !leading-[36px] tracking-[-.33px]">We worked with
                global larges brands</h4>

            <div id="swiper_brands" class="swiper mt-12">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-1.png"
                             alt="partner-1.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-2.png"
                             alt="partner-2.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-3.png"
                             alt="partner-3.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-4.png"
                             alt="partner-4.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-5.png"
                             alt="partner-5.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-6.png"
                             alt="partner-6.png" class="mx-auto">
                    </div>

                    <div class="swiper-slide">
                        <img src="https://themes.hibootstrap.com/palmela/wp-content/uploads/2023/09/partner-7.png"
                             alt="partner-7.png" class="mx-auto">
                    </div>
                </div>
            </div>
        </section>

        <section id="solutions" class="pb:12 md:pb-48 bg-[#fdf6e3]">
            <div class="container mx-auto">
                <div class="md:flex md:mx-24 md:mt-32">
                    <div class="flex-1">
                        <h2 class="section-title mx-3 md:mx-0 md:whitespace-pre-line text-palmela-900 !text-[70px] !leading-[76px] !tracking-[-2.1px]">
                            Industry solution
                            for business</h2>
                    </div>

                    <button class="rounded-lg bg-palmela-400 mx-3 md:mx-0 py-3 md:py-4 px-4 md:px-12 font-semibold hover:bg-palmela-100 my-auto mt-12">
                        View all solutions
                    </button>
                </div>

                <div id="swiper_solutions" class="swiper mt-12">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="relative p-6">
                                <div class="service-card mt-5">
                                    <img src="{{asset('./src/images/service-7-565x350.png')}}" alt="Manufacturing">
                                </div>

                                <div class="flex mt-6">
                                    <div class="flex items-center">
                                        <div class="bg-[#fae7b1] p-5 mx-6">
                                            <img src="src/images/credit-card.svg" alt="credit-card">
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h3 class="text-palmela-900 text-[24px] font-semibold">
                                            Manufacturing
                                        </h3>

                                        <button class="mt-4 border border-palmela-800 px-6 py-3 rounded font-semibold text-palmela-900">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative p-6">
                                <div class="service-card mt-5">
                                    <img src="{{asset('./src/images/service-8-565x350.png')}}" alt="Pensions">
                                </div>

                                <div class="flex mt-6">
                                    <div class="flex items-center">
                                        <div class="bg-[#fae7b1] p-5 mx-6">
                                            <img src="src/images/family.svg" alt="credit-card">
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h3 class="text-palmela-900 text-[24px] font-semibold">
                                            Pensions
                                        </h3>

                                        <button class="mt-4 border border-palmela-800 px-6 py-3 rounded font-semibold text-palmela-900">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative p-6">
                                <div class="service-card mt-5">
                                    <img src="{{asset('./src/images/service-9-565x350.png')}}" alt="Travel">
                                </div>

                                <div class="flex mt-6">
                                    <div class="flex items-center">
                                        <div class="bg-[#fae7b1] p-5 mx-6">
                                            <img src="src/images/my-business.svg" alt="credit-card">
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h3 class="text-palmela-900 text-[24px] font-semibold">
                                            Travel
                                        </h3>

                                        <button class="mt-4 border border-palmela-800 px-6 py-3 rounded font-semibold text-palmela-900">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative p-6">
                                <div class="service-card mt-5">
                                    <img src="{{asset('./src/images/service-5-565x350.png')}}" alt="Retail">
                                </div>

                                <div class="flex mt-6">
                                    <div class="flex items-center">
                                        <div class="bg-[#fae7b1] p-5 mx-6">
                                            <img src="src/images/donation.svg" alt="credit-card">
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h3 class="text-palmela-900 text-[24px] font-semibold">
                                            Retail
                                        </h3>

                                        <button class="mt-4 border border-palmela-800 px-6 py-3 rounded font-semibold text-palmela-900">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative p-6">
                                <div class="service-card mt-5">
                                    <img src="{{asset('./src/images/service-6-565x350.png')}}" alt="Marine">
                                </div>

                                <div class="flex mt-6">
                                    <div class="flex items-center">
                                        <div class="bg-[#fae7b1] p-5 mx-6">
                                            <img src="src/images/instance.svg" alt="credit-card">
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h3 class="text-palmela-900 text-[24px] font-semibold">
                                            Marine
                                        </h3>

                                        <button class="mt-4 border border-palmela-800 px-6 py-3 rounded font-semibold text-palmela-900">
                                            Read more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sending_money" class="mt-12 md:mt-0 bg-[#f0bd1a] pt-12 pb-24">
            <div class="container mx-auto">
                <div class="mx-3 md:flex md:mx-24">
                    <div class="flex-1">
                        <h2 class="section-title md:whitespace-pre-line text-black/80 md:!text-[96px] md:!leading-[97px] md:!tracking-[-1.92px]">
                            Save up to 12x when
                            sending money abroad</h2>

                        <p class="md:whitespace-pre-line text-[#474747] !text-[20px] !leading-[30px] regular mt-12 relative">The World Payments is designed for cross-border
                            businesses
                            trading in multiple
                            currencies. For importers and exporters, whether you do business on a marketplace.

                            <img src="{{asset('./src/images/feature-1.png')}}" alt="feature-1" class="absolute right-6 -top-16 hidden md:block">
                        </p>

                        <h4 class="!text-[24px] mt-6 md:mt-0 md:!text-[40px] text-black/70">How keep your money safe</h4>

                        <div class="flex flex-col md:flex-row items-center md:items-baseline gap-12 mt-10">
                            <div class="flex flex-col items-center md:items-baseline">
                                <div class="safety">
                                    <img src="{{asset('./src/images/lock.svg')}}" alt="lock">
                                </div>

                                <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-black">Our dedicated fraud and security
                                    teams work to keep your money safe</p>
                            </div>

                            <div class="flex flex-col items-center md:items-baseline">
                                <div class="safety">
                                    <img src="{{asset('./src/images/fingerprint.svg')}}" alt="fingerprint">
                                </div>

                                <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-black">We use 3-factor to authentication
                                    to protect your account</p>
                            </div>

                            <div class="flex flex-col items-center md:items-baseline">
                                <div class="safety">
                                    <img src="{{asset('./src/images/planning.svg')}}" alt="planning">
                                </div>

                                <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-black">We hold your money established
                                    financial institutions</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="mt-24">
                            <img src="{{asset('./src/images/feature-1.png')}}" alt="feature-1" class="block md:hidden">
                            <img src="{{asset('./src/images/shape-1.png')}}" alt="shape-1" class="hidden md:block ml-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="video" class="relative">
            <div class="container mx-auto relative">
                <div class="h-[300px] md:h-[800px] flex justify-center items-center" id="videoMain">
                    <button class="bg-palmela-900 rounded-full md:w-32 aspect-square btn_ripple">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-palmela-400 w-16 h-16 mx-auto">
                            <path d="M8 5.14v14l11-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section id="testimonial" class="mt-8 md:mt-48 p-3">
            <div class="container mx-auto">
                <div class="md:flex">
                    <h2 class="md:text-[70px] !leading-[82px] !tracking-[-2.45px] text-palmela-800 md:w-1/2">
                        Customer reviews
                    </h2>

                    <div class="my-auto flex flex-wrap text-palmela-800/85">
                        <span>Our customers say:</span>

                        <span class="text-palmela-900 font-semibold mx-4">Very good</span>

                        <ul class="flex gap-2 [&_li]:bg-[#666666] items-center">
                            <li>
                                <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                            </li>

                            <li>
                                <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                            </li>

                            <li>
                                <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                            </li>

                            <li>
                                <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                            </li>

                            <li>
                                <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                            </li>
                        </ul>

                        <span class="my-auto md:ml-4 mr-2">4.9 out of 5 based on</span>

                        <span class="font-semibold text-palmela-900 underline">1300+ reviews</span>
                    </div>
                </div>


                <div id="swiper_testimonial" class="swiper mt-12">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="border border-[#666666] rounded-2xl p-4 md:p-12">
                                <ul class="flex gap-2 [&_li]:bg-[#666666] [&_li]:p-1 items-center">
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                </ul>

                                <p class="text-[18px] md:text-[24px] md:!leading-[36px] text-palmela-800 mt-6">
                                    “I love how I can use my Wise account to pay any American contractors that I have. Would
                                    confidently recommend it to anyone looking for a cost-effective way to transfer money
                                    internationally.”
                                </p>

                                <div class="flex mt-12">
                                    <img src="{{asset('./src/images/author-1.png')}}" alt="author-1" class="rounded-full w-16 mr-6">

                                    <div>
                                        <h5 class="text-palmela-800">John Smith</h5>

                                        <span class="text-palmela-10 font-light font-Hel_Med">04 days ago</span>
                                    </div>

                                    <img src="{{asset('./src/images/quote-2.svg')}}" alt="quote-2" class="ml-auto">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="border border-[#666666] rounded-2xl p-4 md:p-12">
                                <ul class="flex gap-2 [&_li]:bg-[#666666] [&_li]:p-1 items-center">
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                </ul>

                                <p class="text-[18px] md:text-[24px] md:!leading-[36px] text-palmela-800 mt-6">
                                    “I love how I can use my Wise account to pay any American contractors that I have. Would
                                    confidently recommend it to anyone looking for a cost-effective way to transfer money
                                    internationally.”
                                </p>

                                <div class="flex mt-12">
                                    <img src="{{asset('./src/images/author-2.png')}}" alt="author-2" class="rounded-full w-16 mr-6">

                                    <div>
                                        <h5 class="text-palmela-800">Samuel jenson</h5>

                                        <span class="text-palmela-10 font-light font-Hel_Med">03 days ago</span>
                                    </div>

                                    <img src="{{asset('./src/images/quote-2.svg')}}" alt="quote-2" class="ml-auto">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="border border-[#666666] rounded-2xl p-4 md:p-12">
                                <ul class="flex gap-2 [&_li]:bg-[#666666] [&_li]:p-1 items-center">
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                    <li>
                                        <img src="{{asset('./src/images/star-5.svg')}}" alt="star-5">
                                    </li>
                                </ul>

                                <p class="text-[18px] md:text-[24px] md:!leading-[36px] text-palmela-800 mt-6">
                                    “I love how I can use my Wise account to pay any American contractors that I have. Would
                                    confidently recommend it to anyone looking for a cost-effective way to transfer money
                                    internationally.”
                                </p>

                                <div class="flex mt-12">
                                    <img src="{{asset('./src/images/author-3.png')}}" alt="author-3" class="rounded-full w-16 mr-6">

                                    <div>
                                        <h5 class="text-palmela-800">Michel Okuma</h5>

                                        <span class="text-palmela-10 font-light font-Hel_Med">02 days ago</span>
                                    </div>

                                    <img src="{{asset('./src/images/quote-2.svg')}}" alt="quote-2" class="ml-auto">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center items-center mt-4 gap-4">
                        <div id="swiper_testimonial_swiper_button_prev">
                            <img src="{{asset('./src/images/arrow-left.svg')}}" alt="arrow-left">
                        </div>

                        <div id="swiper_testimonial_pagination" class="flex gap-4 justify-center"></div>

                        <div id="swiper_testimonial_swiper_button_next">
                            <img src="{{asset('./src/images/arrow-right.svg')}}" alt="arrow-right">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="px-3 md:px-0 mt-32 pb-12 md:pb-32">
            <div class="container mx-auto">
                <div class="md:flex justify-center gap-12">
                    <div>
                        <img src="{{asset('./src/images/faq-1.png')}}" alt="faq-1">
                    </div>

                    <div class="md:w-2/5">
                        <h2 class="md:whitespace-pre-line md:text-[70px] md:!leading-[76px] !leading-[38px] md:!tracking-[-2.1px] text-palmela-800">
                            Frequently asked
                            questions to
                            Palmela
                        </h2>

                        <div class="mt-12">
                            <details open>
                                <summary class="flex">
                                    <span>What are the benefits of sending money online with Palmela?</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down ml-auto">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-up ml-auto">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg>
                                </summary>

                                <p class="text-palmela-500 !leading-[26px] mt-4 px-4">
                                    Transfer details Choose the amount you want to send abroad, select how your receiver wants
                                    to get the money, and lastly, how you want to pay.
                                </p>
                            </details>

                            <details>
                                <summary class="flex">
                                    <span>How much money can I send abroad? </span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down ml-auto">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-up ml-auto">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg>
                                </summary>

                                <p class="text-palmela-500 !leading-[26px] mt-4 px-4">
                                    Transfer details Choose the amount you want to send abroad, select how your receiver wants
                                    to get the money, and lastly, how you want to pay.
                                </p>
                            </details>

                            <details>
                                <summary class="flex">
                                    <span>How long does an online money transfer take?</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down ml-auto">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-up ml-auto">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg>
                                </summary>

                                <p class="text-palmela-500 !leading-[26px] mt-4 px-4">
                                    Transfer details Choose the amount you want to send abroad, select how your receiver wants
                                    to get the money, and lastly, how you want to pay.
                                </p>
                            </details>

                            <details>
                                <summary class="flex">
                                    <span>What verification do I need to send an International transfers?</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-down ml-auto">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-chevron-up ml-auto">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg>
                                </summary>

                                <p class="text-palmela-500 !leading-[26px] mt-4 px-4">
                                    Transfer details Choose the amount you want to send abroad, select how your receiver wants
                                    to get the money, and lastly, how you want to pay.
                                </p>
                            </details>
                        </div>

                        <button class="rounded-lg bg-palmela-400 py-4 px-12 font-semibold hover:bg-palmela-100 my-auto mt-12">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script>
        function currency() {
            return {
                dataCurrency:@json($dataCurrency),
                currencies:@json($currencies),
                exchangeRates:@json($exchangeRates),
                selectedFrom: null,
                selectedTo: null,
                amount: 1,
                timer:null,
                chart: null,
                labels: [],
                datasets: [
                    {
                        label: 'AUD',
                        data: [],
                    },
                    {
                        label: 'IRR',
                        data: [],
                    }
                ],
                init() {
                    this.$nextTick().then(() => {
                        this.selectedFrom = this?.currencies?.[0]?.symbol;
                        this.selectedTo = this?.currencies?.[1]?.symbol;

                        this.generateChart();
                    });

                    this.$watch('selectedFrom', () => {
                        this.getChartData();
                    });

                    this.$watch('selectedTo', () => {
                        this.getChartData();
                    });
                },
                get iconFrom() {
                    if (!this.selectedFrom)
                        return;

                    let currency = this.dataCurrency.find(x => x.currency_code.toLowerCase() === this.selectedFrom.toLowerCase());

                    return `https://flagcdn.com/48x36/${currency.country_code.toLowerCase()}.png`
                },
                get iconTo() {
                    if (!this.selectedTo)
                        return;

                    let currency = this.dataCurrency.find(x => x.currency_code.toLowerCase() === this.selectedTo.toLowerCase());

                    return `https://flagcdn.com/48x36/${currency.country_code.toLowerCase()}.png`
                },
                get calculate() {
                    if (!this.selectedFrom || !this.selectedTo)
                        return 0;

                    const fromCurrency = this.currencies.find(x => x.symbol === this.selectedFrom);
                    const toCurrency = this.currencies.find(x => x.symbol === this.selectedTo);
                    const rate = this.exchangeRates.find(x => x.base_currency_id === fromCurrency.id && x.target_currency_id === toCurrency.id)?.rate ?? 0;

                    return ((this.amount * fromCurrency.price) / toCurrency.price) * rate;
                },
                getChartData() {
                    const fromCurrency = this.currencies.find(x => x.symbol === this.selectedFrom);
                    const toCurrency = this.currencies.find(x => x.symbol === this.selectedTo);
                    const url = '{{route('chart',['xxx','yyy'])}}'
                        .replace('xxx', fromCurrency.id)
                        .replace('yyy', toCurrency.id);

                    clearTimeout(this.timer);

                    this.timer = setTimeout(() => {
                        axios.get(url)
                            .then(res => {
                                const data = [];
                                const lables = [];

                                Object.keys(res.data).forEach(currency => {
                                    data.push({
                                        label: currency,
                                        data: res.data[currency].map(item => item.price),
                                    });
                                });

                                Object.values(res.data).forEach(item => {
                                    item.forEach(history => {
                                        lables.push(history.created_at);
                                    })
                                });

                                this.labels = lables;

                                this.datasets = data;

                                this.generateChart();
                            })
                            .catch(() => {
                            });
                    }, 700);

                },
                generateChart() {
                    if (this.chart)
                        this.chart.destroy();

                    setTimeout(() => {
                        this.chart = new Chart(
                            document.getElementById('chart'),
                            {
                                type: 'line',
                                data: {
                                    labels: this.labels,
                                    datasets: this.datasets,
                                }
                            }
                        )
                    }, 250);
                }
            }
        }
    </script>
@endsection
