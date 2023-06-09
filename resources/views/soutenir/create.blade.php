<x-app-layout>
    <div class="w-90 mx-auto overflow-x-auto  sm:ml-64 mb-10">
        <div class="logo mb-10">
            <h1 class="text-bold text-xl text-indigo-500  mb-9 xl:mb-0 xl:mt-2">Ajout d'un Soutenance</h1>
        </div>
        <form action="{{ route('soutenir.store') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 grid xl:grid-cols-2 gap-10 justify-center p-4">
            @csrf
            @method('POST')
            <div>
                <div class="mb-4">
                    <label for="etudiant" class="block text-gray-700 font-bold mb-2">Étudiant :</label>
                    {!! Form::select('etudiant', $etudiants, null, [
                        'id' => 'etudiant',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Sélectionner un étudiant',
                    ]) !!}
                </div>

                <div class="mb-4">
                    <label for="idorg" class="block text-gray-700 font-bold mb-2">Organisme :</label>
                    {!! Form::select('organisme', $organismes, null, [
                        'id' => 'idorg',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Sélectionner un organisme',
                    ]) !!}
                </div>

                <div class="mb-4">
                    <label for="president" class="block text-gray-700 font-bold mb-2">President des jurys:</label>
                    {!! Form::select('president', $professeurs, null, [
                        'id' => 'president',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'President des jurys',
                    ]) !!}
                </div>
                <div class="mb-4">
                    <label for="examinateur" class="block text-gray-700 font-bold mb-2">Professeur examinateur:</label>
                    {!! Form::select('examinateur', $professeurs, null, [
                        'id' => 'examinateur',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Un examinateur',
                    ]) !!}
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <label for="rapporteur_int" class="block text-gray-700 font-bold mb-2">Professeur rapporteur
                        interne:</label>
                    {!! Form::select('rapporteur_int', $professeurs, null, [
                        'id' => 'rapporteur_int',
                        'class' =>
                            'select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Un rapporteur interne',
                    ]) !!}
                </div>
                <div class="mb-4">
                    <label for="rapporteur_ext" class="block text-gray-700 font-bold mb-2">Professeur rapporteur
                        externe:</label>
                    {!! Form::select('rapporteur_ext', $professeurs, null, [
                        'id' => 'rapporteur_ext',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Un rapporteur externe',
                    ]) !!}
                </div>

                <div class="mb-4">
                    <label for="annee_univ" class="block text-gray-700 font-bold mb-2">Année universitaire:</label>
                    <select name="annee_univ"
                        class=" select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Sélectionner une année universitaire</option>
                        @php
                            $currentYear = date('Y');
                            $nextYear = $currentYear + 1;
                        @endphp
                        @for ($i = $currentYear; $i <= $nextYear + 10; $i++)
                            <option value="{{ $i }}-{{ $i + 1 }}">{{ $i }} -
                                {{ $i + 1 }}
                            </option>
                        @endfor
                    </select>
                </div>

                <div class="mb-4">
                    <label for="note" class="block text-gray-700 font-bold mb-2">Note :</label>
                    <input type="number" name="note" id="note"
                        class="block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        min="0" max="20" step="0.5" required>
                </div>

                <div class="flex  justify-between xl:justify-end space-x-3 ">
                    <button type="reset"
                        class="px-4 py-2 text-gray-700 border border-gray-500 rounded-md hover:bg-gray-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Réinitialiser</button>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
