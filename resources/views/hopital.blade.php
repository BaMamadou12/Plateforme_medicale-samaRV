@extends("layout")

@section("section")
    <div>
        <div class="w-full  text-center">
            <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-10 mt-12 border-l-8 border-green-600
            px-8 py-2
            mx-auto inline-block">
                Liste Des Hôpitaux Du Sénégal
            </h1>
        </div>
    </div>
    <section class="w-10/12  min-h-[100vh] mx-auto p-8
        grid gap-8 grid-cols-3 grid-rows-3">
        {{--Villes : TAMBACOUNDA
            Nom : Hopital Régional Tambacounda
            Adresse	: Av Leopold Senghor,
            Telephone : 33 981 12 17
            email : --}}
        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hdd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]" >
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hld.png") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


        <div class="min-h-[300px] bg-white rounded-xl shadow-md overflow-hidden pt-4 pb-8 px-6">
            <img src="{{ asset("images/hpd.jpg") }}" alt="" class="rounded-lg mb-4 h-[190px]">
            <div class="mb-4">
                <h3 class="mb-2 px-2 border-l-4 border-green-600 font-bold text-sm"> Hopital Régional Tambacounda</h3>
                <p class="text-[small]"> Ville : <span class="text-gray-500">TAMBACOUNDA</span></p>
                <p class="text-[small]"> Adresse : <span class="text-gray-500">Av Leopold Senghor</span></p>
                <p class="text-[small]"> Tel : <span class="text-gray-500">33 981 12 17</span></p>
                <p class="text-[small]"> Médecin : <span class="text-gray-500">Abdoulaye Sow</span></p>
            </div>
            <button class="px-4 py-1.5 bg-green-500 rounded-lg">
                <a href="">Prenez Rendez-vous</a>
            </button>
        </div>


    </section>
    <section></section>
@endsection
