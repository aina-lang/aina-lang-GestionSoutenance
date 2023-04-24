<nav x-data="{ open: false }" class="fixed top-0 z-50 w-full bg-white border-b ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-end h-16">


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif --}}

                            <div class="border-t border-gray-200"></div>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


<aside id="logo-sidebar"
    class="fixed top-0 left-0   h-screen w-64 transition-transform -translate-x-full bg-gray-900 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar" style="z-index:9999;">
    <div class="flex p-2 py-4">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}" class="">
                <x-application-mark class="block  w-auto" />
            </a>
            <h1 class="px-3 text-xl font-extrabold text-indigo-400">Gestion de Soutenance</h1>
        </div>
    </div>
    <div class="h-full shadow-xl pt-10 pr-3 pb-4 overflow-y-auto bg-gray-800 dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-lg pl-8 font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-gauge transform transition-all hover:rotate-45 "></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('etudiant.index') }}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-users "></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Etudiants</span>
                </a>
            </li>
            <li>
                <a href="{{ route('professeur.index') }}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-person-chalkboard  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Professeurs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('organisme.index') }}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-building-columns transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Organismes</span>
                </a>
            </li>
            <li>
                <a href="{{ route('soutenir.index') }}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-graduation-cap  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Soutenance </span>
                </a>
            </li>
            <li>
                <a href="{{route('etudiant.passoutenance')}}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-user  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Soutenance restant</span>
                </a>
            </li>
            <li>
                <a href="{{route('etudiant.parNiveau')}}"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-user  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Etudiants par niveau</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div data-dial-init class="fixed bottom-2 right-6 group">
    <div id="speed-dial-menu-dropdown"
        class=" flex-col justify-end hidden py-1 mb-4 space-y-2 z-50 bg-white border border-gray-100 rounded-lg shadow-sm dark:border-gray-600 dark:bg-gray-700">
        <ul class="text-sm text-gray-500 dark:text-gray-300 ">
            {{-- <li>
                <a href="#"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium">Share</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm font-medium">Print</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4zm7 5a1 1 0 00-2 0v1.586l-.293-.293a.999.999 0 10-1.414 1.414l2 2a.999.999 0 001.414 0l2-2a.999.999 0 10-1.414-1.414l-.293.293V9z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm font-medium">Save</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
                        <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
                    </svg>
                    <span class="text-sm font-medium">Copy</span>
                </a>
            </li> --}}
            <li class="w-full">
                <a href="{{ route( 'etudiant.create') }}" data-modal-target="createEtudiantModal" data-modal-toggle="createEtudiantModal"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-solid fa-users "></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Etudiants</span>
            </a>
            </li>
            <li>
                <a href="{{ route('professeur.create') }}"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-solid fa-person-chalkboard  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Professeurs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('organisme.create') }}"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-solid fa-building-columns transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Organismes</span>
                </a>
            </li>
            <li>
                <a href="{{ route('soutenir.create') }}"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-solid fa-graduation-cap  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Soutenir</span>
                </a>
            </li>
        </ul>
    </div>
    <button type="button" data-dial-toggle="speed-dial-menu-dropdown" aria-controls="speed-dial-menu-dropdown"
        aria-expanded="false"
        class="flex items-center justify-center ml-auto transform transition-all hover:rotate-45 text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">

        <i class="fa-solid fa-plus "></i>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>

