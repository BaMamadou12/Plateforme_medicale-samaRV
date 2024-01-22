@extends("layout")

@section("section")

    <section class="min-h-full w-8/12 mx-auto relative p-8 flex justify-center flex-col my-12 bg-white rounded-lg shadow-md">

        <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-12">Formulaire de d'inscription</h1>
        <form action="{{route('register')}}" method="post" class="flex flex-wrap relative w-full justify-between items-center">
            @csrf

            <div class="w-[47%] mb-10" >
                <div class="flex justify-between items-center ">
                    <label for="nom" class="mr-2"> nom : </label>
                    <input type="text" name="nom" id="nom" placeholder="votre nom" value="{{ @old('nom') }}" class="bg-gray-100 grow px-4 py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('nom')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="w-[47%] mb-10">
                <div class="flex justify-between items-center">

                    <label for="prenom" class="mr-2"> prenom : </label>
                    <input type="text" name="prenom" id="prenom" placeholder="votre prenom"  value="{{ @old('prenom') }}" class="bg-gray-100 grow px-4
                    py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('prenom')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="w-[47%] mb-10 ">
                <div class="flex justify-between items-center">
                    <label for="email" class="mr-2"> email : </label>
                    <input type="email" name="email" id="email" placeholder="exemple@gmail.com"  value="{{ @old('email') }}" class="bg-gray-100 grow
                    px-4 py-1.5 rounded border  border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('email')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="w-[47%] mb-10 ">
                <div class="flex justify-between items-center">
                    <label for="password" class="mr-2"> mot de passe : </label>
                    <input type="password" name="password" id="password" placeholder="créer un mot de passe puissant"
                           class="bg-gray-100 grow px-4 py-1.5 rounded border border-gray-300 outline-none
                    focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('password')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="w-[47%] mb-10 ">
                <div class="flex justify-between items-center">
                    <label for="confirm" class="mr-2"> confirmation : </label>

                    <input type="password" name="password_confirmation" id="confirm" placeholder="confirmer le mot de passe"
                           class="bg-gray-100 grow px-4 py-1.5 rounded border border-gray-300 outline-none
                       focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('password_confirmation')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror


            </div>

            <div class="w-[47%] mb-10">
                <div class="flex justify-between items-center">
                    <label for="adresse" class="mr-2"> adresse : </label>

                    <input type="text" name="adresse" id="adresse" placeholder="votre adresse"  value="{{ @old('adresse') }}" class="bg-gray-100 grow
                    px-4 py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('adresse')

              <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror


            </div>

            <div class="w-[47%] mb-10">
                <div class="flex justify-between items-center">
                    <label for="tel" class="mr-2"> telephone : </label>

                    <input type="text" name="tel" id="tel" placeholder="ex: 78 621 12 97"  value="{{ @old('tel') }}" class="bg-gray-100 grow px-4
                    py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('tel')

              <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror


                </div>

            <div class="w-[47%] mb-10">
                <div class="flex justify-between items-center">
                    <label for="date" class="mr-2"> date de naiss : </label>

                    <input type="date" name="date" id="date" value="{{ @old('date') }}" class="bg-gray-100 grow px-4 py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('date')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="w-[60%] mb-10 ">
                <div class="flex justify-between items-center">
                    <label for="lieux" class="mr-2"> lieux de naissance : </label>

                    <input type="text" name="lieux" id="lieux" placeholder="ex : Touba"  value="{{ @old('lieux') }}" class="bg-gray-100 grow px-4 py-1.5
                    rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
                </div>
                @error('lieux')

                <div class="text-red-800 text-[small] mt-2">champ required</div>

                @enderror

            </div>

            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>
    </form>

    </section>

@endsection
