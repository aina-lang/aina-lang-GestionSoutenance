<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de soutenance') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class=" rounded-lg  mt-14">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 mb-4">
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 ">
                    <div
                        class="flex items-center justify-center   rounded flex-col bg-emerald-500 h-28 dark:bg-emerald-800 py-20">
                        <p class="text-2xl text-white dark:text-white">Nombre de etudiants:</p>
                        <h2 class="font-extrabold text-4xl  text-white dark:text-white"> {{ $etudiantsCount }}</h2>
                    </div>
                    <div
                        class="flex items-center justify-center rounded flex-col bg-rose-500 h-28 dark:bg-rose-800 py-20">
                        <p class="text-2xl text-white dark:text-white">Nombre de professeurs: </p>
                        <h2 class="font-extrabold text-4xl  text-white dark:text-white">{{ $professeursCount }}</h2>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 ">
                    <div
                        class="flex items-center justify-center rounded flex-col bg-sky-500 h-28 dark:bg-sky-800 py-20">
                        <p class="text-2xl text-white dark:text-white">Nombre de organismes: </p>
                        <h2 class="font-extrabold text-4xl  text-white dark:text-white">{{ $organismesCount }}</h2>
                    </div>
                    <div
                        class="flex items-center justify-center rounded flex-col bg-teal-500 h-28 dark:bg-teal-800 py-20">
                        <p class="text-2xl text-white dark:text-white">Nombre de soutenances:</p>
                        <h2 class="font-extrabold text-4xl  text-white dark:text-white"> {{ $soutenirsCount }}</h2>
                    </div>
                </div>

            </div>
        </div>

</x-app-layout>
