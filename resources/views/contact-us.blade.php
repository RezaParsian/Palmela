@extends('layouts.main')

@section('content')
    <section id="banner" class="pt-28 md:pt-48 pb-12">
        <div class="container mx-auto md:relative">
            <img src="{{asset('./src/images/br-shape-1.png')}}" alt="br-shape-1" class="absolute bottom-0 md:-left-24 right-1/3">

            <img src="{{asset('./src/images/br-11.png')}}" alt="br-11" class="hidden md:flex ml-auto -mt-48 pr-56">

            <img src="{{asset('./src/images/br-shape-2.png')}}" alt="br-shape-2" class="hidden md:flex absolute right-0">
        </div>

        <div class="px-3 md:px-0 container mx-auto flex absolute top-1/2 left-0 right-0">
            <div class="md:ml-64">
                <div class="flex">
                    <h2 class="text-palmela-200 md:whitespace-pre-line !text-[26px] md:!text-[40px] !leading-[45px] !tracking-[-1.2px] font-Hel_Bld">Contact with us for
                        your next step</h2>
                </div>

                <ul id="breadcrumb" class="flex mt-6">
                    <li>
                        <a href="./">Home</a>
                    </li>

                    <li>
                        Help
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section id="content" class="py-24">
        <div class="container mx-auto px-3 md:px-0">
            <form class="bg-white rounded md:w-1/2 mx-auto p-4 md:p-12">
                <div class="border-b">
                    <h3 class="font-Hel_Bld text-palmela-800 mb-6 text-[40px]">Contact with us</h3>
                    <h5 class="font-Hel_Bld text-palmela-800 mb-2 text-[24px]">Contact details</h5>
                </div>

                <div class="my-3">
                    <label for="name" class="font-Hel_Med text-[18px] text-palmela-800">Your Name*</label>

                    <input type="text" placeholder="Your Name Here*" id="name" class="mt-3">
                </div>

                <div class="my-3">
                    <label for="email" class="font-Hel_Med text-[18px] text-palmela-800">Your Email*</label>

                    <input type="text" placeholder="Your Email Here*" id="email" class="mt-3">
                </div>

                <div class="my-3">
                    <label for="phone" class="font-Hel_Med text-[18px] text-palmela-800">Your Phone Number*</label>

                    <input type="text" placeholder="Your Phone Number Here*" id="phone" class="mt-3">
                </div>

                <div class="border-b mt-12">
                    <h5 class="font-Hel_Bld text-palmela-800 mb-2 text-[24px]">Contact details</h5>
                </div>

                <div class="md:flex gap-4">
                    <div class="my-3">
                        <label for="company" class="font-Hel_Med text-[18px] text-palmela-800">Your Company Name*</label>

                        <input type="text" placeholder="Your Company Name Here*" id="company" class="mt-3">
                    </div>

                    <div class="my-3">
                        <label for="company_address" class="font-Hel_Med text-[18px] text-palmela-800">Your Company Address*</label>

                        <input type="text" placeholder="Your Company Address Here*" id="company_address" class="mt-3">
                    </div>
                </div>

                <div class="md:flex gap-4">
                    <div class="my-3">
                        <label for="employees_count" class="font-Hel_Med text-[18px] text-palmela-800">How many employees do you have?</label>

                        <select name="employees_count" id="employees_count" class="mt-3">
                            <option value="">-- None --</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                        </select>
                    </div>

                    <div class="my-3">
                        <label for="employees_country" class="font-Hel_Med text-[18px] text-palmela-800">Company where business is registered</label>

                        <select name="employees_country" id="employees_country" class="mt-3">
                            <option value="">-- None --</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>Canada</option>
                        </select>
                    </div>
                </div>


                <div class="border-b mt-12">
                    <h5 class="font-Hel_Bld text-palmela-800 mb-2 text-[24px]">What we need to know to get started</h5>
                </div>

                <div class="my-3">
                    <label for="estimated" class="font-Hel_Med text-[18px] text-palmela-800">Estimated amount of money sent across currencies monthly*</label>

                    <select name="estimated" id="estimated" class="mt-3">
                        <option value="">-- None --</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>Canada</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="empladcompany_asset_numd" class="font-Hel_Med text-[18px] text-palmela-800">Estimated number of payments made monthly*</label>

                    <select name="empladcompany_asset_numd" id="empladcompany_asset_numd" class="mt-3">
                        <option value="">-- None --</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="message" class="font-Hel_Med text-[18px] text-palmela-800">Send your Message</label>

                    <textarea id="message" placeholder="Your Message ..." class="mt-3" rows="5"></textarea>
                </div>

                <div class="my-3">
                    <label class="font-Hel_Med text-[18px] text-palmela-800 flex">
                    <span>
                        <input type="checkbox" class="accent-palmela-400 w-5">
                    </span>

                        <span class="text-palmela-10 font-['Inter'] text-[14px] my-auto">
                        Accept
                        <strong>Terms Of Service</strong>
                        and
                        <strong>Privacy Policy</strong>.
                    </span>
                    </label>
                </div>

                <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-sm my-6 hover:bg-palmela-100 hover:text-palmela-900">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <section id="detail">
        <div class="container mx-auto md:flex gap-8 px-5 md:px-24 justify-around pb-32">
            <div>
                <h3 class="text-palmela-800 text-[24px] !leading-[16px] my-5">Send Money</h3>
                <p class="md:whitespace-pre-line">Sending more than 700,00 USD
                    equivalent monthly in invoice
                    payments or across entities? Get in
                    touch.</p>
            </div>

            <div>
                <h3 class="text-palmela-800 text-[24px] !leading-[16px] my-5">Receive Money</h3>
                <p class="md:whitespace-pre-line">Open local bank accounts in
                    9+ currencies for receiving
                    invoices locally.</p>
            </div>

            <div>
                <h3 class="text-palmela-800 text-[24px] !leading-[16px] my-5">Batch Payments</h3>
                <p class="md:whitespace-pre-line">Upload a single CSV file to
                    create up to 1,000 payouts in
                    one go, without the need for
                    integrations.</p>
            </div>

            <div>
                <h3 class="text-palmela-800 text-[24px] !leading-[16px] my-5">API Charts</h3>
                <p class="md:whitespace-pre-line">Automate invoice payments,
                    recurring transfers,
                    international payroll or
                    recipient creation.</p>
            </div>
        </div>
    </section>
@endsection
