<x-app-layout>

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
</x-app-layout>
