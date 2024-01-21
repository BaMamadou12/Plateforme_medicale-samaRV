<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="{{asset("css/style.css")}}">--}}
    @vite('resources/css/app.css')
    <title>Plateforme De Prise De rendez-vous </title>
</head>
<body class="bg-green-50 font-verdana text-gray-600">
<header class="px-12 py-1.5 bg-white flex items-center justify-between w-full ">
    <div class="logoSante">
        <a href=""  class="flex items-center">
            <img src="images/logo_sante.png" class="w-16 mr-0.5" alt="logo santé">
            <h2 class="font-copp text-2xl font-bold text-green-700 italic">SAMA RV</h2>
        </a>
    </div>
    <nav>
        <ul class="flex">
            <li>
                <a href=""  class="inline-block p-2 mr-3 border-b-[3px] border-b-white hover:text-gray-500 hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    Accueil
                </a>
            </li>
            <li>
                <a href=""  class="inline-block p-2 mr-3 border-b-[3px] border-b-white hover:text-gray-500 hover:border-b-{3px}
                hover:border-green-500 transition duration-{.08s} hover:ease-in">
                    Hôpitaux
                </a>
            </li>
            <li>
                <a href=""  class="inline-block p-2 mr-3 border-b-[3px] border-b-white hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    Pharmacies
                </a>
            </li>
            <li>
                <a href=""  class="inline-block p-2 mr-3  border-b-[3px] border-b-white hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    A propos</a>
            </li>

        </ul>
    </nav>

    <div>
        <a href="" class="inline-block px-6 py-1.5 rounded-lg hover:bg-green-50
         transition duration-800 hover:ease">
            Connexion
        </a>
        <a href="" class="inline-block px-6 py-1.5 border border-green-200 text-green-800 rounded-lg hover:bg-green-200
        hover:text-gray-600 transition duration-800 hover:ease">
            Inscription
        </a>
        <!--            <a href="">mamadou</a>-->
        <!--            <a href="">déconnexion</a>-->
    </div>
</header>
<main>
    <section class="w-full h-[90vh] relative pb-8">
        <div>
            <div class="op"></div>
            <img src="images/hdd.jpg" class="img" alt="">
        </div>

        <div class="w-[60%] mx-auto text-center relative pt-12">
            <h2 class="font-kanit text-white text-5xl font-bold mb-16 italic leading-[60px]">
                Bienvenu Dans Votre Plateforme De Prise de Rendez-vous
            </h2>
{{--            <p class="text-green-100 mb-8">Prenez votre rendez-vous où que vous soyez dans les différents--}}
{{--                hôpitaux du Sénégal.</p>--}}

            <form action="#" method="get" class="flex  justify-between ">
                <input type="text" name="" id="" placeholder="saisir un nom d'hôpital "
                       class="w-[82%] px-4 py-2 rounded outline-none outline focus:outline-green-500">
                <button type="submit" class="px-4 py-3 rounded bg-green-500 text-white ">Rechercher</button>
            </form>
        </div>
    </section>
</main>

<footer>

</footer>


</body>
</html>
