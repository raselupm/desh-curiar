<x-app-layout>
    <div class="dashboard-bg py-7 pl-7 pr-4 w-full">
        <div class="flex items-center justify-between">
            <div class="min-w-max">
                <h4 class="text-gray-900 font-size-22 font-bold">Location</h4>
                <p class="text-gray-600"><span>109</span> Location Found</p>
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
        <div class="bg-white h-screen my-3">
            <h1 class="text-center text-lg py-3 bg-cyan-600 text-white">Bheremara, Kustia</h1>
        </div>


    </div>
</x-app-layout>