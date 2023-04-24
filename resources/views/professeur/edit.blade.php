<x-app-layout>
    <div class="overflow-x-auto  sm:ml-64 mb-10">
        <div class="logo mb-10">
            <h1 class="text-bold text-xl text-indigo-500  mb-9 xl:mb-0 xl:mt-2">Ajout d'un professeur</h1>
        </div>
        <form action="{{ route('professeur.update', $professeur )  }}" method="POST" class="xl:w-3/5  mx-auto p-4  bg-white shadow-md rounded-md">
            @csrf
            @method('PATCH')
            <div class="grid xl:grid-cols-2 gap-10 justify-center p-4">
                <div class="w-full">
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                        <input type="text" id="nom" name="nom"
                        value="{{ $professeur->nom }}"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénoms</label>
                        <input type="text" id="prenom" name="prenom"
                        value="{{ $professeur->prenoms }}"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    {{-- <div class="mb-4">
                        <label for="adr_email" class="block text-gray-700 font-bold mb-2">Adresse email</label>
                        <input type="email" id="adr_email" name="email"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div> --}}
                </div>
                <div class="w-full">
                    <div class="mb-4 w-100">
                        <label for="civilites" class="block text-gray-700 font-bold mb-2">Civilites</label>
                        <select id="civilites" name="civilites"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="{{ $professeur->civilites }}">{{ $professeur->civilites }}</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Mlle">Mlle</option>
                            <option value="Mme">Mme</option>

                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="grade" class="block text-gray-700 font-bold mb-2">Grade</label>
                        <select id="grade" name="grade"
                            class="w-full px-3 py-2 border rounded-md outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="{{ $professeur->grade }}">{{ $professeur->grade }}</option>
                            <option value="Professeur titulaire">Professeur titulaire</option>
                            <option value="Maître de Conférences">Maître de Conférences</option>
                            <option value="Assistant d’Enseignement Supérieur et de Recherche">Assistant d’Enseignement Supérieur et de Recherche</option>
                            <option value="Docteur HDR">Docteur HDR</option>
                            <option value="Docteur en Informatique">Docteur en Informatique</option>
                            <option value="Doctorant en informatique">Doctorant en informatique</option>
                            <option value="">autre</option>
                        </select>
                    </div>
                    <div class="flex  justify-between  space-x-3 mt-12">
                        <button type="reset"
                            class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Réinitialiser
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>

            {{-- <div class="flex  justify-center xl:justify-end space-x-3 px-4">
                <button type="reset"
                    class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Réinitialiser
                </button>
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Enregistrer
                </button>
            </div> --}}
        </form>
    </div>
</x-app-layout>
