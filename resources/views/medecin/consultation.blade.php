@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
    my-12 ">

        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Registre De Consultation Generale</h1>
        <form action="{{route('register')}}" method="post" class="flex flex-wrap relative w-full justify-between items-center">
            @csrf

{{--            PARTIE SYMPTOMES--}}
            <div class="w-[100%] mb-8" >
                <div class="flex flex-col">
                    <div class="mb-3 flex items-center gap-4">
                        <label for="sympt" class=" italic font-kanit"> Plaintes, Symptômes : </label>
                        <div>
                            <input type="text" id="sympt" placeholder="Préciser Un Symptômes" value=""
                               class="text-xs px-3 py-2 rounded-lg border border-gray-300 outline-none
                               focus:border-[#2ea8bf]
                               transition duration-100 ease">
                            <button class="text-xs px-3 py-2 rounded-lg bg-green-200" id="add-sympt">ajouter</button>
                        </div>
                    </div>
                    <ul class="flex flex-wrap gap-2 items-center text-xs mb-4" id="sympt-parent">
                        {{-- liste des symptomes saisi manuellement par le medecin est affichée ici a l'aide du js--}}
                    </ul>



{{--                    les symptomes les plus frequents chez les patients j'en ai selectionné 11--}}
                    <div class="text-xs flex flex-col gap-2" id="sympt-container">
                        <p class="font-kanit italic tracking-wide text-base text-amber-600">Les Plus Fréquents</p>
                        <div>
                            <input type="checkbox" name="symp1" id="sympt1" value="maux_de_tete">
                            <label for="sympt1">Maux de tête fréquents ou persistants.</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sympt2" id="sympt2" value="fatigue">
                            <label for="sympt2">Fatigue excessive.</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sympt3" id="sympt3" value="douleurs_articulaires">
                            <label for="sympt3">Douleurs articulaires ou musculaires.</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sympt4" id="sympt4" value="fievre">
                            <label for="sympt4">Fièvre inexpliquée.</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sympt5" id="sympt5" value="difficultes_respiratoires">
                            <label for="sympt5">Difficultés respiratoires.</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sympt6" id="sympt6" value="problemes_gastro_intestinaux">
                            <label for="sympt6">Problèmes gastro-intestinaux tels que nausées, vomissements, ou diarrhée.</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sympt7" id="sympt7" value="problemes_de_vision">
                            <label for="sympt7">Problèmes de vision ou changements dans la  vision.</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sympt8" id="sympt8" value="perte_de_poids">
                            <label for="sympt8">Perte de poids.</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sympt9" id="sympt9" value="vertiges">
                            <label for="sympt9">Vertiges ou étourdissements.</label>
                        </div>

                        <div>
                            <input type="checkbox" name="sympt10" id="sympt10" value="problemes_urinaires">
                            <label for="sympt10">Problèmes urinaires, tels que douleur en urinant ou changements dans la fréquence.</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sympt11" id="sympt11" value="sensations_de_picotements">
                            <label for="sympt11">Sensations de picotements, engourdissements ou faiblesse.</label>
                        </div>
                    </div>
                </div>
            </div>

{{--            PARTIE Autre Examen para clinique --}}
            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="exam" class="mb-2 italic font-kanit">Autre Examen para clinique : </label>
                    <select name="exam" id="exam" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                        <option value="M">Non</option>
                        <option value="F">Oui</option>
                    </select>
                </div>
            </div>


            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="ordonnance" class="mb-2 italic font-kanit">Traitement et ordonnances  : </label>
                    <select name="ordonnance" id="ordonnance" class="bg-green-50 grow px-4 py-2 rounded-lg text-[small]
                    border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                        <option value="M">Prescrire de médicaments</option>
                        <option value="F">Hospitaliser le patient</option>
                    </select>
                </div>
            </div>


            <div class="w-[100%] mb-8">
                <div class="flex flex-col">
                    <label for="diagnostic" class="mb-2 italic font-kanit"> Diagnostic : </label>
                    <textarea name="diagnostic" id="diagnostic" cols="30" rows="8" placeholder="Rédiger votre diagnostic ici !"
                    class="rounded-lg p-4 border  border-gray-300 outline-none bg-green-50 text-[small]
                    focus:border-[#2ea8bf] transition duration-100 ease"></textarea>
                </div>
            </div>

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="email" class="mb-2 italic font-kanit"> observation : </label>
                    <p class="font-kanit italic tracking-wide mb-1 text-xs text-amber-600">aimeriez-vous suivre le
                        patient ?</p>
                    <div>
                        <div class="mb-4">
                            <button class="text-xs px-2 py-2 mr-1 rounded-lg bg-green-200" id="obs1">
                                Oui
                            </button>
                            <button class="text-xs px-2 py-2 rounded-lg bg-green-200" id="obs2">
                                Non
                            </button>
                        </div>
                        <div id="obs-container">
                            {{--                            le input de prochain Rv est intégré directement a partir du javascript--}}
                            <input type="hidden" name="observation" value="patient no suivi.">
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4">
                    Valider la consultation
                </button>
            </div>
        </form>

    </section>

@endsection

