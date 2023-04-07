<x-app-layout>
    <div class="overflow-x-auto  sm:ml-64 mb-10">
        <div class="logo mb-10">
            <h1 class="text-bold text-xl text-indigo-500  mb-9 xl:mb-0 xl:mt-2">Ajout d'un etudiant</h1>
        </div>
        <form action="{{ route('etudiant.store') }}" method="POST"
            class="xl:w-3/5  mx-auto p-4  bg-white shadow-md rounded-md">
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
                    </div>
                    <div class="mb-4">
                        <label for="prenoms" class="block text-gray-700 font-bold mb-2">Prénoms</label>
                        <input type="text" id="prenoms" name="prenoms"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                </div>
                <div class="w-full">
                    <div class="mb-4 w-100">
                        <label for="niveau" class="block text-gray-700 font-bold mb-2">Niveau</label>
                        <select id="niveau" name="niveau" class="w-full px-3 py-8 border rounded-md outline-none focus:ring-2 focus:ring-blue-500 " name="state" >
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
                        <label for="adr_email" class="block text-gray-700 font-bold mb-2">Adresse email</label>
                        <input type="email" id="adr_email" name="email"
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
                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" onclick="displaySuccessMessage()">
                    Enregistrer
                </button>

                <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert" style="position:absolute;top:80px;right:-1000px;z-index:9999;transition:0.5s;">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">Item moved successfully.</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        {{-- <span class="sr-only" onclick="displaySuccessMessage()">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
                    </button>
                </div>
                <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <script>
                    function displaySuccessMessage() {
                        var message = document.getElementById("toast-success");
                        message.style.right="0px";
                       setTimeout(() => {
                        message.style.right="-1000px";
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
</x-app-layout>
