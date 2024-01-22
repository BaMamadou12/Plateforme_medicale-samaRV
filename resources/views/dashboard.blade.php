@extends("layout")

@section("section")
     <section class="w-1/2 bg-amber-400 mx-auto mt-10">
         <div>
             <h1>Mes RV </h1>

             <div>
                 <img src="{{ asset("images/logo_rv.png") }}" alt="" class="w-[160px]">
                 <div>
                     <p>Votre rendez-vous, à l'hôpital <span>Régional de Thies</span> a été bien pris en compte </p>
                     <p>Médecin : <span>Abdoulaye Fall</span></p>
                     <p>Heure de consultation : <span>16h 41</span></p>
                     <p>Etat : <span>en cours</span></p>
                 </div>

             </div>
         </div>
         <div>
             <h1>Mes Consultations </h1>
             <div>

             </div>
         </div>
     </section>
@endsection
