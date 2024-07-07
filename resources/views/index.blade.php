@extends("layout")

@section('section')
@if(session('success'))
<div class="mt-10 rounded-md bg-green-100 flex content-center min-w-3/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer">
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
    <section class="w-full h-[90vh] relative pb-8 mb-14">
        <div>
            <div class="op"></div>
            <img src="{{asset('images/index.jpg')}}" class="img" alt="">
        </div>

        <div class="w-[60%] mx-auto text-center relative pt-16">
            <h2 class="font-kanit text-white text-5xl font-bold mb-8 italic leading-[60px]">
                Bienvenu Dans Votre Plateforme De Prise de Rendez-vous
            </h2>
            <form action="#" method="get" class="flex gap-4">
                <input type="text" name="" id="" placeholder="saisir un nom d'hôpital "
                       class="w-[82%] px-4 py-2 rounded outline-none outline focus:outline-green-500 transition-all
                       duration-200 ease-in">
                <button type="submit" class="px-4 py-3 rounded bg-green-500 ">Rechercher</button>
            </form>

        </div>
    </section>

    <section class="w-[80%] mx-auto mt-12 mb-14">
        <h1 class="text-3xl font-medium font-kanit px-1 relative py-2 mb-6 before:absolute before:content[''] before:h-1  before:w-[40px]
        before:bg-teal-600 before:rounded-lg before:bottom-0">
        Prise en charge médicale
        </h1>
        
        <div class="flex items-center justify-between gap-6">
            <div class="w-1/2">
                <div class="mb-10">
                    <h1 class="text-2xl font-bold mb-5">Avez-vous des difficultés financières ?</h1>
                    <p>La Ville de Dakar, dans le cadre de sa politique sociale, octroie des prises en charge
                     médicales aux indigents ou nécessiteux habitant son périmètre communal dans les
                     structures de santé partenaires à travers la Direction de l'Action Sanitaire et des Services
                     Aux Personnes.</p>
                 </div>
                 <div class="flex items-center">
                     <button class="px-6 py-3 rounded-lg border  font-medium mr-5 flex items-center gap-3 hover:bg-green-100">
                         <a href="">Explorer plus</a> 
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
                            <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                     <button class="px-6 py-3 rounded-lg bg-green-500 hover:bg-[#4DCF7D] font-medium flex items-center gap-3">
                         <a href="{{ route('d.create') }}">Passer la demande</a>
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#000000" fill="none">
                            <path d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 17C15 17 20 13.3176 20 12C20 10.6824 15 7 15 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                 </div>
            </div>
            <div class="w-1/2">
                <img src="{{asset('images/medi.png')}}" >
            </div>
        </div>
        
    </section>

    <section class="w-[80%] mx-auto mt-10 mb-12">
        <h1 class="text-3xl font-medium font-kanit px-1 relative py-2 mb-10 before:absolute before:content[''] before:h-1  before:w-[40px]
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
        <h1 class="text-3xl font-medium font-kanit px-1 relative py-2 mb-6 before:absolute before:content[''] before:h-1  before:w-[40px]
        before:bg-teal-600 before:rounded-lg before:bottom-0">
        Nos partenaires
        </h1>
        
        <div class="flex items-center gap-6">
            
            <div class="">
                <img src="{{asset('images/mairie.png')}}" class="rounded-lg shadow-sm">
            </div>
            <div class="">
                <img src="{{asset('images/usaid.png')}}" class="rounded-lg shadow-sm">
            </div>
            <div class="">
                <img src="{{asset('images/sonatel.png')}}" class="rounded-lg shadow-sm">
            </div>
        </div>
        
    </section>
@endsection


