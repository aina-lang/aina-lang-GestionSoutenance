<x-app-layout>
   <div class="overflow-x-auto  sm:ml-64 mb-10">
    <div class="logo mb-10">
        <h1 class="text-bold text-xl text-indigo-500  mb-9 xl:mb-0 xl:mt-2">Ajout d'un etudiant</h1>
    </div>
    <form action="#" method="POST" class="xl:w-3/5  mx-auto p-4  bg-white shadow-md rounded-md">
        <div class="grid xl:grid-cols-2 gap-10 justify-center p-4">
            <div class="w-full">
                <div class="mb-4 w-full">
                    <label for="matricule" class="block text-gray-700 font-bold mb-2 w-full">Matricule</label>
                    <input type="text" id="matricule" name="matricule"
                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                        required>
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
                    <select id="niveau" name="niveau"
                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                        required>
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
                    <input type="email" id="adr_email" name="adr_email"
                        class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>
            </div>
        </div>

        <div class="flex  justify-center xl:justify-end space-x-3 px-4">
            <button type="reset" class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
              Réinitialiser
            </button>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
              Enregistrer
            </button>
          </div>
    </form>
   </div>
</x-app-layout>
