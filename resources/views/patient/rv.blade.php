
@extends('layout')

@section('section')
    <section class="w-8/12 mx-auto mb-10">
        <?php   ;?>

        <div>
            {{-- Gerer les messages de retour apres la saisi des rv --}}
            @if(session('success'))
                <div class="mt-10 rounded-md bg-green-50 flex content-center w-2/3 mx-auto  p-4" id="closer">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(session('errors'))
                <div class="mt-10 rounded-md bg-red-400 flex content-center w-2/3 mx-auto  p-4" id="closer">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('errors') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(session('nombreAtteint'))
                <div class="mt-10 rounded-md bg-red-400 flex content-center w-2/3 mx-auto  p-4" id="closer">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('nombreAtteint') }}</p>
                        </div>
                    </div>
                </div>

            @endif
            {{--FIN DE  LA GESTION DES MESSAGES DES RV --}}
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-green-600
                px-6 py-2 mx-auto inline-block">
                Aujourd'hui
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">il y'a encore de place libre pour aujourd'hui</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>
                <form action="{{route('rv_today',compact('id_medecin'))}}" method="post">
                    @csrf
                    <input type="hidden" name="id_medecin" value="{{ $id_medecin }}">
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="crenaux" value="matin"  id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="soir">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="crenaux"  value="soir"  id="soir" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>


            </div>
        </div>


        <div>
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-gray-300
                px-6 py-2 mx-auto inline-block">
                Demain
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">il y'a encore de place libre pour Demain</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>


                <form action="{{ route('rv_demain', compact('id_medecin')) }}" method="post">

                @csrf
                    <input type="hidden" name="id_medecin" value="{{ $id_medecin }}">

                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="crenaux"  value="matin" id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="soir">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="crenaux" value="soir"  id="soir" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>
            </div>
        </div>

        <div>
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-gray-300
                px-6 py-2 mx-auto inline-block">
                Après Demain
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">Il y a encore de place libre pour Après Demain</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>
                <form action=" {{route('rv_apres',compact('id_medecin'))}}" method="post">
                    @csrf
                    <input type="hidden" name="id_medecin" value="{{ $id_medecin }}">
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="crenaux" value="matin" id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="soir">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="crenaux" value="soir" id="soir" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>
            </div>
        </div>



    </section>
@endsection
