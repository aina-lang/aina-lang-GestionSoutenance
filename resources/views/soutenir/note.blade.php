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
                        placeholder="Nom,Prenom,Niveau,Email,Matricule..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Nom
                </th>
                <th scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Prenom
                </th>
                <th scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Organisme
                </th>
                <th scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Annee Univ
                </th>
                <th scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Note
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($soutenances as $note)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $note->nom }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $note->prenom }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $note->design }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $note->annee_univ }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  {{ $note->note }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

</x-app-layout>
