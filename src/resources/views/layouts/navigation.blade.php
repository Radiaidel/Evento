<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">

                    <!-- Ajouter d'autres liens de navigation selon les besoins -->
                    @if(Auth::user()->role == 'admin')

                    <x-nav-link :href="route('admin.dashboard')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('category.index')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Categories') }}
                    </x-nav-link>
                    <x-nav-link :href="route('users.index')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Utilisateurs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('events.pending')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Evénements') }}
                    </x-nav-link>
                    @elseif(Auth::user()->role == 'organizer')
                    <x-nav-link :href="route('organizer.dashboard')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('my-events')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Mes événements') }}
                    </x-nav-link>
                    <x-nav-link :href="route('organizer.reservations')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Reservations') }}
                    </x-nav-link>
                    @elseif(Auth::user()->role == 'user')
                    <x-nav-link :href="route('dashboard')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('ticket.index')" class="text-gray-800 hover:text-blue-600">
                        {{ __('Mes tickets') }}
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">

                            <div class="ms-1 flex items-center ">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full overflow-hidden">
                                    <img class="h-full w-full object-cover" src="{{ asset('storage/'.Auth::user()->profile_photo) }}" alt="{{ Auth::user()->name }}" />
                                </div>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-gray-800 hover:text-blue-600">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @if(Auth::user()->role == 'admin')
            <x-responsive-nav-link :href="route('admin.dashboard')" class="text-gray-800 hover:text-blue-600">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('category.index')" class="text-gray-800 hover:text-blue-600">
                {{ __('Categories') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('users.index')" class="text-gray-800 hover:text-blue-600">
                {{ __('Utilisateurs') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('events.pending')" class="text-gray-800 hover:text-blue-600">
                {{ __('Evénements') }}
            </x-responsive-nav-link>
            @elseif(Auth::user()->role == 'organizer')
            <x-responsive-nav-link :href="route('organizer.dashboard')" class="text-gray-800 hover:text-blue-600">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('my-events')" class="text-gray-800 hover:text-blue-600">
                {{ __('Mes événements') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('organizer.reservations')" class="text-gray-800 hover:text-blue-600">
                {{ __('Reservations') }}
            </x-responsive-nav-link>

            @elseif(Auth::user()->role == 'user')
            <x-responsive-nav-link :href="route('dashboard')" class="text-gray-800 hover:text-blue-600">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('ticket.index')" class="text-gray-800 hover:text-blue-600">
                {{ __('Mes tickets') }}
            </x-responsive-nav-link>
            @endif


        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
        

            <div class="space-y-1">
               
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-gray-800 hover:text-blue-600">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>