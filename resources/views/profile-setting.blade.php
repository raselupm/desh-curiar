<x-app-layout>
    <div class="profile-wrapper min-h-fit w-full bg-[#F5F5F5] pl-4">
        <div class="profile-container w-1/2 bg-white my-4 pb-20">
           <div class="profile-header  border-[#E8E7EB] border-b-2 flex items-center justify-between px-6 py-12">
            <div class="profile-left flex items-center gap-4">
                <div class="profile-img">
                    <img src="{{ asset('assets/img/profile.png') }}" alt="">
                </div>

                <div class="profile-content ">
                    <h4 class="text-xl font-medium text-gray-900">Ratul Ahmed</h4>
                    <span class="text-base text-gray-300">Admin</span>
                </div>
            </div>
            <div class="profile-right-btn">
                <a href="#" class="bg-blue-400 text-white px-8 py-3.5 hover:bg-blue-600 hover:text-white ease-in-out duration-300">Edit</a>
            </div>
           </div>

           <div class="input-field-area px-6 mt-8">

            <div class="single-input-row flex gap-4 mb-4">

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="first_name">First Name</label>
                    <input id="first_name" class="border-none focus:outline-none focus:border-none focus:ring-0" type="text">
                </div>
                <div class="border-b dc-header-broder-color mb-2">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" class="border-none focus:outline-none focus:border-none focus:ring-0" type="text">
                </div>

            </div>
            <div class="single-input-row flex gap-4 mb-4">

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="birth_date">Date of Birth</label>
                    <input id="birth_date" class="appearance-none border-none focus:outline-none focus:border-none focus:ring-0 appearance-none" type="date">
                </div>

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="join_date">Date Of Joining</label>
                    <input id="join_date" class="border-none focus:outline-none focus:border-none focus:ring-0" type="date">
                </div>

            </div>
            <div class="single-input-row flex gap-4 mb-4">

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="mobile_number">Mobile Number</label>
                    <input id="mobile_number" class="border-none focus:outline-none focus:border-none focus:ring-0" type="number">
                </div>
                <div class="border-b dc-header-broder-color mb-2">
                    <label for="email">Email</label>
                    <input id="email" class="border-none focus:outline-none focus:border-none focus:ring-0" type="text">
                </div>

            </div>
            <div class="single-input-row flex gap-4 mb-4">

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="nid_card">Nid Card Number</label>
                    <input id="nid_card" class="appearance-none border-none focus:outline-none focus:border-none focus:ring-0" type="number">
                </div>
                <div class="border-b dc-header-broder-color mb-2">
                    <label for="profile_id">Profile Id Number</label>
                    <input id="profile_id" class="border-none focus:outline-none focus:border-none focus:ring-0" type="number">
                </div>

            </div>
            <div class="single-input-row flex gap-4 mb-4">

                <div class="border-b dc-header-broder-color mb-2">
                    <label for="address">Address</label>
                    <input id="address" class="border-none focus:outline-none focus:border-none focus:ring-0" type="text">
                </div>
                <div class="border-b dc-header-broder-color mb-2">
                    <label for="hub">Hub</label>
                    <input id="hub" class="border-none focus:outline-none focus:border-none focus:ring-0" type="text">
                </div>

            </div>

            <a href="#" class="border w-full block py-4 text-center mt-11 text-blue-600 hover:bg-blue-600 hover:text-white font-medium uppercase ease-in duration-200" >See all Details</a>

           </div>

        </div>
   
    </div>
</x-app-layout>