@extends("layout")

@section("section")
     <section class="w-[55%] mx-auto mt-10">
         <div >
             <h1 class="text-2xl font-bold font-kanit px-4 py-2 border-l-[5px] border-amber-600 mb-10">
                 Mes Rendez-vous
             </h1>

             <div class="relative bg-green-200 rounded-xl p-6 text-[small] flex items-center gap-6">

{{--                 Pour Annuler le un rendez-vous --}}
                 <form action="" class="absolute right-4 top-4 group/item ">
                     <button type="submit" class="relative ">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                              class="w-6 h-6 rounded-full transition duration-200 box-content p-3
                                hover:bg-green-50 hover:ease-in cursor-pointer">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                         </svg>
                     </button>
                     <p class="absolute left-[-200%] px-4 py-2  w-[150px] text-gray-600 text-center
                     bg-green-50 rounded-lg invisible group-hover/item:visible ease-in transition-all
                     duration-100 group-hover/item:delay-500">
                         Annuler Votre RV</p>
                 </form>


                 <div>
                     <img src="{{ asset("images/logo_rv.png") }}" alt="" class="w-[70px]">
                 </div>
                 <div>
                     <p class="mb-2">
                         Votre rendez-vous, à l'hôpital <span class="font-bold">Régional de Thies</span>
                         a été bien pris en compte
                     </p>
                     <p>RV N&#176; : <span class="font-semibold font-kanit tracking-widest">24390</span></p>
                     <p>Médecin : <span class="font-semibold font-kanit tracking-widest">Abdoulaye Fall</span></p>
                     <p>
                         Heure de consultation : <span class="font-semibold font-kanit tracking-widest">16h 41mn</span>
                     </p>
                     <p>Etat : <span class="font-semibold font-kanit tracking-widest">en cours</span></p>
                 </div>

             </div>
         </div>


         <div class="mt-24">
             <div>
                 <h1 class="text-2xl font-bold font-kanit px-4 py-2 border-l-[5px] border-green-600 mb-10 ">
                     Mes Consultations
                 </h1>

             </div>
         </div>
     </section>
@endsection
