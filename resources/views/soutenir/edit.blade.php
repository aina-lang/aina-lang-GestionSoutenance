<x-app-layout>
    <div class="w-90 mx-auto overflow-x-auto  sm:ml-64 mb-10">
        <div class="logo">
            <h1 class="text-bold text-xl text-gray-900 font-bold  mb-9 xl:mb-0 xl:mt-2">modifiation de soutenance de
                {{ $soutenance->etudiants->nom . ' ' . $soutenance->etudiants->prenom }}</h1>
        </div>
        <form action="{{ route('soutenir.update', $soutenance) }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 grid xl:grid-cols-2 gap-10 justify-center p-4">
            @csrf
            @method('PATCH')
            <div>
                {{-- <div class="mb-4">
                    <label for="etudiant" class="block text-gray-700 font-bold mb-2">Étudiant :</label>
                    {!! Form::select('etudiant', $etudiants, null, [
                        'id' => 'etudiant',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Sélectionner un étudiant',
                    ]) !!}
                </div> --}}
                <div class="mb-4">
                    <label for="etudiant" class="block text-gray-700 font-bold mb-2">Etudiant :
                        <select name="etudiant" id=""
                            class="selecst block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $soutenance->etudiants->matricule }}">
                                {{ $soutenance->etudiants->nom . ' ' . $soutenance->etudiants->prenom }} </option>
                            @foreach ($etudiants as $matricule => $nomComplet)
                                <option value="{{ $matricule }}">{{ $nomComplet }}</option>
                            @endforeach
                        </select>
                </div>
                {{-- <div class="mb-4">
                    <label for="idorg" class="block text-gray-700 font-bold mb-2">Organisme :</label>
                    {!! Form::select('organisme', $organismes, null, [
                        'id' => 'idorg',
                        'class' =>
                            ' select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder' => 'Sélectionner un organisme',
                    ]) !!}
                </div> --}}
                <div class="mb-4">
                    <label for="organisme" class="block text-gray-700 font-bold mb-2">Organisme :
                        <select name="organisme" id=""
                            class="select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $organisme->idorg }}">{{ $organisme->design }} </option>
                            {{-- @foreach ($organismes as $et)
                                <option value="{{ $et }}">{{ $et }}</option>
                            @endforeach --}}
                            @foreach ($organismes as $id => $design)
                            <option value="{{ $id }}">{{ $design }}</option>
                        @endforeach
                        </select>
                </div>
                <div class="mb-4">
                    <label for="president" class="block text-gray-700 font-bold mb-2">President des juries :
                        <select name="president" id=""
                            class="selec1 block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $soutenance->presidents->id_prof }}">
                                {{ $soutenance->presidents->nom . ' ' . $soutenance->presidents->prenoms }} </option>
                            @foreach ($professeurs as $id => $nom)
                                <option value="{{ $id }}">{{ $nom }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-4">
                    <label for="examinateur" class="block text-gray-700 font-bold mb-2">Examinateur:
                        <select name="examinateur" id=""
                            class="select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $soutenance->examinateurs->id_prof }}">
                                {{ $soutenance->examinateurs->nom . ' ' . $soutenance->examinateurs->prenoms }} </option>
                            @foreach ($professeurs as $id => $nom)
                                <option value="{{ $id }}">{{ $nom }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <label for="rapp_int" class="block text-gray-700 font-bold mb-2"> Rapporteur interne:
                        <select name="rapp_int" id=""
                            class="select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $soutenance->rapporteur_ints->id_prof }}">
                                {{ $soutenance->rapporteur_ints->nom . ' ' . $soutenance->rapporteur_ints->prenoms }}
                            </option>
                            @foreach ($professeurs as $id => $nom)
                                <option value="{{ $id }}">{{ $nom }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-4">
                    <label for="rapp_ext" class="block text-gray-700 font-bold mb-2">Rapporteur externe:
                        <select name="rapp_ext" id=""
                            class="select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline
                    ">
                            <option value="{{ $soutenance->rapporteur_exts->id_prof }}">
                                {{ $soutenance->rapporteur_exts->nom . ' ' . $soutenance->rapporteur_exts->prenoms }}
                            </option>
                            @foreach ($professeurs as $id => $nom)
                                <option value="{{ $id }}">{{ $nom }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-4">
                    <label for="annee_univ" class="block text-gray-700 font-bold mb-2">Année universitaire:</label>
                    <select name="annee_univ"
                        class=" select block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="{{ $soutenance->annee_univ }}">{{ $soutenance->annee_univ }}</option>
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
                        min="0" max="20" step="0.5" required value="{{ $soutenance->note }}">
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
