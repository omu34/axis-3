<section class="bg-cover pb-8" style="background-color: #fcf9f9;">
    <div class="mr-20 ml-20">
        <div class="mt-8">
            <h2 class="text-center " id="pt-1">
                Affordable pricing. Easy scaling.
            </h2>
            <h6 class="text-center ml-24 mt-2" id="pt-2">
                Our app works for businesses of all sizes and shapes. Start for free and upgrade anytime.
            </h6>
        </div>
        <div class="mt-6">
            <div class="grid grid-cols-3 ">
                <div id="bg-p" class="shadow-2xl rounded-lg  pr-2 pl-2 mr-2" style="background: #F8F2F1;">
                    <div class="grid grid-cols-1 ">
                        <div class="mt-8 " id="pt-4">Start</div>

                    </div>
                    <div class="mt-5" id="pt-5">
                        <h2 class="">Pay as you go</h2>
                    </div>

                    <div class="-ml-9 mt-2" id="pt-6">
                        <span id="pt-7" class="hover:bg-yellow-300 inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">
                            Billed Monthly
                        </span>
                    </div>
                    <div class="mt-5">
                        <p class="" id="pt-8">
                            Ideal for companies who run periodic campaigns on SMS and Email.
                        </p>
                        <p class="mt-2" id="pt-9">
                            <i>
                                One off setup fee for SMS & WhatsApp, free setup for email
                            </i>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 mt-4">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class='-ml-2 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs'>Campaigns</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-36 ">
                                            <div @click="reportsOpen = !reportsOpen" class=' ml-20 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3 ">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex p-6  md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">SMS messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-3 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container  ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Emails</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-2 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container -ml-1">
                                            <div id="pt-11" @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300  h-6 w-28 rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Unified Inbox</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-16 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-7  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp messages</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook Messenger</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5 ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Instagram comments & DMs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Analytics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Mpesa Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Chatbot</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Multi agent inbox </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Autoresponder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Customer success support</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs'>Users</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> 3 users</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-20 ml-1 text-xs mt-1.5">
                                            <p class="-ml-10 text-xs w-28" id="be-4"> Upgrade package for more users </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 pb-6 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Setup Fees</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Safaricom: KES.9,900</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Airtel: KES. 9,900</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Both Saf & Airtel: KES. 17,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Telkom: KES. 6,500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Equitel: KES. 10,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">All Kenyan Telcos: KES. 32,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp: Kes. 50,000</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="shadow-2xl rounded-lg pb-8 pr-2 pl-2 mr-2" style="background: #F8F2F1;">
                    <div class="grid grid-cols-2">
                        <div class="mt-8 " id="pt-4">
                            <div class="grid grid-cols-2">
                                <div class="container">
                                    Grow
                                </div>
                                <div class="container ml-9  -mt-2 " id="pt-6">
                                    <span id="pt-7" class="w-32  text-center text-white hover:bg-gray-200 inline-block bg-yellow-300 rounded-full px-3 py-1 text-lg font-semibold mb-2">
                                        Most Popular
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 " id="pt-5">
                        <h2 class="">KES 3000</h2>
                    </div>
                    <div class="-ml-9 mt-1" id="pt-6">

                        <span id="pt-7" class="hover:bg-yellow-300 inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 2 - 7 mb-2">Billed
                            Monthly
                        </span>
                    </div>
                    <div class="mt-5  ">
                        <p class="" id="pt-8">
                            Ideal for online businesses looking to engage customers on social media & send marketing
                            campaigns through WhatsApp.
                        </p>
                        <p class="mt-3" id="pt-9">
                            <i> 14 day free trial for Facebook and Instagram features
                            </i>
                        </p>
                    </div>




                    <div class="grid grid-cols-2 mt-4">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class='-ml-2 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs'>Campaigns</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-36 ">
                                            <div @click="reportsOpen = !reportsOpen" class=' ml-20 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3 ">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex p-6  md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">300 SMS messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-3 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container  ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">1,000 Emails</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-2 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container -ml-1">
                                            <div id="pt-11" @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300  h-6 w-28 rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Unified Inbox</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-16 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container   mt-1.5 ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp messages</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook Messenger</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5 ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Instagram comments & DMs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Analytics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Mpesa Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Chatbot</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Multi agent inbox </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Autoresponder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Customer success support</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Users</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> 3 users</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-20 ml-1 text-xs mt-1.5">
                                                <p class="-ml-10 text-xs w-28" id="be-4"> Upgrade package for more users </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 pb-4 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Setup Fees</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Safaricom: KES. 9,900</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Airtel: KES. 9,900</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Both Saf & Airtel: KES. 17,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Telkom: KES. 6,500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Equitel: KES. 10,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">All Kenyan Telcos: KES. 32,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp: Kes. 50,000</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class=" 0.5 0.5 shadow-2xl rounded-lg pb-8 pr-2 pl-2" style="background: #F8F2F1;">
                    <div class="grid grid-cols-2">
                        <div class=" 2 mt-8 " id="pt-4">Scale</div>
                    </div>
                    <div class=" mt-5" id="pt-5">
                        <h2 class="">KES 6,500</h2>
                    </div>
                    <div class=" -ml-9 mt-2" id="pt-6">

                        <span id="pt-7" class="hover:bg-yellow-300 inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 2 - 7 mb-2">Billed
                            Monthly</span>
                    </div>
                    <div class="mt-4">
                        <p class="mt-5" id="pt-8">
                            Ideal for entreprise businesses that want to optimize customer experience through
                            automation. </p>
                        <p class="mt-2" id="pt-7">
                            <i>
                                14 day free trial for Facebook and Instagram features </i>
                        </p>
                    </div>
                    <div class="grid grid-cols-2 mt-4">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class='-ml-2 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs'>Campaigns</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-36 ">
                                            <div @click="reportsOpen = !reportsOpen" class=' ml-20 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3 ">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex p-6  md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">7,00 SMS messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-3 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container  ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">1,500 Emails</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-2 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container -ml-1">
                                            <div id="pt-11" @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300  h-6 w-28 rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Unified Inbox</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-16 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container   mt-1.5 ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp messages</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Facebook Messenger</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-14 ml-1 text-sm mt-1.5 ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Instagram comments & DMs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Analytics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Mpesa Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp Chatbot</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Multi agent inbox </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Autoresponder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">
                                            </div>
                                            <div class="container">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Customer success support</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="grid grid-cols-2 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Users</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> 3 users</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container w-20 ml-1 text-xs mt-1.5">
                                                <p class="-ml-10 text-xs w-28" id="be-4"> Upgrade package for more users </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 pb-4 ">
                        <div class='flex items-center justify-center' x-data="{ reportsOpen: false }">
                            <div class='w-full max-w-lg px-1 py-1 mx-auto rounded-lg shadow-none'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <div class="grid grid-cols-2">
                                        <div class="container ">
                                            <div @click="reportsOpen = !reportsOpen" class=' flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>

                                                <button class="bg-gray-300 h-6 w-28  rounded-full hover:bg-yellow-300">
                                                    <p class='text-gray-600 text-xs  '>Setup Fees</p>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="container ml-28">
                                            <div @click="reportsOpen = !reportsOpen" class='ml-10 flex items-center text-gray-600  w-full  overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 ml-8  px-2 transform transition duration-300 ease-in-out' :class="{'rotate-180': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                                    <div class='flex items-center px-2 py-3'>
                                                        <div class=''>
                                                            <div class="container -mt-3">
                                                                <button class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>

                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Safaricom: KES. 9,900</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Airtel: KES. 9,900</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Both Saf & Airtel: KES. 17,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4"> Telkom: KES. 6,500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">Equitel: KES. 10,000 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">All Kenyan Telcos: KES. 32,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex p-6 md:p-0 w-full transform transition duration-300 ease-in-out  pb-10" x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                        <div class="grid grid-cols-2">
                                            <div class="container ">
                                                <img class="h-6" src="<?php echo home_url('/wp-content/uploads/2023/09/tick.png'); ?>" alt="" srcset="">

                                            </div>
                                            <div class="container ">
                                                <p class="-ml-9 text-xs w-28" id="be-4">WhatsApp: Kes. 50,000</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="-ml-16 mt-8">
                <div class="ml-14">
                    <h2 class="" id="pt-m">
                        Message Costs
                    </h2>
                </div>
                <div class="ml-10">
                    <h6 class="text-center ml-28" id="pt-m1">
                        These apply to emails, SMS and WhatsApp messages
                    </h6>
                </div>
                <div class="-ml-10">
                    <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
                        <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
                            <div class="py-5">
                                <details class="group">
                                    <summary id="p1-t" class="flex justify-between items-center cursor-pointer list-none">
                                        <span><strong> Email Messaging Pricing</strong></span>
                                        <span class="transition group-open:rotate-180">
                                            <img src="<?php echo home_url('/wp-content/uploads/2023/09/yellow-plus.png'); ?>" alt="" srcset="">

                                        </span>
                                    </summary>
                                    <div class="relative overflow-x-auto">
                                        <h2 class="mt-2" id="p1-t1">
                                            Email Pricing
                                        </h2>
                                        <p class="" id="be-3">
                                            The cost is for each email sent.
                                        </p>
                                        <table class="mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 rounded-l-lg" id="be-3">
                                                        Set Up
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">

                                                    </th>
                                                    <th scope="col" class="px-6 py-3 rounded-r-lg" id="be-3">
                                                        Price
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Unified Inbox integration only
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        Ksh 50,000/ $500
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800" id="be-4">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Deeper API integrations and bots
                                                    </th>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        TBC (subject to client brief)
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>
                                </details>
                            </div>





                            <div class="py-5">
                                <details class="group">
                                    <summary id="p1-t" class="flex justify-between items-center cursor-pointer list-none">
                                        <span> <strong>WhatsApp Messaging Pricing </strong></span>
                                        <span class="transition group-open:rotate-180">
                                            <img src="<?php echo home_url('/wp-content/uploads/2023/09/yellow-plus.png'); ?>" alt="" srcset="">

                                        </span>
                                    </summary>

                                    <div class="relative overflow-x-auto">
                                        <h2 class="mt-2" id="p1-t1">
                                        WhatsApp Set Up

                                        </h2>
                                        <p class="" id="be-3">
                                            WhatsApp Official API
                                        </p>
                                        <table class="mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-l-lg">
                                                        Set Up
                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3">

                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-r-lg">
                                                        Price
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Unified Inbox integration only
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        Ksh 50,000/ $500
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Deeper API integrations and bots
                                                    </th>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        TBC (subject to client brief)
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>




                                    <div class="relative overflow-x-auto">
                                        <h2 class="mt-2" id="p1-t1">
                                        Message cost (Ksh)
                                        </h2>
                                        <p class="" id="be-3">
                                            Volume/Cost Per Unit (Ksh)
                                        </p>
                                        <table class="mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-l-lg">
                                                        Service
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">

                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-r-lg">
                                                        WhatsApp official API (two way)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        1-20,000
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.60
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        20,001 - 100,000

                                                    </th>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.50
                                                    </td>
                                                </tr>


                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        100,001 - 250,000


                                                    </th>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.40
                                                    </td>
                                                </tr>


                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


                                                        250,001+
                                                    </th>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.30
                                                    </td>
                                                </tr>



                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>

                                </details>
                            </div>
                            <div class="py-5">
                                <details class="group">
                                    <summary id="p1-t" class="flex justify-between items-center font-medium cursor-pointer list-none">
                                        <span><strong>Bulk SMS Pricing</strong></span>
                                        <span class="transition group-open:rotate-180">
                                            <img src="<?php echo home_url('/wp-content/uploads/2023/09/yellow-plus.png'); ?>" alt="" srcset="">

                                        </span>
                                    </summary>

                                    <div class="relative overflow-x-auto">
                                        <h2 class="mt-2" id="p1-t1">
                                            SMS SenderID - Kenya
                                        </h2>

                                        <table class=" mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-l-lg">
                                                        Network
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">

                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-r-lg">
                                                        One-off (Ksh - VAT Inclusive)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Safaricom
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        9,900
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Airtel
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        9,900
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Both Airtel & Safaricom
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        17,000
                                                    </td>
                                                </tr>





                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Telkom
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        6,500
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Equitel
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        10,000
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        All Telcos (Kenya)
                                                    </th>
                                                    <td class="px-6 py-4">

                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        32,000
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>




                                    <div class="relative overflow-x-auto">
                                        <h2 class="mt-2" id="p1-t1">
                                            SMS Message Cost
                                        </h2>
                                        <p class="" id="be-3">
                                            Cost Per Unit is in Ksh. Cost is per message (a single message has 160 characters. Additional characters count as an additional messages).

                                        </p>
                                        <table class="mt-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-l-lg">
                                                        Volume of messages
                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3">
                                                        All local networks (Ksh)
                                                    </th>
                                                    <th id="be-4" scope="col" class="px-6 py-3 rounded-r-lg">
                                                        International networks (Ksh)
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        1-20,000
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.80
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        8.00
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        20,001 - 100,000
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.70
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        8.00
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        100,001 - 250,000
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.60
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        8.00
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th id="be-4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        250,001+
                                                    </th>
                                                    <td id="be-4" class="px-6 py-4">
                                                        0.55
                                                    </td>
                                                    <td id="be-4" class="px-6 py-4">
                                                        8.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>
                                    </div>


                                </details>
                            </div>
                            <div class="py-5">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 ml-96">
                        <a href="<?php echo home_url('/#'); ?>" class="ml-40">
                            <button style="background-color: #FBA800;" type="button" class=" hover:ring-2  hover:bg-yellow-467 transition duration-300 ease-in-out  bg-yellow-500 ring-1 ring-yellow-300  rounded-full text-sm px-3 py-1.5 text-center 2 mb-2 ">
                                <div class="flex items-center ">
                                    <span class="-ml-3 text-white" id="w">Get Started</span>
                                    <svg width="8" height="8" viewBox="0 0 10 10" fill="white" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Vector">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.77671 0.580198C10.0424 0.845861 10.0424 1.27659 9.77671 1.54225L1.61345 9.70551C1.34778 9.97118 0.917058 9.97118 0.651396 9.70551C0.385733 9.43985 0.385733 9.00913 0.651396 8.74346L8.81466 0.580198C9.08032 0.314535 9.51105 0.314535 9.77671 0.580198Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.98276 1.06122C1.98276 0.685519 2.28733 0.380951 2.66303 0.380951H9.29569C9.67139 0.380951 9.97596 0.685519 9.97596 1.06122V7.69388C9.97596 8.06958 9.67139 8.37415 9.29569 8.37415C8.91998 8.37415 8.61541 8.06958 8.61541 7.69388V1.7415H2.66303C2.28733 1.7415 1.98276 1.43693 1.98276 1.06122Z" fill="white" />
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </a>
                        
                    </div>
                </div>
                <p id="pt-p1" class=" ml-24">
                    For businesses that need more than the plans above,
                    <a href="<?php echo home_url('/contact-us'); ?>" id="pt-p">
                        <button type="button" style="color:#FBA800">
                            <h6 class="text-sm">contact us.</h6>
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>