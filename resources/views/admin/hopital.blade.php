@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
    my-12 ">

        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Formulaire d'ajout d'un hopital</h1>
        <form action="{{route('admin.addhopital')}}" method="post" class="flex flex-wrap relative w-full justify-between items-center" enctype="multipart/form-data">
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

                <div class="text-red-800 text-[small] mt-2">saisissez le nom</div>

                @enderror

            </div>


            <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="adresse" class="mb-2 text-[small]"> Adresse : </label>
                    <input type="text" name="adresse" id="adresse" placeholder="Adresse"  value="{{ @old('prenom')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('adresse')

                <div class="text-red-800 text-[small] mt-2">saisissez son adresse</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="region" class="mb-2 text-[small]"> Région : </label>
                    <input type="text" name="region" id="region" placeholder="Région"  value="{{ @old('region')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('region')

                <div class="text-red-800 text-[small] mt-2">saisissez sa région</div>

                @enderror

            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="adresse" class="mb-2 text-[small]"> Ville : </label>
                    <input type="text" name="ville" id="ville" placeholder="Ville"  value="{{ @old('ville')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('ville')

                <div class="text-red-800 text-[small] mt-2">saisissez sa ville</div>

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

                    <input type="text" name="telephone" id="tel" placeholder="ex: 786211297"  value="{{ @old('telephone') }}"
                           class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>

                @error('telephone')
                <div class="text-red-800 text-[small] mt-2">le numero de téléphone est obligatoire</div>
                @enderror
            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="img" class="mb-2 text-[small]"> image : </label>

                    <input type="file" name="image" id="img"  accept="images/*" value="{{ @old('image') }}"
                           class="border bg-green-50 px-1 py-2 rounded text-xs outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('image')
                    <div class="text-red-800 text-[small] mt-2">confirmation de votre mot de passe</div>
                @enderror
            </div>









            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>
        </form>

    </section>

@endsection
