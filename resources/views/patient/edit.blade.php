@extends('layout')

@section('section')
    <section class="p-6 min-h-screen w-7/12 mx-auto relative">
        <div class=" border p-6 rounded-lg bg-white my-shadow">
            <div class="flex gap-3 flex-col items-center justify-center">
                <div class="border w-28 h-28 flex items-center justify-center rounded-full bg-gray-300">
                    <img src="{{asset('images/user.png')}}" class="w-16 h-16">
                </div>
                <div class="mb-4">
                    <h3 class="text-3xl font-medium font-kanit text-center">{{$patient->prenom }}</h3>
                    <p class="text-center">{{$patient->email}}</p>
                </div>
            </div>
            <div class="flex gap-2 tt justify-center items-center">
                <button class="px-6 py-2 rounded bg-green-200 text-xs" id="btn-profile">editer votre profile</button>
                <button class="px-6 py-2 rounded bg-green-200 text-xs" id="btn-password">changer votre mot de passe</button>
            </div>
            <div id="profile-container">

            </div>
        </div>

    </section>

    <template id="edit-profile">
            <div class="mb-8 mt-6 border-t pt-4 flex items-center justify-between">
                <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
                before:bg-green-600 before:rounded-lg before:bottom-0">
                Editer Votre profile
                </h1>
                <div class="p-2 rounded-full hover:bg-[#efefef] cursor-pointer" id="profile-closer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg>
                </div>
            </div>
            <form action="{{route('patient.update' ,Auth::guard('web')->user()->id)}}" method="post" class="flex flex-wrap relative w-full justify-between items-center">
                @csrf
                @method('put')
                <div class="w-[47%] mb-8" >
                    <div class="flex flex-col">
                        <label for="nom" class="mb-2 text-xs"> nom : </label>
                        <input type="text" name="nom" id="nom" placeholder="votre nom" value="{{$patient->nom }}"
                            class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="w-[47%] mb-8">
                    <div class="flex flex-col">
                        <label for="prenom" class="mb-2 text-xs"> prénom : </label>
                        <input type="text" name="prenom" id="prenom" placeholder="votre prenom"  value="{{ $patient->prenom}}"
                        class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>

                </div>

                <div class="w-[47%] mb-8 ">
                    <div class="flex flex-col">
                        <label for="email" class="mb-2 text-xs"> email : </label>
                        <input type="email" name="email" id="email" placeholder="exemple@gmail.com"  value="{{ $patient->email }}"
                        class="bg-gray-50 grow px-4 py-2 rounded text-[small] border  border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="w-[47%] mb-8">
                    <div class="flex flex-col">
                        <label for="adresse" class="mb-2 text-xs"> adresse : </label>
                        <input type="text" name="adresse" id="adresse" placeholder="votre adresse"  value="{{ $patient->adresse }}"
                        class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="w-[47%] mb-8">
                    <div class="flex flex-col">
                        <label for="tel" class="mb-2 text-xs"> téléphone : </label>
                        <input type="text" name="tel" id="tel" placeholder="ex: 786211297"  value="{{$patient->tel }}"
                            class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                                duration-100 ease">
                    </div>
                </div>

                <div class="w-[47%] mb-8">
                    <div class="flex flex-col">
                        <label for="date" class="mb-2 text-xs"> date de naiss : </label>

                        <input type="date" name="date" id="date" value="{{$patient->date }}"
                        class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="w-[47%] mb-8 ">
                    <div class="flex flex-col">
                        <label for="lieux" class="mb-2 text-xs"> lieux de naissance : </label>

                        <input type="text" name="lieux" id="lieux" placeholder="ex : Touba"  value="{{$patient->lieux}}"
                            class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="mt-4 w-full flex justify-center">
                    <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> Editer</button>
                </div>
            </form>
    </template>

    <template id="edit-password">
            <div class="mb-8 mt-6 border-t pt-4 flex items-center justify-between">
                <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
                     before:bg-green-600 before:rounded-lg before:bottom-0">
                    changer votre mot de passe
                </h1>
                <div class="p-2 rounded-full hover:bg-[#efefef] cursor-pointer" id="profile-closer">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg>
                </div>
            </div>
            <form action="{{route('changer.password',Auth::guard('web')->user()->id)}}" method="post" class="flex flex-col flex-wrap relative w-full justify-between items-center">
                @csrf
              @method('put')
                <div class="w-[80%] mb-8 ">
                    <div class="flex flex-col">
                        <label for="password" class="mb-2 text-[small]"> nouveau mot de passe : </label>
                        <input type="password" name="password" id="password" placeholder="créer un mot de passe puissant"
                               class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="w-[80%] mb-8 ">
                    <div class="flex flex-col">
                        <label for="confirm" class="mb-2 text-[small]"> répéter le mot de passe : </label>
                        <input type="password" name="password_confirmation" id="confirm" placeholder="confirmer le mot de passe"
                               class="bg-gray-50 grow px-4 py-2 rounded text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                    </div>
                </div>

                <div class="mt-4 w-full flex justify-center">
                    <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> Editer</button>
                </div>
            </form>
    </template>

@endsection




