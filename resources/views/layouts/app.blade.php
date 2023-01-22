<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Desh Courier') }}</title>

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
                                <a href="{{route('dashboard')}}" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/dashboard.svg') }}"
                                            alt=""></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('dashboard')}}" class="flex text-blue-600 font-bold items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/more.svg') }}"
                                            alt=""></span>
                                    Shipments
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('payments')}}" class="flex text-gray-300 items-center gap-2">
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
                                <a href="{{route('employees')}}" class="flex text-gray-300 items-center gap-2">
                                    <span><img src="{{ asset('assets/img/Iconly/Light/user.svg') }}"
                                            alt=""></span>
                                    Employees
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{route('vehicles')}}" class="flex text-gray-300 items-center gap-2">
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

        {{$slot}}

    </div>
    <!--End Main Section-->
</body>

</html>
