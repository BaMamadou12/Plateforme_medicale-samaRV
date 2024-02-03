@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
    my-12 ">

        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Formulaire d'ajout d'un médecin</h1>
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

                    <label for="prenom" class="mb-2 text-[small]"> spécialié : </label>
                    <input type="text" name="specialite" id="specialite" placeholder="Spécialité"  value="{{ @old('specialite')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('specialite')

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
                    <label for="dispo" class="mb-2 text-[small]"> disponiblité : </label>
                    <select name="disponibilite" id="dispo" value="{{@old('sexe')}}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                        <option value="1">oui</option>
                        <option value="0">non</option>
                    </select>
                </div>
                @error('disponibilite')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div>

            

            

            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>
        </form>

    </section>

@endsection