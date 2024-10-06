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
                <li>
                    <a class="helvetica-medium" title="Home" href="./">Home</a>
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
                    <a class="helvetica-medium" title="Help" href="./contact-us.html">Help</a>
                </li>
            </ul>

            <div class="flex gap-3">
                <button class="rounded-full bg-palmela-400 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]">
                    Get A Quote
                </button>

                <button class="rounded-full bg-palmela-100 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]">
                    More Service
                </button>
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
                    <a href="#">Home</a>
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
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                         class="fill-white w9 h-9 rounded p-2 bg-palmela-800">
                        <path d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5"/>
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
                            <input type="text" id="amount"
                                   class="focus:outline-0 focus:border-palmela-400 border p-3 bg-palmela-100 rounded-lg w-full"
                                   value="1">
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="from" class="form-label">From</label>

                            <div class="select-box">
                                <img decoding="async" class="flagImg" src="https://flagcdn.com/48x36/us.png" alt="flag">

                                <select name="to" id="from">
                                    <option value="AED">AED</option>
                                    <option value="AFN">AFN</option>
                                    <option value="XCD">XCD</option>
                                    <option value="ALL">ALL</option>
                                    <option value="AMD">AMD</option>
                                    <option value="ANG">ANG</option>
                                    <option value="AOA">AOA</option>
                                    <option value="AQD">AQD</option>
                                    <option value="ARS">ARS</option>
                                    <option value="AUD">AUD</option>
                                    <option value="AWG">AWG</option>
                                    <option value="AZN">AZN</option>
                                    <option value="BAM">BAM</option>
                                    <option value="BBD">BBD</option>
                                    <option value="BDT">BDT</option>
                                    <option value="XOF">XOF</option>
                                    <option value="BGN">BGN</option>
                                    <option value="BHD">BHD</option>
                                    <option value="BIF">BIF</option>
                                    <option value="BMD">BMD</option>
                                    <option value="BND">BND</option>
                                    <option value="BOB">BOB</option>
                                    <option value="BRL">BRL</option>
                                    <option value="BSD">BSD</option>
                                    <option value="BTN">BTN</option>
                                    <option value="BYN">BYN</option>
                                    <option value="NOK">NOK</option>
                                    <option value="BWP">BWP</option>
                                    <option value="BYR">BYR</option>
                                    <option value="BZD">BZD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CDF">CDF</option>
                                    <option value="XAF">XAF</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CLP">CLP</option>
                                    <option value="CNY">CNY</option>
                                    <option value="COP">COP</option>
                                    <option value="CRC">CRC</option>
                                    <option value="CUP">CUP</option>
                                    <option value="CVE">CVE</option>
                                    <option value="CYP">CYP</option>
                                    <option value="CZK">CZK</option>
                                    <option value="DJF">DJF</option>
                                    <option value="DKK">DKK</option>
                                    <option value="DOP">DOP</option>
                                    <option value="DZD">DZD</option>
                                    <option value="ECS">ECS</option>
                                    <option value="EEK">EEK</option>
                                    <option value="EGP">EGP</option>
                                    <option value="ETB">ETB</option>
                                    <option value="EUR">EUR</option>
                                    <option value="FJD">FJD</option>
                                    <option value="FKP">FKP</option>
                                    <option value="GBP">GBP</option>
                                    <option value="GEL">GEL</option>
                                    <option value="GGP">GGP</option>
                                    <option value="GHS">GHS</option>
                                    <option value="GIP">GIP</option>
                                    <option value="GMD">GMD</option>
                                    <option value="GNF">GNF</option>
                                    <option value="GTQ">GTQ</option>
                                    <option value="GYD">GYD</option>
                                    <option value="HKD">HKD</option>
                                    <option value="HNL">HNL</option>
                                    <option value="HRK">HRK</option>
                                    <option value="HTG">HTG</option>
                                    <option value="HUF">HUF</option>
                                    <option value="IDR">IDR</option>
                                    <option value="ILS">ILS</option>
                                    <option value="INR">INR</option>
                                    <option value="IQD">IQD</option>
                                    <option value="IRR">IRR</option>
                                    <option value="ISK">ISK</option>
                                    <option value="JMD">JMD</option>
                                    <option value="JOD">JOD</option>
                                    <option value="JPY">JPY</option>
                                    <option value="KES">KES</option>
                                    <option value="KGS">KGS</option>
                                    <option value="KHR">KHR</option>
                                    <option value="KMF">KMF</option>
                                    <option value="KPW">KPW</option>
                                    <option value="KRW">KRW</option>
                                    <option value="KWD">KWD</option>
                                    <option value="KYD">KYD</option>
                                    <option value="KZT">KZT</option>
                                    <option value="LAK">LAK</option>
                                    <option value="LBP">LBP</option>
                                    <option value="LKR">LKR</option>
                                    <option value="LRD">LRD</option>
                                    <option value="LSL">LSL</option>
                                    <option value="LTL">LTL</option>
                                    <option value="LVL">LVL</option>
                                    <option value="LYD">LYD</option>
                                    <option value="MAD">MAD</option>
                                    <option value="MDL">MDL</option>
                                    <option value="MGA">MGA</option>
                                    <option value="MKD">MKD</option>
                                    <option value="MMK">MMK</option>
                                    <option value="MNT">MNT</option>
                                    <option value="MOP">MOP</option>
                                    <option value="MRO">MRO</option>
                                    <option value="MTL">MTL</option>
                                    <option value="MUR">MUR</option>
                                    <option value="MVR">MVR</option>
                                    <option value="MWK">MWK</option>
                                    <option value="MXN">MXN</option>
                                    <option value="MYR">MYR</option>
                                    <option value="MZN">MZN</option>
                                    <option value="NAD">NAD</option>
                                    <option value="XPF">XPF</option>
                                    <option value="NGN">NGN</option>
                                    <option value="NIO">NIO</option>
                                    <option value="NPR">NPR</option>
                                    <option value="NZD">NZD</option>
                                    <option value="OMR">OMR</option>
                                    <option value="PAB">PAB</option>
                                    <option value="PEN">PEN</option>
                                    <option value="PGK">PGK</option>
                                    <option value="PHP">PHP</option>
                                    <option value="PKR">PKR</option>
                                    <option value="PLN">PLN</option>
                                    <option value="PYG">PYG</option>
                                    <option value="QAR">QAR</option>
                                    <option value="RON">RON</option>
                                    <option value="RSD">RSD</option>
                                    <option value="RUB">RUB</option>
                                    <option value="RWF">RWF</option>
                                    <option value="SAR">SAR</option>
                                    <option value="SBD">SBD</option>
                                    <option value="SCR">SCR</option>
                                    <option value="SDG">SDG</option>
                                    <option value="SEK">SEK</option>
                                    <option value="SGD">SGD</option>
                                    <option value="SKK">SKK</option>
                                    <option value="SLL">SLL</option>
                                    <option value="SOS">SOS</option>
                                    <option value="SRD">SRD</option>
                                    <option value="STD">STD</option>
                                    <option value="SYP">SYP</option>
                                    <option value="SZL">SZL</option>
                                    <option value="THB">THB</option>
                                    <option value="TJS">TJS</option>
                                    <option value="TMT">TMT</option>
                                    <option value="TND">TND</option>
                                    <option value="TOP">TOP</option>
                                    <option value="TRY">TRY</option>
                                    <option value="TTD">TTD</option>
                                    <option value="TWD">TWD</option>
                                    <option value="TZS">TZS</option>
                                    <option value="UAH">UAH</option>
                                    <option value="UGX">UGX</option>
                                    <option value="USD" selected>USD</option>
                                    <option value="UYU">UYU</option>
                                    <option value="UZS">UZS</option>
                                    <option value="VEF">VEF</option>
                                    <option value="VND">VND</option>
                                    <option value="VUV">VUV</option>
                                    <option value="YER">YER</option>
                                    <option value="ZAR">ZAR</option>
                                    <option value="ZMK">ZMK</option>
                                    <option value="ZWD">ZWD</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="to" class="form-label">To</label>

                            <div class="select-box">
                                <img decoding="async" class="flagImg" src="https://flagcdn.com/48x36/af.png" alt="flag">
                                <select name="to" id="to">
                                    <option value="AED">AED</option>
                                    <option value="AFN" selected="">AFN</option>
                                    <option value="XCD">XCD</option>
                                    <option value="ALL">ALL</option>
                                    <option value="AMD">AMD</option>
                                    <option value="ANG">ANG</option>
                                    <option value="AOA">AOA</option>
                                    <option value="AQD">AQD</option>
                                    <option value="ARS">ARS</option>
                                    <option value="AUD">AUD</option>
                                    <option value="AWG">AWG</option>
                                    <option value="AZN">AZN</option>
                                    <option value="BAM">BAM</option>
                                    <option value="BBD">BBD</option>
                                    <option value="BDT">BDT</option>
                                    <option value="XOF">XOF</option>
                                    <option value="BGN">BGN</option>
                                    <option value="BHD">BHD</option>
                                    <option value="BIF">BIF</option>
                                    <option value="BMD">BMD</option>
                                    <option value="BND">BND</option>
                                    <option value="BOB">BOB</option>
                                    <option value="BRL">BRL</option>
                                    <option value="BSD">BSD</option>
                                    <option value="BTN">BTN</option>
                                    <option value="BYN">BYN</option>
                                    <option value="NOK">NOK</option>
                                    <option value="BWP">BWP</option>
                                    <option value="BYR">BYR</option>
                                    <option value="BZD">BZD</option>
                                    <option value="CAD">CAD</option>
                                    <option value="CDF">CDF</option>
                                    <option value="XAF">XAF</option>
                                    <option value="CHF">CHF</option>
                                    <option value="CLP">CLP</option>
                                    <option value="CNY">CNY</option>
                                    <option value="COP">COP</option>
                                    <option value="CRC">CRC</option>
                                    <option value="CUP">CUP</option>
                                    <option value="CVE">CVE</option>
                                    <option value="CYP">CYP</option>
                                    <option value="CZK">CZK</option>
                                    <option value="DJF">DJF</option>
                                    <option value="DKK">DKK</option>
                                    <option value="DOP">DOP</option>
                                    <option value="DZD">DZD</option>
                                    <option value="ECS">ECS</option>
                                    <option value="EEK">EEK</option>
                                    <option value="EGP">EGP</option>
                                    <option value="ETB">ETB</option>
                                    <option value="EUR">EUR</option>
                                    <option value="FJD">FJD</option>
                                    <option value="FKP">FKP</option>
                                    <option value="GBP">GBP</option>
                                    <option value="GEL">GEL</option>
                                    <option value="GGP">GGP</option>
                                    <option value="GHS">GHS</option>
                                    <option value="GIP">GIP</option>
                                    <option value="GMD">GMD</option>
                                    <option value="GNF">GNF</option>
                                    <option value="GTQ">GTQ</option>
                                    <option value="GYD">GYD</option>
                                    <option value="HKD">HKD</option>
                                    <option value="HNL">HNL</option>
                                    <option value="HRK">HRK</option>
                                    <option value="HTG">HTG</option>
                                    <option value="HUF">HUF</option>
                                    <option value="IDR">IDR</option>
                                    <option value="ILS">ILS</option>
                                    <option value="INR">INR</option>
                                    <option value="IQD">IQD</option>
                                    <option value="IRR">IRR</option>
                                    <option value="ISK">ISK</option>
                                    <option value="JMD">JMD</option>
                                    <option value="JOD">JOD</option>
                                    <option value="JPY">JPY</option>
                                    <option value="KES">KES</option>
                                    <option value="KGS">KGS</option>
                                    <option value="KHR">KHR</option>
                                    <option value="KMF">KMF</option>
                                    <option value="KPW">KPW</option>
                                    <option value="KRW">KRW</option>
                                    <option value="KWD">KWD</option>
                                    <option value="KYD">KYD</option>
                                    <option value="KZT">KZT</option>
                                    <option value="LAK">LAK</option>
                                    <option value="LBP">LBP</option>
                                    <option value="LKR">LKR</option>
                                    <option value="LRD">LRD</option>
                                    <option value="LSL">LSL</option>
                                    <option value="LTL">LTL</option>
                                    <option value="LVL">LVL</option>
                                    <option value="LYD">LYD</option>
                                    <option value="MAD">MAD</option>
                                    <option value="MDL">MDL</option>
                                    <option value="MGA">MGA</option>
                                    <option value="MKD">MKD</option>
                                    <option value="MMK">MMK</option>
                                    <option value="MNT">MNT</option>
                                    <option value="MOP">MOP</option>
                                    <option value="MRO">MRO</option>
                                    <option value="MTL">MTL</option>
                                    <option value="MUR">MUR</option>
                                    <option value="MVR">MVR</option>
                                    <option value="MWK">MWK</option>
                                    <option value="MXN">MXN</option>
                                    <option value="MYR">MYR</option>
                                    <option value="MZN">MZN</option>
                                    <option value="NAD">NAD</option>
                                    <option value="XPF">XPF</option>
                                    <option value="NGN">NGN</option>
                                    <option value="NIO">NIO</option>
                                    <option value="NPR">NPR</option>
                                    <option value="NZD">NZD</option>
                                    <option value="OMR">OMR</option>
                                    <option value="PAB">PAB</option>
                                    <option value="PEN">PEN</option>
                                    <option value="PGK">PGK</option>
                                    <option value="PHP">PHP</option>
                                    <option value="PKR">PKR</option>
                                    <option value="PLN">PLN</option>
                                    <option value="PYG">PYG</option>
                                    <option value="QAR">QAR</option>
                                    <option value="RON">RON</option>
                                    <option value="RSD">RSD</option>
                                    <option value="RUB">RUB</option>
                                    <option value="RWF">RWF</option>
                                    <option value="SAR">SAR</option>
                                    <option value="SBD">SBD</option>
                                    <option value="SCR">SCR</option>
                                    <option value="SDG">SDG</option>
                                    <option value="SEK">SEK</option>
                                    <option value="SGD">SGD</option>
                                    <option value="SKK">SKK</option>
                                    <option value="SLL">SLL</option>
                                    <option value="SOS">SOS</option>
                                    <option value="SRD">SRD</option>
                                    <option value="STD">STD</option>
                                    <option value="SYP">SYP</option>
                                    <option value="SZL">SZL</option>
                                    <option value="THB">THB</option>
                                    <option value="TJS">TJS</option>
                                    <option value="TMT">TMT</option>
                                    <option value="TND">TND</option>
                                    <option value="TOP">TOP</option>
                                    <option value="TRY">TRY</option>
                                    <option value="TTD">TTD</option>
                                    <option value="TWD">TWD</option>
                                    <option value="TZS">TZS</option>
                                    <option value="UAH">UAH</option>
                                    <option value="UGX">UGX</option>
                                    <option value="USD">USD</option>
                                    <option value="UYU">UYU</option>
                                    <option value="UZS">UZS</option>
                                    <option value="VEF">VEF</option>
                                    <option value="VND">VND</option>
                                    <option value="VUV">VUV</option>
                                    <option value="YER">YER</option>
                                    <option value="ZAR">ZAR</option>
                                    <option value="ZMK">ZMK</option>
                                    <option value="ZWD">ZWD</option>

                                </select>
                            </div>
                        </div>

                        <p class="text-palmela-900 font-semibold text-sm mt-3">
                            1 USD = 70.95 AFN
                        </p>

                        <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-sm my-6 hover:bg-palmela-800 hover:text-palmela-400">
                            Get Exchange Rate
                        </button>

                        <p class="text-palmela-900 font-light text-sm mt-3">
                            Currency rate latest change
                            <strong class="font-bold">
                                2024-08-17 17:24
                            </strong>
                        </p>
                    </form>
                </div>
            </div>

            <h1 class="md:mt-[76px] md:flex-1">
                <span class="hidden md:block">CURRENCY</span>

                <span class="flex">
                    <img src="{{asset('./src/images/hero-img-1.png')}}" alt="hero-1"
                         class="rounded-lg shadow-lg shadow-palmela-800 mt-12 md:ml-8">

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

                <button class="rounded-lg bg-palmela-500 border border-palmela-800 py-3 md:py-4 px-6 md:px-12 font-semibold my-6 hover:bg-palmela-800 hover:text-palmela-400">
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

                <button class="rounded-lg bg-palmela-500 border border-palmela-800 py-3 md:py-4 px-6 md:px-12 font-semibold my-6 hover:bg-palmela-800 hover:text-palmela-400">
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

<section id="solutions" class="pb:12 md:pb-48">
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
                                <div class="bg-palmela-100 p-5 mx-6">
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
                                <div class="bg-palmela-100 p-5 mx-6">
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
                                <div class="bg-palmela-100 p-5 mx-6">
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
                                <div class="bg-palmela-100 p-5 mx-6">
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
                                <div class="bg-palmela-100 p-5 mx-6">
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

<section id="sending_money" class="mt-12 md:mt-0 bg-palmela-400 pt-12 pb-24">
    <div class="container mx-auto">
        <div class="mx-3 md:flex md:mx-24">
            <div class="flex-1">
                <h2 class="section-title md:whitespace-pre-line text-palmela-800 md:!text-[96px] md:!leading-[97px] md:!tracking-[-1.92px]">
                    Save up to 12x when
                    sending money abroad</h2>

                <p class="md:whitespace-pre-line text-[#474747] !text-[20px] !leading-[30px] regular mt-12 relative">The World Payments is designed for cross-border businesses trading in multiple
                    currencies. For importers and exporters, whether you do business on a marketplace.

                    <img src="{{asset('./src/images/feature-1.png')}}" alt="feature-1" class="absolute right-6 -top-16 hidden md:block">
                </p>

                <h4 class="!text-[24px] mt-6 md:mt-0 md:!text-[40px] text-palmela-900">How keep your money safe</h4>

                <div class="flex flex-col md:flex-row items-center md:items-baseline gap-12 mt-10">
                    <div class="flex flex-col items-center md:items-baseline">
                        <div class="safety">
                            <img src="{{asset('./src/images/lock.svg')}}" alt="lock">
                        </div>

                        <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-palmela-900/80">Our dedicated fraud and security
                            teams work to keep your money
                            safe</p>
                    </div>

                    <div class="flex flex-col items-center md:items-baseline">
                        <div class="safety">
                            <img src="{{asset('./src/images/fingerprint.svg')}}" alt="fingerprint">
                        </div>

                        <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-palmela-900/80">We use 3-factor to authentication
                            to protect your account</p>
                    </div>

                    <div class="flex flex-col items-center md:items-baseline">
                        <div class="safety">
                            <img src="{{asset('./src/images/planning.svg')}}" alt="planning">
                        </div>

                        <p class="text-center md:text-left px-12 md:px-0 md:whitespace-pre-line !leading-[26px] !text-[16px] text-palmela-900/80">We hold your money established
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

                <ul class="flex gap-2 [&_li]:bg-[#00B67A] items-center">
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
                    <div class="border border-[#00473729] rounded-2xl p-4 md:p-12">
                        <ul class="flex gap-2 [&_li]:bg-[#00B67A] [&_li]:p-1 items-center">
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
                    <div class="border border-[#00473729] rounded-2xl p-4 md:p-12">
                        <ul class="flex gap-2 [&_li]:bg-[#00B67A] [&_li]:p-1 items-center">
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
                    <div class="border border-[#00473729] rounded-2xl p-4 md:p-12">
                        <ul class="flex gap-2 [&_li]:bg-[#00B67A] [&_li]:p-1 items-center">
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

                        <p class="text-palmela-10 !leading-[26px] mt-4 px-4">
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

                        <p class="text-palmela-10 !leading-[26px] mt-4 px-4">
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

                        <p class="text-palmela-10 !leading-[26px] mt-4 px-4">
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

                        <p class="text-palmela-10 !leading-[26px] mt-4 px-4">
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

<footer class="bg-palmela-900 md:bg-palmela-400 p-3">
    <div class="container mx-auto pt-12 md:pt-32">
        <div class="md:flex items-center">
            <h2 class="text-palmela-200 md:text-palmela-800 md:!leading-[91px] md:!tracking-[-1.92px] text-[28px] md:text-[96px] md:whitespace-pre-line flex-1">We have no
                hidden fees for
                subscription</h2>

            <div class="flex-1">
                <p class="md:whitespace-pre-line md:font-medium md:!text-[24px] md:!leading-[36px] text-palmela-200 md:text-palmela-900 my-7 md:my-0">Stay current
                    with text updates, email notifications,
                    online access, or call our friendly support staff
                    24/7 to grow up your own business.</p>

                <button class="bg-palmela-400 md:bg-palmela-800 text-palmela-900 md:text-palmela-400 rounded-lg px-4 py-3 mt-4 font-Hel_Med">
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
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     class="fill-palmela-400 w-10 md:w-11 border-palmela-400/40 border rounded-full p-2 hover:bg-palmela-400 hover:fill-white hover:animate-rotate">
                                    <path d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"/>
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
                                <a href="./contact-us.html">Help</a>
                            </li>
                            <li class="menu-item">Refer Friends</li>
                            <li class="menu-item">Currency Data Api</li>
                            <li class="menu-item">All Country</li>
                            <li class="menu-item">Our Pricing</li>
                        </ul>

                    </div>
                </div>

                <div class="grid grid-cols-2 md:flex justify-between md:absolute bottom-14 right-32 left-32">
                    <a href="./contact-us.html" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">Help</a>
                    <a href="#" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">Terms and Conditions</a>
                    <a href="#" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">FAQ</a>
                    <a href="#" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">Our Pricing</a>
                    <a href="#" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">All Country</a>
                    <a href="#" class="text-palmela-200 md:text-palmela-800 md:font-Hel_Med">Refer Friends</a>

                    <p class="text-[#ffffffa6] text-center md:text-left col-span-2 mt-4 md:mt-0">
                        © Palmela is proudly owned by
                        <a href="#" class="text-palmela-400">HiBootstrap</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
