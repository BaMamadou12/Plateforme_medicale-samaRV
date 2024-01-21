@extends("layout")

@section("section")
    <section class="min-h-full w-8/12 mx-auto relative p-8 flex justify-center flex-col my-12 bg-white rounded-lg
    shadow-md">
{{--        nom, prenom, adresse, Email, telephone, Date de naissance, lieux de naissance--}}
        <h1 class="text-3xl font-bold font-kanit italic tracking-wide mb-12">Formulaire de d'inscription</h1>
        <form action="" method="post" class="flex flex-wrap relative w-full justify-between items-center">

            <div class="w-[48%] mb-10  flex justify-between items-center" >
                <label for="nom" class="mr-2"> nom : </label>
                <input type="text" name="nom" id="nom" placeholder="votre nom" class="bg-gray-100 grow px-4 py-1.5
                rounded
                border
                border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[48%] mb-10 flex items-center">
                <label for="nom" class="mr-2"> prenom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="votre prenom" class="bg-gray-100 grow px-4
                py-1.5 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[48%] mb-10 flex justify-between items-center">
                <label for="nom" class="mr-2"> email : </label>
                <input type="email" name="email" id="email" placeholder="exemple@gmail.com" class="bg-gray-100 grow
                px-4 py-1.5
                rounded border
                border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[48%] mb-10 flex justify-between items-center">
                <label for="adresse" class="mr-2"> adresse : </label>
                <input type="text" name="adresse" id="adresse" placeholder="votre adresse" class="bg-gray-100 grow
                px-4 py-1.5 rounded border
                border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[48%] mb-10 flex justify-between items-center">
                <label for="tel" class="mr-2"> telephone : </label>
                <input type="text" name="tel" id="tel" placeholder="ex: 78 621 12 97" class="bg-gray-100 grow px-4
                py-1.5 rounded
                border
                border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[48%] mb-10 flex justify-between items-center">
                <label for="date" class="mr-2"> date de naiss : </label>
                <input type="date" name="date" id="date" class="bg-gray-100 grow px-4 py-1.5 rounded border
                border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="w-[60%] mb-10 flex justify-between items-center">
                <label for="lieux" class="mr-2"> lieux de naissance : </label>
                <input type="text" name="lieux" id="lieux" placeholder="ex : Touba" class="bg-gray-100 grow px-4 py-1.5
                 rounded border border-gray-300 outline-none focus:border-[#2ea8bf] transition duration-100 ease">
            </div>

            <div class="mt-4 w-full flex justify-center">
                <button type="submit" class="px-8 py-3  rounded-lg bg-green-400 hover:bg-[#4DCF7D] transition duration-100 ease-in mb-4"> S'inscrire</button>
            </div>

        </form>
    </section>
@endsection
