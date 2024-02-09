@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
        my-12 ">
        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Formulaire de modification d'un hopital</h1>
        <form method="POST" action="{{route('admin.hopital.update',$hopital->id)}}" class="flex flex-wrap relative w-full justify-between items-center" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')

            <div class="w-[47%] mb-8" >
                <div class="flex flex-col">
                    <label for="nom" class="mb-2 text-[small]"> nom : </label>
                    <input type="text" name="nom" id="nom" placeholder="votre nom" value="{{ $hopital->nom }}"
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

                    <label for="adresse" class="mb-2 text-[small]"> Adresse : </label>
                    <input type="text" name="adresse" id="adresse" placeholder="Adresse"  value="{{$hopital->adresse}}"
                      class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('adresse')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div>

            {{-- <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="region" class="mb-2 text-[small]"> Région : </label>
                    <input type="text" name="region" id="region" placeholder="Région"  value="{{ @old('region')
                     }}" class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('region')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div> --}}

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">

                    <label for="adresse" class="mb-2 text-[small]"> Ville : </label>
                    <input type="text" name="ville" id="ville" placeholder="Adresse"  value="{{$hopital->ville}}" 
                    class="bg-green-50 grow px-4 py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('ville')

                <div class="text-red-800 text-[small] mt-2">saisissez votre prénom</div>

                @enderror

            </div>



            

            <div class="w-[47%] mb-8 ">
                <div class="flex flex-col">
                    <label for="email" class="mb-2 text-[small]"> email : </label>
                    <input type="email" name="email" id="email" placeholder="exemple@gmail.com"  value="{{$hopital->email}}" 
                    class="bg-green-50 grow px-4 py-2 rounded-lg text-[small] border  border-gray-300 outline-none focus:border-[#2ea8bf]
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

                    <input type="text" name="tel" id="tel" placeholder="ex: 786211297"  value="{{$hopital->telephone}}"
                           class="bg-green-50 grow px-4
                    py-2 rounded-lg text-[small] border border-gray-300 outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>

                @error('tel')
                    
                @enderror
            </div>

            <div class="w-[47%] mb-8">
                <div class="flex flex-col">
                    <label for="img" class="mb-2 text-[small]"> image : </label>

                    <input type="file" name="image" id="img"  accept="images/*" value=""
                           class="border bg-green-50 px-1 py-2 rounded text-xs outline-none focus:border-[#2ea8bf] transition
                    duration-100 ease">
                </div>
                @error('image')
                    <div class="text-red-800 text-[small] mt-2">image requis</div>
                @enderror
            </div>

            

            <div class="mt-4 w-full flex justify-center">
                <button class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>
        </form>

    </section>

@endsection