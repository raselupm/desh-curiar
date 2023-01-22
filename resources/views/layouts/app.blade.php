<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!--Header Section-->
    <div class="flex p-4 border-b dc-header-broder-color items-center">
        <div class="flex-1">
            <div class="min-w-max">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img class="mr-4" src="{{ asset('assets/img') }}/logo-icon.svg" alt="">
                    <h1 class="font-bold text-2xl logo-heading">{{ config('app.name') }}</h1>
                </a>
            </div>
        </div>

        <div class="w-full flex-1 flex items-center justify-end">
            <form action="" class="w-full">
                <div class="flex">
                    <input type="search" placeholder="Search by anyThing"
                        class="w-full gray-bg border-none focus:outline-none focus:ring-0">
                    <button class="inline-block bg-blue-600 border-none px-3"><img
                            src="{{ asset('assets/img/Iconly/Light/search.svg') }}" alt=""></button>
                </div>
            </form>
            <span class="w-0.5 h-10 bg-gray-100 inline-block  mx-8"></span>
            <a href="#" class="pr-4">
                <img src="{{ asset('assets/img/Iconly/Light/notification.svg') }}" alt="">
            </a>
            <div class="profile-bg w-10 h-10 bg-center bg-contain bg-no-repeat rounded-full"></div>
        </div>
    </div>
    <!--End Header Section-->

    <!--Main Section-->
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            <div class="flex flex-col h-full justify-between">
                <div class="pr-4">
                    <div>
                        <h3 class="font-bold mb-3 text-gray-900">Menu</h3>
                        <ul class="ml-2">
                            <li class="mb-3">
                                <a href="#" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/dashboard.svg') }}"
                                            alt=""></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="flex text-blue-600 font-bold items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/more.svg') }}"
                                            alt=""></span>
                                    Shipments
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/card.svg') }}"
                                            alt=""></span>
                                    Payments
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/location.svg') }}"
                                            alt=""></span>
                                    Location
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3 text-gray-900">Organisation</h3>
                        <ul class="ml-2">
                            <li class="mb-3">
                                <a href="#" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/user.svg') }}"
                                            alt=""></span>
                                    Employees
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/truck.svg') }}"
                                            alt=""></span>
                                    Vehicles
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class=" pr-4 pb-6">
                        <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4 mb-2.5">
                            <img src="{{ asset('assets/img/Iconly/Light/setting.svg') }}" alt="">
                            Settings
                        </a>
                        <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4">
                            <img src="{{ asset('assets/img/Iconly/Light/logout.svg') }}" alt="">
                            Log Out
                        </a>
                    </div>
                    <!--Border Bottom-->
                    <p class="border-b dc-header-broder-color -ml-4"></p>
                    <div class="flex items-center gap-3 py-5">
                        <div class="profile-bg w-[50px] h-[50px] bg-center bg-contain bg-no-repeat rounded-full"></div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Ratul Ahmed</h4>
                            <span class="text-lg text-gray-300">Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End SideBar-->

        <div class="dashboard-bg py-7 pl-7 pr-4 w-full">
            <div class="flex items-center justify-between">
                <div class="min-w-max">
                    <h4 class="text-gray-900 font-size-22 font-bold">Shipments</h4>
                    <p class="text-gray-600"><span>109</span> Orders Found</p>
                </div>

                <div class="min-w-max">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">Sort By:- </span>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/paper.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option>All Orders</option>
                                <option value="Dec">Dec</option>
                                <option value="Asc">Asc</option>
                            </select>
                        </div>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                        <a href="#" class="bg-blue-600 py-1 px-2 text-white flex gap-2 items-center">Add New
                            <span><img src="{{ asset('assets/img/Iconly/Light/plus.svg') }}"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>

            <!--Table Content-->

            <div class="relative overflow-x-auto">
                <table class="w-full font-medium text-left border-separate border-spacing-y-3">
                    <thead class="text-white bg-blue-600">
                        <tr>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Booking Id
                            </th>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Name
                            </th>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Address
                            </th>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Date
                            </th>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Hub
                            </th>
                            <th scope="col" class="px-4 py-3 font-medium">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                126802736
                            </td>
                            <td class="p-4 text-gray-600">
                                Ratul Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara, Kushtia, Khulna
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Rasel Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Sakhipur, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Sakhipur
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Towhozib Ahmed Tomal
                            </td>
                            <td class="p-4 text-gray-600">
                                Chhagalnaiya, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Chhagalnaiya
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-red-border-color dc-red-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/close-square.svg') }}"
                                                alt=""></span>
                                        Canceled
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Sojol Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Lakshmipur, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Lakshmipur
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                126802736
                            </td>
                            <td class="p-4 text-gray-600">
                                Ratul Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara, Kushtia, Khulna
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-yellow-border-color dc-yellow-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/table-setting.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                126802736
                            </td>
                            <td class="p-4 text-gray-600">
                                Ratul Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara, Kushtia, Khulna
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Rasel Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Sakhipur, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Sakhipur
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Towhozib Ahmed Tomal
                            </td>
                            <td class="p-4 text-gray-600">
                                Chhagalnaiya, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Chhagalnaiya
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-red-border-color dc-red-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/close-square.svg') }}"
                                                alt=""></span>
                                        Canceled
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                659316598
                            </td>
                            <td class="p-4 text-gray-600">
                                Sojol Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Lakshmipur, Bangladesh
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Lakshmipur
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td scope="row" class="p-4 text-gray-600">
                                126802736
                            </td>
                            <td class="p-4 text-gray-600">
                                Ratul Ahmed
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara, Kushtia, Khulna
                            </td>
                            <td class="p-4 text-gray-600">
                                12-11-2023
                            </td>
                            <td class="p-4 text-gray-600">
                                Bheramara
                            </td>
                            <td class="p-4 text-gray-600">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-block p-1 items-center gap-2 border dc-yellow-border-color dc-yellow-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/table-setting.svg') }}"
                                                alt=""></span>
                                        Delivered
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                        <span class="block w-1 h-1 rounded-full border-2 border-gray-300"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--End Table Content-->

            <!--Pagination-->
            <div class="flex mt-10 items-center justify-between">
                <p class="min-w-max text-gray-600">
                    Showing Results 10 of 109
                </p>
                <div class="min-w-max flex gap-2 items-center">
                    <button class="w-8 h-8 rotate-180 bg-white flex items-center justify-center"><img
                            src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                    <p
                        class="w-8 h-8 bg-white border border-gray-100 flex items-center justify-center text-blue-600 text-[10px]">
                        10</p>
                    <p class="text-xs text-gray-600">of 128</p>
                    <button class="w-8 h-8 bg-white flex items-center justify-center"><img
                            src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Section-->
</body>

</html>
