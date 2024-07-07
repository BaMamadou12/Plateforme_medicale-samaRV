@extends("layout")

@section("section")

    <section class="min-h-full w-7/12 mx-auto relative p-8 flex justify-center  bg-green-100 rounded-lg flex-col
    my-12 ">

        <h1 class="text-3xl font-kanit italic tracking-wide mb-12">Demande de prise en charge medical</h1>
        <form action="{{route('d.store')}}" method="post" class="flex flex-col relative w-full justify-between items-center" enctype="multipart/form-data">
            @csrf

            <div class="w-full mb-10" >
                <h1 class="text-3xl font-kanit">Demandeur : {{ Auth::guard('web')->user()->prenom. " " . Auth::guard('web')->user()->nom }}</h1>
            </div>

            <input type="hidden" name="id_patient" value="{{ Auth::guard('web')->user()->id }}">
            
            <div class="w-full mb-8">
              <h1 class="text-xl font-kanit mb-4">Votre carte nationale d’identité</h1>
              <div class="flex flex-col">
                  <label for="img" class="mb-2 text-sm font-medium"> Recto : </label>

                  <input type="file" name="card_recto" id="img"  accept="images/*" value="{{ @old('image') }}"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                  outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
              </div>
              <div class="flex flex-col">
                  <label for="img" class="mb-2 text-sm font-medium"> Verso : </label>

                  <input type="file" name="card_verso" id="img"  accept="images/*" value="{{ @old('image') }}"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                  outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
              </div>
            </div>
          <div class="w-full mb-8">
            <div class="flex flex-col">
                <label for="domicile" class="mb-2 text-xl font-kanit"> Votre certificat de domicile : </label>

                <input type="file" name="domicile" id="domicile"  accept="images/*" value="{{ @old('image') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
            </div>
          </div>

          
          <div class="w-full mb-8">
            <div class="flex flex-col">
                <label for="dossier_medical" class="mb-2 text-xl font-kanit"> Votre dossier médical : </label>

                <input type="file" name="dossier_medical" id="img"  accept="images/*" value="{{ @old('image') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
            </div>
          </div>

          <div class="w-full mb-8">
            <label for="cout" class="block mb-2 text-xl font-kanit">devis du coût du traitement</label>
            <input type="number" placeholder="ex: 250 000 FCFA" value="{{@old('email')}}" name="cout" id="cout" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
            outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
          </div>
          <p class="text-red-700 mb-4">Veillez ne pas remplir le formulaire si vous n'etes pas un habitant de la ville de Dakar</p>
          <div class="mt-4 w-full flex justify-center">
              <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> Valider la demande</button>
          </div>  
        </form>

    </section>

@endsection


