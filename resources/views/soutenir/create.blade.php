<x-app-layout>
    <div class="w-full max-w-xs mx-auto">
        <form action="{{ route('soutenir.store') }}" method="POST"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="etudiant" class="block text-gray-700 font-bold mb-2">Étudiant :</label>
                {!! Form::select('etudiant', $etudiants, null, [
                    'id' => 'etudiant',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'Sélectionner un étudiant',
                ]) !!}
            </div>

            <div class="mb-4">
                <label for="idorg" class="block text-gray-700 font-bold mb-2">Organisme :</label>
                {!! Form::select('organisme', $organismes, null, [
                    'id' => 'idorg',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'Sélectionner un organisme',
                ]) !!}
            </div>

            <div class="mb-4">
                <label for="president" class="block text-gray-700 font-bold mb-2">President des jurys:</label>
                {!! Form::select('president', $professeurs, null, [
                    'id' => 'president',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'President des jurys',
                ]) !!}
            </div>
            <div class="mb-4">
                <label for="examinateur" class="block text-gray-700 font-bold mb-2">Professeur examinateur:</label>
                {!! Form::select('examinateur', $professeurs, null, [
                    'id' => 'examinateur',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'Un examinateur',
                ]) !!}
            </div>
            <div class="mb-4">
                <label for="rapporteur_int" class="block text-gray-700 font-bold mb-2">Professeur rapporteur interne:</label>
                {!! Form::select('rapporteur_int', $professeurs, null, [
                    'id' => 'id_prof',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'Un rapporteur interne',
                ]) !!}
            </div>
            <div class="mb-4">
                <label for="rapporteur_ext" class="block text-gray-700 font-bold mb-2">Professeur rapporteur externe:</label>
                {!! Form::select('rapporteur_ext', $professeurs, null, [
                    'id' => 'rapporteur_ext',
                    'class' =>
                        'block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder' => 'Un rapporteur externe',
                ]) !!}
            </div>

            <div class="mb-4">
                <select name="annee_univ"
                    class="block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Sélectionner une année universitaire</option>
                    @php
                        $currentYear = date('Y');
                        $nextYear = $currentYear + 1;
                    @endphp
                    @for ($i = $currentYear; $i <= $nextYear+10; $i++)
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
                    min="0" max="20" step="0.01" required>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer</button>
            </div>
        </form>

    </div>
</x-app-layout>
