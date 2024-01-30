@extends("layout")

@section("section")
        <div class="w-full  flex justify-center items-center flex-col">

            <div class="mt-12">
                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                     class="w-16" >
                    <path d="m483.114 208.091h-334.059c-7.953 0-14.4 6.447-14.4 14.4v80.147h-100.586c-7.953 0-14.4 6.447-14.4 14.4v165.562c0 7.953 6.447 14.4 14.4 14.4h114.987 219.072 114.987c7.953 0 14.4-6.447 14.4-14.4v-260.109c-.001-7.953-6.449-14.4-14.401-14.4z" fill="#afc1c9"/>
                    <path d="m498.737 188.996h-284.036c-3.976 0-7.2 3.224-7.2 7.2v16.99c0 4.697 3.808 8.505 8.505 8.505h281.427c4.697 0 8.505-3.808 8.505-8.505v-16.99c-.001-3.976-3.224-7.2-7.201-7.2z" fill="#95aaad"/>
                    <path d="m18.445 279.932h284.037c3.976 0 7.2 3.224 7.2 7.2v16.99c0 4.697-3.808 8.505-8.505 8.505h-281.427c-4.697 0-8.505-3.808-8.505-8.505v-16.99c0-3.977 3.224-7.2 7.2-7.2z" fill="#95aaad"/>
                    <path d="m316.414 30.003h-257.715c-4.162 0-7.536 3.994-7.536 8.92v449.157c0 4.926 3.374 8.92 7.536 8.92h257.715c4.162 0 7.536-3.994 7.536-8.92v-449.157c0-4.926-3.374-8.92-7.536-8.92z" fill="#cfdbe2"/>
                    <path d="m234.917 113.538h-33.14v-33.14c0-3.976-3.224-7.2-7.2-7.2h-14.04c-3.976 0-7.2 3.224-7.2 7.2v33.14h-33.14c-3.976 0-7.2 3.224-7.2 7.2v14.04c0 3.976 3.224 7.2 7.2 7.2h33.14v33.14c0 3.977 3.224 7.2 7.2 7.2h14.04c3.976 0 7.2-3.224 7.2-7.2v-33.14h33.14c3.976 0 7.2-3.224 7.2-7.2v-14.04c0-3.977-3.223-7.2-7.2-7.2z" fill="#ff473e"/>
                    <path d="m463.893 368.367h-105.778c-3.976 0-7.2-3.224-7.2-7.2v-42.429c0-3.976 3.224-7.2 7.2-7.2h105.779c3.976 0 7.2 3.224 7.2 7.2v42.429c-.001 3.976-3.224 7.2-7.201 7.2zm8.439 81.968v-42.429c0-3.976-3.224-7.2-7.2-7.2h-108.256c-3.976 0-7.2 3.224-7.2 7.2v42.429c0 3.976 3.224 7.2 7.2 7.2h108.256c3.977-.001 7.2-3.224 7.2-7.2zm0-181.17v-14.015c0-3.976-3.224-7.2-7.2-7.2h-108.256c-3.976 0-7.2 3.224-7.2 7.2v14.015c0 3.976 3.224 7.2 7.2 7.2h108.256c3.977 0 7.2-3.224 7.2-7.2z" fill="#0096d1"/>
                    <path d="m100.843 421.106h173.427v75.894h-173.427z" fill="#2b3b47"/>
                    <path d="m205.639 368.367h-35.71c-3.976 0-7.2-3.224-7.2-7.2v-44.863c0-3.976 3.224-7.2 7.2-7.2h35.71c3.976 0 7.2 3.224 7.2 7.2v44.863c0 3.976-3.223 7.2-7.2 7.2zm85.161-7.2v-44.863c0-3.976-3.224-7.2-7.2-7.2h-35.71c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h35.71c3.976 0 7.2-3.224 7.2-7.2zm-155.921 0v-44.863c0-3.976-3.224-7.2-7.2-7.2h-35.71c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h35.71c3.977 0 7.2-3.224 7.2-7.2zm-19.774-92.002v-44.863c0-3.976-3.224-7.2-7.2-7.2h-15.936c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h15.936c3.977 0 7.2-3.224 7.2-7.2zm58.565 0v-44.863c0-3.976-3.224-7.2-7.2-7.2h-15.936c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h15.936c3.977 0 7.2-3.224 7.2-7.2zm58.565 0v-44.863c0-3.976-3.224-7.2-7.2-7.2h-15.936c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h15.936c3.976 0 7.2-3.224 7.2-7.2zm58.565 0v-44.863c0-3.976-3.224-7.2-7.2-7.2h-15.936c-3.976 0-7.2 3.224-7.2 7.2v44.863c0 3.976 3.224 7.2 7.2 7.2h15.936c3.976 0 7.2-3.224 7.2-7.2z" fill="#00b1ff"/>
                    <path d="m274.27 429.12h-173.427v-8.22c0-5.442 4.412-9.854 9.854-9.854h153.718c5.442 0 9.854 4.412 9.854 9.854v8.22z" fill="#67747c"/>
                    <path d="m329.803 20.062h-284.037c-3.976 0-7.2 3.224-7.2 7.2v16.99c0 4.697 3.808 8.505 8.505 8.505h281.427c4.697 0 8.505-3.808 8.505-8.505v-16.99c0-3.977-3.224-7.2-7.2-7.2z" fill="#95aaad"/>
                </svg>
            </div>

            <div class="flex items-center">
                <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-6 mt-2
                px-4 py-2">
                    Liste Des Hôpitaux Du Sénégal
                </h1>
                <img src="{{ asset("images/sn.jpg") }}" alt="" class="w-10 rounded relative right-1 top-[-7px] ">
            </div>

            <div class="w-1/2 mb-12">
                <form action="#" class="w-full relative mb-3" method="get" >
                    <input type="text" name="" id="" placeholder="Recherche rapide"
                           class="px-4 py-3 w-full rounded-lg pl-10 bg-[#fbfcfc] outline-none border
                           focus:border-green-300 text-sm shadow-sm shadow-green-100">

                    <button class="absolute left-3 top-3" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>

                <div class="flex mt-8 gap-2 items-center justify-center">
                    <h3 class="flex items-center gap-2 mr-4 font-kanit px-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-3 h-3">
                            <path d="M14 2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v2.172a2 2 0 0 0 .586 1.414l2.828 2.828A2 2 0 0 1 6 9.828v4.363a.5.5 0 0 0 .724.447l2.17-1.085A2 2 0 0 0 10 11.763V9.829a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 0 14 4.172V2Z" />
                        </svg>
                        filtrage :
                    </h3>
                    <form action="" method="get" id="filter" >
                        <select name="" id="" onchange="f()" class="px-4 py-1.5 rounded bg-green-100 text-xs">
                            <option value="">Filtrer par région</option>
                            <option value="Dakar">Dakar</option>
                            <option value="Thies">Thies</option>
                            <option value="Diourbel">Diourbel</option>
                            <option value="Louga">Louga</option>
                            <option value="Saint-Louis">Saint Louis</option>
                            <option value="Fatick">Fatick</option>
                            <option value="Kaolack">Kaolack</option>
                            <option value="Kaffrine">Kaffrine</option>
                            <option value="Ziguinchor">Ziguinchor</option>
                            <option value="Kolda">Kolda</option>
                            <option value="Sedhiou">Sedhiou</option>
                            <option value="Matam">Matam</option>
                            <option value="Tambacounda">Tambacounda</option>
                            <option value="Kédougou">Kédougou</option>
                        </select>
                    </form>
                    <form action="" method="get">
                        <button type="submit" class="px-4 py-1.5 rounded bg-green-100 text-xs">par nom</button>
                    </form>
                    <form action="">
                        <button type="submit" class="px-4 py-1.5 rounded bg-green-100 text-xs">par ville</button>
                    </form>
                </div>
            </div>
        </div>


    <div class="bg-green-100">

    </div>
    <section class="w-[80%]  min-h-[100vh] mx-auto p-4 grid gap-6 grid-cols-3 grid-rows-3 ">

        {{-- debut  de la liste des hopitaux--}}
        @foreach($request as $info)
        <div class="min-h-[300px] bg-[#fefefe] rounded-xl shadow-md overflow-hidden pt-2 pb-4 px-3">
            <img src="{{ asset("images/hdd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]" >
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-medium  italic font-kanit">
                    {{$info->nom}}
                </h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500 text-[small]">{{$info->ville}}</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500
                text-[small]">{{$info->adresse}}</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500 text-[small]">{{$info->telephone}}</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500 text-[small]">{{ $info->medecin->prenom }}  {{ $info->medecin->nom }}</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-200 rounded-lg text-xs hover:bg-green-300 transition
            duration-100 ease-in-out">
                <?php $id_medecin=$info->medecin->id ?>
                <a href="{{route("rv",compact('id_medecin'))}}">Prenez Rendez-vous</a>
            </button>
        </div>
        @endforeach

  {{--  fin de la liste des hopitaux--}}



    </section>

@endsection
