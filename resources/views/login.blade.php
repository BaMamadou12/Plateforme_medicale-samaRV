@extends('layout')

@section('section')
    <section class="min-h-full w-5/12 mx-auto relative p-8 flex justify-center my-12 bg-white rounded-lg">

        <div class="w-full">

            <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-12">Formulaire de connexion</h1>

            <form action="" method="post" class="flex flex-col relative">
                <div class="w-full mb-8">
                    <label for="username" class="block mb-2 ">votre email</label>
                    <input type="email" placeholder="mamadou123@gmail.com" name="username" id="username" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                    outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
{{--                    <div class="text-red-800 text-xs">champ required</div>--}}
                </div>
                <div class="w-[full] mb-8">
                    <label for="password" class="block mb-2 ">votre mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="mot de passe" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none bg-gray-100
                           focus:border-[#2ea8bf] transition duration-200 ease mb-2">
{{--                    <div class="text-red-800 text-xs">champ required</div>--}}

                </div>

                <div class="w-full bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in rounded-lg mb-4">
                    <button type="submit" id="connect" class="text-center w-full py-3 font-bold tracking-wide">Se connecter</button>
                </div>
            </form>
        </div>
    </section>
@endsection

