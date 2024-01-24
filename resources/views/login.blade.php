@extends('layout')

@section('section')
    @if(session('success'))
        <div class="mt-10 rounded-md bg-green-50  p-4" id="closer">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif
    <section class="min-h-full w-5/12 mx-auto relative p-8 flex justify-center my-12 bg-white rounded-lg shadow-md">

        <div class="w-full">

            <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-12">Formulaire de connexion</h1>

            <form action="{{ route('login') }}" method="post" class="flex flex-col relative">
                @csrf
                <div class="w-full mb-8">
                    <label for="username" class="block mb-2 ">votre email</label>
                    <input type="email" placeholder="mamadou123@gmail.com" value="{{@old('email')}}" name="email" id="username" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100
                    outline-none focus:border-[#2ea8bf] transition duration-100 ease mb-2">
                    @error('email')
                    <div class="text-red-800 text-[small]"></div>
                    @enderror

                </div>
                <div class="w-[full] mb-8">
                    <label for="password" class="block mb-2 ">votre mot de passe</label>
                    <input type="password" name="password" id="password"  placeholder="mot de passe" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg outline-none bg-gray-100
                           focus:border-[#2ea8bf] transition duration-200 ease mb-2">
                    @error('password')
                <div class="text-red-800 text-[small]">champ required</div>
                    @enderror

                </div>

                <div class="w-full bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in rounded-lg mb-4">
                    <button type="submit" id="connect" class="text-center w-full py-3 font-bold tracking-wide">Se connecter</button>
                </div>
            </form>
            <div class="flex mt-4">
                <p class="mr-3 text-sm"> Vous n'avez pas encore de compte </p>
                <a href="{{ route("register") }}" class="font-bold transition duration-300 hover:ease-in
                hover:underline text-sm">
                    S'inscrire
                </a>
            </div>
        </div>
    </section>
@endsection

