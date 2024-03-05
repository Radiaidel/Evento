<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 space-y-2 w-full text-xs">
            <x-input-label id="picture" :value="__('Profile Image')" />
            <div class="flex items-center justify-center">
                <label for="profile_image" class="w-20 h-20 rounded-full cursor-pointer flex items-center justify-center border border-dashed border-gray-500" id="profilePictureLabel">
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" id="plusIcon" xmlns="http://www.w3.org/2000/svg" stroke="#e9e9e9">
                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 12H18M12 6V18" stroke="#e9e9e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </label>
                <input id="profile_image" class="hidden" type="file" name="profile_image" accept="image/*" onchange="displayImage('profilePictureLabel', 'profile_image')">
                <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
            </div>
        </div>


        <div class="mt-4">
            <x-input-label id="name_label" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full text-xs" type="text" name="name" :value="old('name')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full text-xs" type="email" name="email" :value="old('email')" required autocomplete="new-email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full text-xs" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full text-xs" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />

            <div class="flex gap-4">
                <div id="userCard" class="p-4 border border-indigo-400 rounded-md cursor-pointer hover:border-indigo-800" onclick="selectRole('user')">
                    <div class="flex items-center justify-center mb-2">

                        <svg width="50px" height="80px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e11e1e">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#cf3c30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#cf3c30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                    </div>
                    <p class="text-gray-500 text-xs">Select this card if you are an individual user.</p>
                </div>

                <div id="enterpriseCard" class="p-4 border border-indigo-400 rounded-md cursor-pointer hover:border-indigo-800" onclick="selectRole('organizer')">
                    <div class="flex items-center justify-center mb-2">
                        <svg fill="#d22d2d" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="80px" viewBox="0 0 32.75 32.75" xml:space="preserve" stroke="#d22d2d">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path d="M29.375,1.25h-1.124c0.028-0.093,0.058-0.186,0.058-0.289C28.311,0.431,27.879,0,27.348,0s-0.961,0.431-0.961,0.961 c0,0.103,0.028,0.196,0.059,0.289h-3.68c0.029-0.093,0.058-0.186,0.058-0.289C22.823,0.43,22.393,0,21.861,0 C21.331,0,20.9,0.431,20.9,0.961c0,0.103,0.029,0.196,0.059,0.289h-3.68c0.029-0.093,0.058-0.186,0.058-0.289 C17.336,0.431,16.906,0,16.375,0c-0.531,0-0.961,0.431-0.961,0.961c0,0.103,0.029,0.196,0.058,0.289h-3.68 c0.029-0.093,0.058-0.186,0.058-0.289C11.85,0.431,11.419,0,10.888,0c-0.531,0-0.961,0.431-0.961,0.961 c0,0.103,0.028,0.196,0.058,0.289h-3.68c0.03-0.093,0.058-0.186,0.058-0.289C6.363,0.43,5.933,0,5.402,0 C4.871,0,4.441,0.431,4.441,0.961c0,0.103,0.029,0.196,0.058,0.289H3.375c-1.517,0-2.75,1.233-2.75,2.75v26 c0,1.518,1.233,2.75,2.75,2.75H26.27l5.855-5.855V4C32.125,2.483,30.893,1.25,29.375,1.25z M30.625,26.273l-0.311,0.311h-2.356 c-1.101,0-2,0.9-2,2v2.355l-0.31,0.311H3.375c-0.689,0-1.25-0.561-1.25-1.25V9h28.5V26.273z" />
                                        <path d="M17.152,25.025c-0.129-2.7-0.455-6.149-1.236-9.413h-0.795c0.464,3.743,0.394,8.011,0.254,10.913 c-0.711-1.949-1.799-4.401-3.318-6.461l-0.484,0.338c2.428,4.554,2.798,9.558,2.798,9.558h0.772h0.772h0.515h0.772h0.772 c0,0,0.381-5.86,2.82-11.083l-0.482-0.423C18.855,20.516,17.839,22.936,17.152,25.025z" />
                                        <polygon points="14.192,15.509 15.384,14.639 16.775,15.126 16.316,13.724 17.211,12.551 15.736,12.555 14.896,11.342 14.444,12.746 13.03,13.169 14.226,14.033 " />
                                        <polygon points="21.343,17.797 22.055,19.089 22.648,17.739 24.098,17.461 22.996,16.48 23.18,15.016 21.904,15.76 20.57,15.133 20.884,16.574 19.875,17.65 " />
                                        <polygon points="10.062,19.133 10.501,20.542 11.353,19.337 12.828,19.355 11.945,18.173 12.419,16.776 11.022,17.25 9.839,16.367 9.858,17.842 8.653,18.693 " />
                                    </g>
                                </g>
                            </g>

                        </svg>
                    </div>
                    <p class="text-gray-500 text-xs">Select this card if you are a business or enterprise.</p>
                </div>
            </div>

            <input type="hidden" name="role" id="selectedRole" value="user">
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function selectRole(role) {
            document.getElementById('selectedRole').value = role;

            const userCard = document.getElementById('userCard');
            const enterpriseCard = document.getElementById('enterpriseCard');
            const profileImageLabel = document.getElementById('picture');
            const nameLabel = document.getElementById('name_label');

            if (role === 'user') {
                userCard.classList.add('border-indigo-900', 'border-2');
                userCard.classList.remove('border-indigo-400');
                enterpriseCard.classList.remove('border-indigo-900', 'border-2');
                enterpriseCard.classList.add('border-indigo-400');
                profileImageLabel.textContent = 'Profile Image';
                nameLabel.textContent = 'User Name';
            } else if (role === 'organizer') {
                enterpriseCard.classList.add('border-indigo-900', 'border-2');
                enterpriseCard.classList.remove('border-indigo-400');
                userCard.classList.remove('border-indigo-900', 'border-2');
                userCard.classList.add('border-indigo-400');
                nameLabel.textContent = 'organizer Name';
            }
        }

        selectRole("user");

        function displayImage(onlabel, inInput) {
            var input = document.getElementById(inInput);
            var label = document.getElementById(onlabel);

            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    label.style.backgroundImage = 'url(' + e.target.result + ')';
                    label.style.backgroundSize = 'cover';
                    label.style.backgroundPosition = 'center';
                    label.style.border = 'none';
                    document.getElementById('plusIcon').style.display = 'none';
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
</x-guest-layout>