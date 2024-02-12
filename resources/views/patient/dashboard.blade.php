
@extends("layout")

@section("section")
    @if(session('success'))
        <div class="mt-10 rounded-md bg-green-100 flex content-center min-w-3/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer">
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
    <section class="w-[60%] mx-auto mt-10">
        <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
            before:bg-amber-600 before:rounded-lg before:bottom-0">
            Mes Rendez-vous
        </h1>

        @if(count($info_rv) > 0)
            @foreach($info_rv as $info)
                <div class="relative bg-amber-200 rounded-xl p-4 text-[small] flex items-center gap-6 mb-6">
                    <!-- ... -->
                    <div>
                        <img src="{{ asset("images/logo_rv.png") }}" alt="" class="w-[70px]">
                    </div>
                    <div>
                        <p class="mb-4">
                            Votre rendez-vous, à l'hôpital <span class="font-bold">{{ $info->medecin->hopital->nom }}</span>
                            du date <span class="font-bold">{{explode(' ', $info->created_at)[0]}}</span> a été bien pris en compte.
                        </p>
                        <p class="mb-2"><span class="px-1 py-1 bg-amber-300 rounded ">RV N° :</span> <span class="font-semibold font-kanit tracking-widest">{{ $info->id }}</span></p>
                        <p class="mb-2"><span class="px-1 py-1 bg-amber-300 rounded ">Médecin :</span> <span class="font-semibold font-kanit tracking-widest">{{ $info->medecin->prenom }} {{ $info->medecin->nom }}</span></p>
                        <p class="mb-2">
                            <span class="px-1 py-1 bg-amber-300 rounded ">Heure de consultation :</span> <span class="font-semibold font-kanit tracking-widest">{{ $info->date }}  / {{ $info->heure }}</span>
                        </p>
                        <p class="mb-2"><span class="px-1 py-1 bg-amber-300 rounded ">Etat :</span> <span class="font-semibold font-kanit tracking-widest">{{ $info->statut }}</span></p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="bg-green-100 p-10 w-4/12 flex justify-center items-center rounded-xl">
                <a href="{{route('hopital')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a> 
            </div>
        @endif

        <div class="mt-24 mb-24">
            <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
            before:bg-green-600 before:rounded-lg before:bottom-0">
                Mes Consultations
            </h1>
{{--                 liste des consultation effectuer a travers le plateforme--}}
            @if(count($consultations) > 0)
                @foreach($consultations as $cons)
                    <div class="bg-green-200 rounded-xl p-4 mb-6 shadow-xs boder text-xs flex gap-4 items-center">
                        <div>
                            <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                                <g clip-rule="evenodd" fill="#333" fill-rule="evenodd"><path d="m14 4.18945h-1.9644c-2.20909 0-3.99996 1.79086-3.99996 4v28.00005c0 2.2091 1.79087 4 3.99996 4h20c2.2092 0 4-1.7909 4-4v-28.00005c0-2.20914-1.7908-4-4-4h-2.0356v.31055 1.00082.68863h2.0356c1.1046 0 2 .89543 2 2v28.00005c0 1.1045-.8954 2-2 2h-20c-1.1045 0-2-.8955-2-2v-28.00005c0-1.10457.8955-2 2-2h1.9644v-.68863-1.00082zm5 2h6v-.68863-1.00082-.31055h-6v.31055 1.00082z"/><path d="m14 15c0-.5523.4477-1 1-1h14c.5523 0 1 .4477 1 1s-.4477 1-1 1h-14c-.5523 0-1-.4477-1-1z"/><path d="m14.0356 20.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 25.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 30.2441c0-.5522.4478-1 1-1h8c.5523 0 1 .4478 1 1 0 .5523-.4477 1-1 1h-8c-.5522 0-1-.4477-1-1z"/><path d="m5.03565 8.95703c.55229 0 1 .44772 1 1l-.00001 27.04257c0 2.7614 2.23858 5 4.99996 5h19.0647c.5522 0 1 .4477 1 1 0 .5522-.4478 1-1 1h-19.0647c-3.86595 0-6.99996-3.1341-6.99996-7l.00001-27.04257c0-.55228.44772-1 1-1z"/><path d="m42 19h-2v15.3333l1 1.3334 1-1.3334zm2 16-3 4-3-4v-18h6z"/><path d="m42 12h-2v2h2zm-2-2h2c1.1046 0 2 .8954 2 2v4h-6v-4c0-1.1046.8954-2 2-2z"/><path d="m27.5 2c.8284 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6716 1.5-1.5 1.5s-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/><path d="m16.5085 2c.8285 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6715 1.5-1.5 1.5-.8284 0-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/></g></svg>
                        </div>
                        <div class=" text-[small]">
                            <p class="mb-4">
                                Vous avez été consulté(e) par le docteur <span class="font-semibold">{{$cons->medecin->prenom}} {{$cons->medecin->nom}}</span> du
                                Date
                                <span class="font-semibold">{{explode(' ', $cons->created_at)[0]}}</span>
                            </p>

                            <p class="mb-3">
                                <span class="px-1 py-1 bg-green-300 rounded">Vos Symptômes :</span>
                                <span class="font-semibold font-kanit tracking-widest leading-relaxed">
                                    {{$cons->plaintes_Symptomes}}
                                </span>
                            </p>

                            <p class=" mb-3">
                                <span class="px-1 py-1 bg-green-300 rounded">Traitement et ordonnances :</span> 
                                <span class="font-semibold font-kanit tracking-widest">
                                    {{$cons->traitement}}
                                </span>
                            </p>
                            <p class=" mb-3">
                                <span class="px-1 py-1 bg-green-300 rounded">Autre Examen para clinique :</span> <span class="font-semibold font-kanit tracking-widest"> {{$cons->autre_Examens_Para_Clinique}} </span>
                            </p>
                            <p class=" mb-3">
                                <span class="px-1 py-1 bg-green-300 rounded">Observation :</span> 
                                    @if($cons->observations == 'no')
                                        <span class="font-semibold font-kanit tracking-widest">pas de suivi</span>
                                    @else
                                        <span class="font-semibold font-kanit tracking-widest">
                                            Votre prochain rendez-vous : <span class="text-amber-700">{{$cons->observations}}</span>
                                        </span>
                                    @endif

                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="bg-green-100 px-6 py-10 w-4/12 flex justify-center items-center rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </div>
            @endif
        </div>
    </section>
@endsection
