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
    class="fixed top-0 left-0 z-50  h-screen w-64 transition-transform -translate-x-full bg-gray-900 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
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
                    <span class="flex-1 ml-3 whitespace-nowrap">Soutenir</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 pl-8 text-lg font-normal text-gray-500 rounded-r-full dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-user  transform transition-all hover:rotate-45"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div data-dial-init class="fixed bottom-2 right-6 group">
    <div id="speed-dial-menu-dropdown"
        class=" flex-col justify-end hidden py-1 mb-4 space-y-2 bg-white border border-gray-100 rounded-lg shadow-sm dark:border-gray-600 dark:bg-gray-700">
        <ul class="text-sm text-gray-500 dark:text-gray-300">
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
                <button data-modal-target="createEtudiantModal" data-modal-toggle="createEtudiantModal"
                    class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-solid fa-users "></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Etudiants</span>
                </button>
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













<div id="createEtudiantModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
        <form action="{{ route('etudiant.store') }}" method="POST"
            class="  mx-auto p-4  bg-white shadow-md rounded-md">
            @csrf
            {{-- @method('POST') --}}
            <div class="grid xl:grid-cols-2 gap-10 justify-center p-4">
                <div class="w-full">
                    <div class="mb-4 w-full">
                        <label for="matricule" class="block text-gray-700 font-bold mb-2 w-full">Matricule</label>
                        <input type="text" id="matricule" name="matricule"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('matricule')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                        <input type="text" id="nom" name="nom"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('nom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="prenoms" class="block text-gray-700 font-bold mb-2">Prénoms</label>
                        <input type="text" id="prenoms" name="prenoms"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('prenoms')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <div class="mb-4 w-100">
                        <label for="niveau" class="block text-gray-700 font-bold mb-2">Niveau</label>
                        <select id="niveau" name="niveau"
                            class="w-full px-3 border rounded-md outline-none focus:ring-2 focus:ring-blue-500 "
                            name="state">
                            <option value="">Choisir un niveau</option>
                            <option value="Licence 1">Licence 1</option>
                            <option value="Licence 2">Licence 2</option>
                            <option value="Licence 3">Licence 3</option>
                            <option value="Master 1">Master 1</option>
                            <option value="Master 2">Master 2</option>
                        </select>

                    </div>
                    <div class="mb-4">
                        <label for="parcours" class="block text-gray-700 font-bold mb-2">Parcours</label>
                        <select id="parcours" name="parcours"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="">Choisir un parcours</option>
                            <option value="Informatique">Informatique</option>
                            <option value="Génie Civil">Génie Civil</option>
                            <option value="Droit">Droit</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="adr_email" class="block text-gray-700 font-bold mb-2">Adresse
                            email</label>
                        <input type="email" id="adr_email" name="email"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex  justify-center xl:justify-end space-x-3 px-4">
                <button type="reset"
                    class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Réinitialiser
                </button>
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    onclick="displaySuccessMessage()">
                    Enregistrer
                </button>

                <div id="toast-success"
                    class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                    role="alert" style="position:absolute;top:80px;right:-1000px;z-index:9999;transition:0.5s;">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">Item moved successfully.</div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        {{-- <span class="sr-only" onclick="displaySuccessMessage()">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
                    </button>
                </div>
                {{-- <div id="toast-danger"
                    class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                        data-dismiss-target="#toast-danger" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div> --}}
                <script>
                    function displaySuccessMessage() {
                        var message = document.getElementById("toast-success");
                        message.style.right = "0px";
                        setTimeout(() => {
                            message.style.right = "-1000px";
                        }, 3000);
                    }
                    // function displaySuccessMessage() {
                    //     var message = document.getElementById("toast-success");
                    //     message.style.right="0px";
                    //    setTimeout(() => {
                    //     message.style.right="-1000px";
                    //    }, 3000);
                    // }
                </script>

                {{-- Notez que j'ai ajouté un onclick à l'élément <a> pour appeler la fonction displaySuccessMessage(), qui affiche le message en faisant apparaître l'élément <div> correspondant. Le style display:none; initial cachera le message jusqu'à ce qu'il soit affiché. --}}

            </div>

        </form>
    </div>
</div>
