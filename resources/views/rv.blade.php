@extends('layout')

@section('section')
    <section class="w-8/12 mx-auto mb-10">

        <div>
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-green-600
                px-6 py-2 mx-auto inline-block">
                Aujourd'hui
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">il y'a encore de place libre pour aujourd'hui</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>
                <form action="">
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="matin" id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="matin" id="matin" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>
            </div>
        </div>


        <div>
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-gray-300
                px-6 py-2 mx-auto inline-block">
                Demain
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">il y'a encore de place libre pour Demain</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>
                <form action="">
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="matin" id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="matin" id="matin" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>
            </div>
        </div>

        <div>
            <h1 class="text-2xl font-bold font-kanit italic tracking-wide  mt-12 border-l-8 border-gray-300
                px-6 py-2 mx-auto inline-block">
                Après Demain
            </h1>
            <p class="mb-6 pl-8 text-emerald-700 text-[small]">Il y a encore de place libre pour Après Demain</p>
            <div class="w-full p-8 bg-white rounded-2xl mb-4 shadow-md">
                <div class="mb-4">
                    <h1 class="text-xl font-bold font-kanit">Les Horaires : </h1>
                    <p class="text-[small]">Sur quel interval aimeriez vous prendre un RV ? </p>
                </div>
                <form action="">
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Matin : 8h 00 - 14h 00 </label>
                        <input type="radio" name="matin" id="matin"  class="w-4">
                    </div>
                    <div class="w-full flex justify-between py-3 px-4 bg-green-50 rounded-lg mb-4">
                        <label for="matin">Soir : 15h 00 - 17h 00</label>
                        <input type="radio" name="matin" id="matin" class="w-4">
                    </div>

                    <button type="submit" class="px-8 py-2 bg-green-200 rounded-lg mt-4 transition-all duration-100
                     ease-in hover:bg-green-400">
                        valider votre RV
                    </button>
                </form>
            </div>
        </div>



    </section>
@endsection
