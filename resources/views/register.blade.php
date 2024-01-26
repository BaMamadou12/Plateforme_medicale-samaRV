
@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
    my-12 ">

        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Formulaire d'inscription</h1>
        <form action="{{route('register')}}" method="post" class="flex flex-wrap relative w-full justify-between items-center">
            @csrf

            <div class="w-[47%] mb-8" >
                <div class="flex flex-col">
                    <label for="nom" class="mb-2 text-[small]"> nom : </label>
                    <input type="text" name="nom" id="nom" placeholder="votre nom" value="{{ @old('nom') }}"
                           class="bg-green-50 grow px-4 py-2 rounded-lg text-[small] border border-gray-300
                           outline-none
                           focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('nom')

                <div class="text-red-800 text-[small] mt-2">saisissez votre nom</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="prenom" class="mb-2 text-[small]"> prénom : </label>
                    <input type="text" name="prenom" id="prenom" placeholder="votre prenom"  value="{{ @old('prenom')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('prenom')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="sexe" class="mb-2 text-[small]"> Sexe : </label>
                    <select name="sexe" id="sexe" value="{{@old('sexe')}}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </div>
                @error('prenom')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="email" class="mb-2 text-[small]"> email : </label>
                    <input type="email" name="email" id="email" placeholder="exemple@gmail.com"  value="{{ @old
                    ('email') }}" class="bg-green-50 grow
                    px-4 py-2 rounded-lg text-[small] border  border-gray-300 outline-none focus:border-[#2ea8bf]
                    transition
                    duration-100 ease">
                </div>
                @error('email')

                <div class="text-red-800 text-[small] mt-2">l'e-mail est  requiris</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="password" class="mb-2 text-[small]"> mot de passe : </label>
                    <input type="password" name="password" id="password" placeholder="créer un mot de passe puissant"
                           class="bg-green-50 grow px-4 py-2 rounded-lg text-[small] border border-gray-300
                           outline-none
                    focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('password')
                <div class="text-red-800 text-[small] mt-2">champ required</div>

                <div class="text-red-800 text-[small] mt-2">votre mot de pass doit contenir au moins 8 caracteres</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="confirm" class="mb-2 text-[small]"> confirmation : </label>

                    <input type="password" name="password_confirmation" id="confirm" placeholder="confirmer le mot de passe"
                           class="bg-green-50 grow px-4 py-2 rounded-lg text-[small] border border-gray-300
                           outline-none
                       focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('password_confirmation')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror


            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="adresse" class="mb-2 text-[small]"> adresse : </label>

                    <input type="text" name="adresse" id="adresse" placeholder="votre adresse"  value="{{ @old
                    ('adresse') }}" class="bg-green-50 grow
                    px-4 py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf]
                    transition
                    duration-100 ease">
                </div>
                @error('adresse')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror


            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="tel" class="mb-2 text-[small]"> téléphone : </label>

                    <input type="text" name="tel" id="tel" placeholder="ex: 786211297"  value="{{ @old('tel') }}"
                           class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('tel')

                <div class="text-red-800 text-[small] mt-2">confirmation de votre mot de passe</div>

                @enderror


            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="date" class="mb-2 text-[small]"> date de naiss : </label>

                    <input type="date" name="date" id="date" value="{{ @old('date') }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('date')

                <div class="text-red-800 text-[small] mt-2">saississez votre date de naissance</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="lieux" class="mb-2 text-[small]"> lieux de naissance : </label>

                    <input type="text" name="lieux" id="lieux" placeholder="ex : Touba"  value="{{ @old('lieux') }}"
                           class="bg-green-50 grow px-4 py-2
                    rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100
                    ease">
                </div>
                @error('lieux')

                <div class="text-red-800 text-[small] mt-2">saissisz votre lieu de naissance</div>

                @enderror

            </div>

            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>
        </form>

    </section>

@endsection


