@extends("layout")

@section('section')
    <section class="w-full h-[90vh] relative pb-8">
        <div>
            <div class="op"></div>
            <img src="{{asset('images/index.jpg')}}" class="img" alt="">
        </div>

        <div class="w-[60%] mx-auto text-center relative pt-12">
            <h2 class="font-kanit text-white text-4xl font-bold mb-8 italic leading-[60px]">
                Bienvenu Dans Votre Plateforme De Prise de Rendez-vous
            </h2>
            {{--            <p class="text-green-100 mb-8">Prenez votre rendez-vous où que vous soyez dans les différents--}}
            {{--                hôpitaux du Sénégal.</p>--}}

            <form action="#" method="get" class="flex  justify-between ">
                <input type="text" name="" id="" placeholder="saisir un nom d'hôpital "
                       class="w-[82%] px-4 py-2 rounded outline-none outline focus:outline-green-500 transition-all
                       duration-200 ease-in">
                <button type="submit" class="px-4 py-3 rounded bg-green-500 ">Rechercher</button>
            </form>
        </div>
    </section>

    <section class="w-[80%] mx-auto mt-10 mb-12">
        <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
        before:bg-teal-600 before:rounded-lg before:bottom-0">
            Nos Actualités
        </h1>
        <div class="grid grid-cols-2 gap-4 text-sm mb-12">
            <div class="px-6 py-4 bg-white rounded-lg border">
                <div class="mb-4">
                    <span class="px-4 border-l-2 border-gray-400 text-gray-400">14 décembre, 2024</span>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold">journée de don de sang à l'hopital principal de Dakar </h2>
                </div>
                <p class="mb-4 text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam facilis corrupti perspiciatis cupiditate 
                    officiis aut a labore unde, dolorum cum dolore nisi quis esse deserunt, quod dolorem officia? Dolore, et!
                </p>
                <a href="" class="text-teal-600 font-semibold font-kanit  transition-all duration-100 ease-in hover:underline hover:tracking-wide">
                    <span>lire article</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                      
                </a>
            </div>

            <div class="px-6 py-4 bg-white rounded-lg border">
                <div class="mb-4">
                    <span class="px-4 border-l-2 border-gray-400 text-gray-400">14 décembre, 2024</span>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold">journée de don de sang à l'hopital principal de Dakar </h2>
                </div>
                <p class="mb-4 text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam facilis corrupti perspiciatis cupiditate 
                    officiis aut a labore unde, dolorum cum dolore nisi quis esse deserunt, quod dolorem officia? Dolore, et!
                </p>
                <a href="" class="text-teal-600 font-semibold font-kanit  transition-all duration-100 ease-in hover:underline hover:tracking-wide">
                    <span>lire article</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                      
                </a>
            </div>

            <div class="px-6 py-4 bg-white rounded-lg border">
                <div class="mb-4">
                    <span class="px-4 border-l-2 border-gray-400 text-gray-400">14 décembre, 2024</span>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold">journée de don de sang à l'hopital principal de Dakar </h2>
                </div>
                <p class="mb-4 text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam facilis corrupti perspiciatis cupiditate 
                    officiis aut a labore unde, dolorum cum dolore nisi quis esse deserunt, quod dolorem officia? Dolore, et!
                </p>
                <a href="" class="text-teal-600 font-semibold font-kanit  transition-all duration-100 ease-in hover:underline hover:tracking-wide">
                    <span>lire article</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                      
                </a>
            </div>

            <div class="px-6 py-4 bg-white rounded-lg border">
                <div class="mb-4">
                    <span class="px-4 border-l-2 border-gray-400 text-gray-400">14 décembre, 2024</span>
                </div>
                <div class="mb-4">
                    <h2 class="font-semibold">journée de don de sang à l'hopital principal de Dakar </h2>
                </div>
                <p class="mb-4 text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam facilis corrupti perspiciatis cupiditate 
                    officiis aut a labore unde, dolorum cum dolore nisi quis esse deserunt, quod dolorem officia? Dolore, et!
                </p>
                <a href="" class="text-teal-600 font-semibold font-kanit  transition-all duration-100 ease-in hover:underline hover:tracking-wide">
                    <span>lire article</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                      
                </a>
            </div>

        </div>

        <div class="text-right px-4 ">
            <a href="" class="inline-block px-4 hover:underline py-2 text-teal-600 hover:bg-green-100 rounded-lg transition-all duration-100 ease-in-out 
            hover:tracking-tighter text-sm">
                <span class="">Plus d'articles</span> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>  
            </a>
            
        </div>
        
    </section>

    <section class="w-[80%] mx-auto mt-10 mb-12">
        <h1 class="text-xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
        before:bg-teal-600 before:rounded-lg before:bottom-0">
            Nos Partenaires
        </h1>
        
        <div>
            <div>

            </div>
            <div>

            </div>
            <div>

            </div>
        </div>
        
    </section>
@endsection


