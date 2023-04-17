<x-app-layout>

    <div class=" px-4 sm:ml-64 mb-10 ">

        <div class="xl:flex justify-between outline-none">
            <div class="logo">
                <h1 class="text-bold text-xl text-gray-900 font-bold  mb-9 xl:mb-0 xl:mt-2">Gestion des etudiants</h1>

            </div>
            <form class=" mb-9 xl:w-3/6 xl:float-right outline-none">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative outline-none">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="search" name="query"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>


        </div>

        <table
            class="min-w-full mx-auto text-sm text-left text-gray-500 dark:text-gray-400    shadow-xl rounded-lg mb-5 hidden xl:block ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Matricule
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nom
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path
                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Prenom
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path
                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Niveau
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1"
                                    aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                    <path
                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Parcours
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 320 512">
                                    <path
                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Email
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 w-full">
                        <div class="flex items-center text-">
                            Action
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="alldata divide-y">

                @php
                    $i = 0;
                @endphp
                @foreach ($etudiants as $etudiant)
                    @php
                        $i++;
                    @endphp
                    <tr class="bg-white dark:bg-gray-800 default-data">
                        <th scope="row"
                            class=" overflow-hidden font-medium text-gray-900  dark:text-white tracking-wide">
                            <div class="px-12 py-8 text-center  bg-yellow-200 ">
                                <button data-modal-target="editEtudiantModal{{ $i }}"
                                    data-modal-toggle="editEtudiantModal{{ $i }}"
                                    class="text-yellow-700 font-bold" type="button">
                                    {{ $etudiant->matricule }}
                                </button>
                            </div>
                        </th>
                        <td class="px-6 py-4 tracking-wide">
                            {{ $etudiant->nom }}
                        </td>
                        <td class="px-6 py-4 tracking-wide">
                            {{ $etudiant->prenom }}
                        </td>
                        <td class="px-6 py-4 tracking-wide">
                            {{ $etudiant->niveau }}
                        </td>
                        <td class="px-6 py-4 tracking-wide">
                            {{ $etudiant->parcours }}
                        </td>
                        <td class="px-6 py-4 tracking-wide">
                            {{ $etudiant->email }}
                        </td>
                        {{-- <td class="px-6 py-4 text-right">
                              </td> --}}
                        <td class=" py-4 flex tracking-wide">



                            <!-- Modal toggle -->


                            <button data-modal-target="readEtudiantModal{{ $i }}"
                                data-modal-toggle="readEtudiantModal{{ $i }}"
                                class=" transform transition-all hover:rotate-45 text-blue-600 hover:text-blue-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 text-center"
                                type="button">
                                <i class="fa-solid fa-pen-to-square "></i>
                            </button>

                            {{-- <a href="{{ route('etudiant.edit', $etudiant) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-5 py-2.5 mr-2 mb-2"> --}}




                            <button data-modal-target="popup-modal{{ $i }}"
                                data-modal-toggle="popup-modal{{ $i }}"
                                class="transform transition-all hover:rotate-45 text-red-600 hover:text-red-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 text-center"
                                type="button">
                                <i class="fa-solid fa-trash "></i>
                            </button>


                            <a href="{{ route('etudiant.pdf', $etudiant) }}"
                                class="transform transition-all hover:rotate-45 text-green-600 hover:text-green-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 text-center">
                                <i class="fa-solid fa-print "></i>
                            </a>



                          
                            <div id="editEtudiantModal{{ $i }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <form action="{{ route('etudiant.update', $etudiant->matricule) }}"
                                        method="POST" class="w-full  mx-auto p-4  bg-white shadow-md rounded-md">
                                        @csrf
                                        @method('PATCH')
                                        <div class="grid xl:grid-cols-2 gap-10 justify-center p-4">
                                            <div class="w-full">
                                                <div class="mb-4 w-full">
                                                    <label for="matricule"
                                                        class="block text-gray-700 font-bold mb-2 w-full">Matricule</label>
                                                    <input type="text" id="matricule" name="matricule"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        value="{{ $etudiant->matricule }}" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="nom"
                                                        class="block text-gray-700 font-bold mb-2">Nom</label>
                                                    <input type="text" id="nom" name="nom"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        value="{{ $etudiant->nom }}" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="prenoms"
                                                        class="block text-gray-700 font-bold mb-2">Prénoms</label>
                                                    <input type="text" id="prenom" name="prenom"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        value="{{ $etudiant->prenom }}" required>
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class="mb-4 w-100">
                                                    <label for="niveau"
                                                        class="block text-gray-700 font-bold mb-2">Niveau</label>
                                                    <select id="niveau" name="niveau"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        required>
                                                        <option value="{{ $etudiant->niveau }}">
                                                            {{ $etudiant->niveau }}</option>
                                                        <option value="Licence 1">Licence 1</option>
                                                        <option value="Licence 2">Licence 2</option>
                                                        <option value="Licence 3">Licence 3</option>
                                                        <option value="Master 1">Master 1</option>
                                                        <option value="Master 2">Master 2</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="parcours"
                                                        class="block text-gray-700 font-bold mb-2">Parcours</label>
                                                    <select id="parcours" name="parcours"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        required>
                                                        <option value="{{ $etudiant->parcours }}">
                                                            {{ $etudiant->parcours }}</option>
                                                        <option value="Informatique">Informatique</option>
                                                        <option value="Génie Civil">Génie Civil</option>
                                                        <option value="Droit">Droit</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Finance">Finance</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="adr_email"
                                                        class="block text-gray-700 font-bold mb-2">Adresse
                                                        email</label>
                                                    <input type="email" id="adr_email" name="email"
                                                        value="{{ $etudiant->email }}"
                                                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex  justify-center xl:justify-end space-x-3 px-4">
                                            <button type="reset"
                                                class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                                                Réinitialiser
                                            </button>
                                            <button type="submit"
                                                class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                Enregistrer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!-- Main modal -->
                            <div id="readEtudiantModal{{ $i }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <!-- Modal header -->
                                        <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                            <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                <h3 class="font-semibold ">
                                                    {{ $etudiant->nom . ' ' . $etudiant->prenom }}
                                                </h3>
                                                <p class="font-bold">
                                                    {{ $etudiant->matricule }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="readEtudiantModal{{ $i }}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                        </div>
                                        <dl>
                                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                Theme :
                                            </dt>
                                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                Electronics/PC
                                            </dd>
                                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                Description :
                                            </dt>
                                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">


                                                Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor,
                                                Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT
                                                with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic
                                                Mouse 2, Magic Keyboard - US.
                                            </dd>
                                        </dl>
                                        <div class="flex justify-between items-center">
                                            <div class="flex items-center space-x-3 sm:space-x-4">
                                                <button type="button"
                                                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button type="button"
                                                    class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    Preview
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Delete
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="popup-modal{{ $i }}" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                <div class="relative w-full h-full max-w-md md:h-auto">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="popup-modal{{ $i }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg aria-hidden="true"
                                                class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400 test">
                                                Are
                                                you sure you want to delete this product {{ $etudiant->matricule }}?
                                            </h3>
                                            <form action="{{ route('etudiant.destroy', $etudiant) }}" method="POST"
                                                class="text-white font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Je
                                                    suis sure</button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tbody id="table-etudiant">
                <tr class="bg-white dark:bg-gray-800 default-data">

                </tr>
            </tbody>
        </table>
        @php
            $i = 0;
        @endphp
        @foreach ($etudiants as $etudiant)
            @php
                $i++;
            @endphp
            <div class="grid grid-cols-1 gap-4 xl:hidden mb-4 ">
                <div class="bg-white p-4 rounded-lg shadow overflow-hidden flex">
                    <div class="w-11/12">
                        <div class="flex  flex-col w-full">
                            <div class="flex space-x-5 ">
                                <p class="  text-yellow-400">{{ $etudiant->parcours }}</p>
                                <p class=" text-yellow-400">{{ $etudiant->niveau }}</p>
                                <p class="text-blue-800 font-bold  hover:underline">
                                    <a href="">#{{ $etudiant->matricule }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="my-2 text-sm ">
                            <p>{{ $etudiant->nom . ' ' . $etudiant->prenom }}</p>
                        </div>

                        <div class="text-sm text-gray-500">
                            <a href="" class="flex space-x-2">
                                <i class="fa-solid fa-envelope "></i>
                                <p>{{ $etudiant->email }}</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/12 h-full text-right">
                        <button data-modal-target="readEtudiantModale{{ $i }}"
                            data-modal-toggle="readEtudiantModale{{ $i }}"
                            class=" text-blue-600 hover:text-blue-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm text-center"
                            type="button">
                            <i class="fa-solid fa-pen-to-square transform transition-all hover:rotate-45"></i>
                        </button>

                        <button data-modal-target="popup-modal{{ $i }}"
                            data-modal-toggle="popup-modale{{ $i }}"
                            class=" text-red-600 hover:text-red-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm my-3 text-center"
                            type="button">
                            <i class="fa-solid fa-trash "></i>
                        </button>

                        <a href="{{ route('etudiant.pdf', $etudiant) }}"
                            class=" text-green-600 hover:text-green-700 focus:ring-4 focus:outline-none open-modal focus:ring-blue-300 font-medium rounded-lg text-sm text-center">
                            <i class="fa-solid fa-print "></i>
                        </a>


                        <!-- Main modal -->
                        <div id="readEtudiantModale{{ $i }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed  right-0 left-0 z-50 top-114 justify-center items-center w-full md:inset-0 h-modal md:h-full transition-all">
                            <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                        <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                            <h3 class="font-semibold ">
                                                {{ $etudiant->nom . ' ' . $etudiant->prenom }}
                                            </h3>
                                            <p class="font-bold">
                                                {{ $etudiant->matricule }}
                                            </p>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="readEtudiantModale{{ $i }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Theme :
                                        </dt>
                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                            Electronics/PC
                                        </dd>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Description :
                                        </dt>
                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">


                                            Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor,
                                            Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT
                                            with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic
                                            Mouse 2, Magic Keyboard - US.
                                        </dd>
                                    </dl>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-3 sm:space-x-4">
                                            <button type="button"
                                                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit
                                            </button>
                                            <button type="button"
                                                class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Preview
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="popup-modale{{ $i }}" tabindex="-1"
                            class="fixed top-114 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-hide="popup-modale{{ $i }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true"
                                            class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400 test">
                                            Vous êtes sûre d'effacer l'etudinat {{ $etudiant->matricule }}?
                                        </h3>
                                        <form action="{{ route('etudiant.destroy', $etudiant) }}" method="POST"
                                            class="text-white font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Je
                                                suis sure</button>
                                        </form>
                                        <button data-modal-hide="popup-modale" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                            cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <script>
        $('#search').on('keyup', function() {
            $value = $(this).val();

            if ($value) {
                $('.alldata').hide();
                $('#table-etudiant').show();

            } else {
                $('.alldata').show();
                $('#table-etudiant').hide();
            }

            $.ajax({
                type: 'get',
                url: '{{ URL::to('recherche-etudiant') }}',
                data: {
                    'query': $value
                },
                success: function(data) {
                    console.log(data);
                    $('#table-etudiant').html(data);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }

            });
            // alert($value);
        });
    </script>
</x-app-layout>
