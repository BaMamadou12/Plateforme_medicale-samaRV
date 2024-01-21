@extends("layout")

@section('section')
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
                <button type="submit" class="px-4 py-3 rounded bg-green-500 ">Rechercher</button>
            </form>
        </div>
    </section>
@endsection


