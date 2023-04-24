<x-app-layout>
   <div class="w-90 mx-auto overflow-x-auto  sm:ml-64 mb-10">
    <div class="logo mb-10">
        <h1 class="text-bold text-xl text-indigo-500  mb-9 xl:mb-0 xl:mt-2">Ajout d'un Organisme</h1>
    </div>
    <form action="{{ route('organisme.store') }}" method="POST" class="xl:w-3/5 mx-auto p-4 bg-white shadow-md rounded-md">
        @csrf
        @method('POST')
        <div class=" gap-10 justify-center p-4">
          <div class="w-full">
            <div class="mb-4">
              <label for="design" class="block text-gray-700 font-bold mb-2">Designation</label>
              <input type="text" id="matricule" name="design" class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
              <label for="lieu" class="block text-gray-700 font-bold mb-2">Lieu</label>
              <input type="text" id="lieu" name="lieu" class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
          </div>
        </div>

        <div class="flex justify-end space-x-3 px-4">
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
