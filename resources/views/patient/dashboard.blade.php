@extends("layout")

@section("section")
     <section class="w-[55%] mx-auto mt-10">
         <div >
             <h1 class="text-2xl font-bold font-kanit px-4 py-2 border-l-[5px] border-amber-600 mb-10">
                 Mes Rendez-vous
             </h1>

             <div class="relative bg-amber-200 rounded-xl p-6 text-[small] flex items-center gap-6">

{{--                 Pour Annuler  un rendez-vous --}}
                 <form action="" class="absolute right-4 top-4 group/item ">
                     <button type="submit" class="relative ">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                              class="w-6 h-6 rounded-full transition duration-200 box-content p-3
                                hover:bg-amber-100 hover:ease-in cursor-pointer">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                         </svg>
                     </button>
                     <p class="absolute left-[-200%] px-4 py-2  w-[150px] text-gray-600 text-center
                     bg-amber-100 rounded-lg invisible group-hover/item:visible ease-in transition-all
                     duration-100 group-hover/item:delay-500 text-xs">
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
{{--                 liste des consultation effectuer a travers le plateforme--}}
                 <div class="bg-green-200 rounded-xl p-5 mb-6 shadow-xs text-[small] flex gap-4 items-center">
                    <div>
                        <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                            <g clip-rule="evenodd" fill="#333" fill-rule="evenodd"><path d="m14 4.18945h-1.9644c-2.20909 0-3.99996 1.79086-3.99996 4v28.00005c0 2.2091 1.79087 4 3.99996 4h20c2.2092 0 4-1.7909 4-4v-28.00005c0-2.20914-1.7908-4-4-4h-2.0356v.31055 1.00082.68863h2.0356c1.1046 0 2 .89543 2 2v28.00005c0 1.1045-.8954 2-2 2h-20c-1.1045 0-2-.8955-2-2v-28.00005c0-1.10457.8955-2 2-2h1.9644v-.68863-1.00082zm5 2h6v-.68863-1.00082-.31055h-6v.31055 1.00082z"/><path d="m14 15c0-.5523.4477-1 1-1h14c.5523 0 1 .4477 1 1s-.4477 1-1 1h-14c-.5523 0-1-.4477-1-1z"/><path d="m14.0356 20.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 25.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 30.2441c0-.5522.4478-1 1-1h8c.5523 0 1 .4478 1 1 0 .5523-.4477 1-1 1h-8c-.5522 0-1-.4477-1-1z"/><path d="m5.03565 8.95703c.55229 0 1 .44772 1 1l-.00001 27.04257c0 2.7614 2.23858 5 4.99996 5h19.0647c.5522 0 1 .4477 1 1 0 .5522-.4478 1-1 1h-19.0647c-3.86595 0-6.99996-3.1341-6.99996-7l.00001-27.04257c0-.55228.44772-1 1-1z"/><path d="m42 19h-2v15.3333l1 1.3334 1-1.3334zm2 16-3 4-3-4v-18h6z"/><path d="m42 12h-2v2h2zm-2-2h2c1.1046 0 2 .8954 2 2v4h-6v-4c0-1.1046.8954-2 2-2z"/><path d="m27.5 2c.8284 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6716 1.5-1.5 1.5s-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/><path d="m16.5085 2c.8285 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6715 1.5-1.5 1.5-.8284 0-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/></g></svg>
                    </div>
                    <div>
                        <p class="mb-3">
                            Vous avez été consulté(e) par le docteur <span class="font-semibold">Mame cheikh kasse</span> du
                            Date
                            <span class="font-semibold">19/04/2023</span>
                        </p>

                        <p class="text-xs mb-1">
                            <span class="font-kanit text-[small]">Vos Plaintes et Symptômes</span> :
                            <span class="text-red-700 font-kanit text-sm italic">
                                maux_de_tete, problemes_de_vision, Perte de poids.
                            </span>
                        </p>

                        <p class="text-xs mb-1">
                            <span class="font-kanit text-[small]">Traitement et ordonnances</span> : Le médecin avait rédigé une ordonnance pour tes médicaments
                        </p>
                        <p class="text-xs mb-1">
                            <span class="font-kanit text-[small]">Autre Examen para clinique</span> : Oui
                        </p>
                        <p class="text-xs mb-1">
                            <span class="font-kanit text-[small]">Observation</span> : pas de suivi
                        </p>
                    </div>
                 </div>

                 <div class="bg-green-200 rounded-xl p-5 mb-6 shadow-xs text-[small] flex gap-4 items-center">
                     <div>
                         <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                             <g clip-rule="evenodd" fill="#333" fill-rule="evenodd"><path d="m14 4.18945h-1.9644c-2.20909 0-3.99996 1.79086-3.99996 4v28.00005c0 2.2091 1.79087 4 3.99996 4h20c2.2092 0 4-1.7909 4-4v-28.00005c0-2.20914-1.7908-4-4-4h-2.0356v.31055 1.00082.68863h2.0356c1.1046 0 2 .89543 2 2v28.00005c0 1.1045-.8954 2-2 2h-20c-1.1045 0-2-.8955-2-2v-28.00005c0-1.10457.8955-2 2-2h1.9644v-.68863-1.00082zm5 2h6v-.68863-1.00082-.31055h-6v.31055 1.00082z"/><path d="m14 15c0-.5523.4477-1 1-1h14c.5523 0 1 .4477 1 1s-.4477 1-1 1h-14c-.5523 0-1-.4477-1-1z"/><path d="m14.0356 20.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 25.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 30.2441c0-.5522.4478-1 1-1h8c.5523 0 1 .4478 1 1 0 .5523-.4477 1-1 1h-8c-.5522 0-1-.4477-1-1z"/><path d="m5.03565 8.95703c.55229 0 1 .44772 1 1l-.00001 27.04257c0 2.7614 2.23858 5 4.99996 5h19.0647c.5522 0 1 .4477 1 1 0 .5522-.4478 1-1 1h-19.0647c-3.86595 0-6.99996-3.1341-6.99996-7l.00001-27.04257c0-.55228.44772-1 1-1z"/><path d="m42 19h-2v15.3333l1 1.3334 1-1.3334zm2 16-3 4-3-4v-18h6z"/><path d="m42 12h-2v2h2zm-2-2h2c1.1046 0 2 .8954 2 2v4h-6v-4c0-1.1046.8954-2 2-2z"/><path d="m27.5 2c.8284 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6716 1.5-1.5 1.5s-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/><path d="m16.5085 2c.8285 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6715 1.5-1.5 1.5-.8284 0-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/></g></svg>
                     </div>
                     <div>
                         <p class="mb-3">
                             Vous avez été consulté(e) par le docteur <span class="font-semibold">Mame cheikh kasse</span> du
                             Date
                             <span class="font-semibold">19/04/2023</span>
                         </p>

                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Vos Plaintes et Symptômes</span> :
                             <span class="text-red-700 font-kanit text-sm italic">
                                maux_de_tete, problemes_de_vision, Perte de poids.
                            </span>
                         </p>

                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Traitement et ordonnances</span> : Le médecin avait rédigé une ordonnance pour tes médicaments
                         </p>
                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Autre Examen para clinique</span> : Oui
                         </p>
                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Observation</span> : pas de suivi
                         </p>
                     </div>
                 </div>


                 <div class="bg-green-200 rounded-xl p-5 mb-6 shadow-xs text-[small] flex gap-4 items-center">
                     <div>
                         <svg fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                             <g clip-rule="evenodd" fill="#333" fill-rule="evenodd"><path d="m14 4.18945h-1.9644c-2.20909 0-3.99996 1.79086-3.99996 4v28.00005c0 2.2091 1.79087 4 3.99996 4h20c2.2092 0 4-1.7909 4-4v-28.00005c0-2.20914-1.7908-4-4-4h-2.0356v.31055 1.00082.68863h2.0356c1.1046 0 2 .89543 2 2v28.00005c0 1.1045-.8954 2-2 2h-20c-1.1045 0-2-.8955-2-2v-28.00005c0-1.10457.8955-2 2-2h1.9644v-.68863-1.00082zm5 2h6v-.68863-1.00082-.31055h-6v.31055 1.00082z"/><path d="m14 15c0-.5523.4477-1 1-1h14c.5523 0 1 .4477 1 1s-.4477 1-1 1h-14c-.5523 0-1-.4477-1-1z"/><path d="m14.0356 20.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 25.1895c0-.5523.4478-1 1-1h14c.5523 0 1 .4477 1 1 0 .5522-.4477 1-1 1h-14c-.5522 0-1-.4478-1-1z"/><path d="m14.0356 30.2441c0-.5522.4478-1 1-1h8c.5523 0 1 .4478 1 1 0 .5523-.4477 1-1 1h-8c-.5522 0-1-.4477-1-1z"/><path d="m5.03565 8.95703c.55229 0 1 .44772 1 1l-.00001 27.04257c0 2.7614 2.23858 5 4.99996 5h19.0647c.5522 0 1 .4477 1 1 0 .5522-.4478 1-1 1h-19.0647c-3.86595 0-6.99996-3.1341-6.99996-7l.00001-27.04257c0-.55228.44772-1 1-1z"/><path d="m42 19h-2v15.3333l1 1.3334 1-1.3334zm2 16-3 4-3-4v-18h6z"/><path d="m42 12h-2v2h2zm-2-2h2c1.1046 0 2 .8954 2 2v4h-6v-4c0-1.1046.8954-2 2-2z"/><path d="m27.5 2c.8284 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6716 1.5-1.5 1.5s-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/><path d="m16.5085 2c.8285 0 1.5.67157 1.5 1.5v3.00082c0 .82843-.6715 1.5-1.5 1.5-.8284 0-1.5-.67157-1.5-1.5v-3.00082c0-.82843.6716-1.5 1.5-1.5z"/></g></svg>
                     </div>
                     <div>
                         <p class="mb-3">
                             Vous avez été consulté(e) par le docteur <span class="font-semibold">Mame cheikh kasse</span> du
                             Date
                             <span class="font-semibold">19/04/2023</span>
                         </p>

                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Vos Plaintes et Symptômes</span> :
                             <span class="text-red-700 font-kanit text-sm italic">
                                maux_de_tete, problemes_de_vision, Perte de poids.
                            </span>
                         </p>

                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Traitement et ordonnances</span> : Le médecin avait rédigé une ordonnance pour tes médicaments
                         </p>
                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Autre Examen para clinique</span> : Oui
                         </p>
                         <p class="text-xs mb-1">
                             <span class="font-kanit text-[small]">Observation</span> : votre prochain Rv, le
                             02/14/2023
                         </p>
                     </div>
                 </div>



             </div>
         </div>
     </section>
@endsection
