
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
    @vite('resources/css/app.css')
    <title>Plateforme De Prise De rendez-vous </title>
</head>
<body class="bg-[#f6fcf7] font-verdana text-gray-600 relative"id="body">
    <header id="header" class="px-12 py-1.5 bg-white flex items-center justify-between w-full text-sm transition-all
    ease-in-out duration-200 shadow-sm">
        <div class="logoSante">
            <a href=""  class="flex items-center">
                <img src="{{asset("images/logo_sante.png")}}" class="w-16 mr-0.5" alt="logo santé">
                <h2 class="font-copp text-2xl font-bold text-green-700 italic">SAMA RV</h2>
            </a>
        </div>
        <nav>
            <ul class="flex">
                <li>
                    <a href="{{ route("accueil") }}"  class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                    hover:ease-in  @php if(Route::currentRouteName() == ('accueil')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="{{ route("hopital") }}"  class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                    hover:ease-in @php if(Route::currentRouteName() == ('hopital')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                        Hôpitaux
                    </a>
                </li>

                @if(Auth::guard('web')->check())
                    <li>
                        <a href="{{ route("patient") }}" class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                        hover:ease-in  @php if(Route::currentRouteName() == ('patient')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                            Dashboard
                        </a>
                    </li>
                @elseif(Auth::guard('medecin')->check())
                    <li>
                        <a href="{{ route("medecin") }}" class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                        hover:ease-in @php if(Route::currentRouteName() == ('medecin')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                            Dashboard
                        </a>
                    </li>
                @elseif(Auth::guard('admin')->check())
                    <li>
                        <a href="{{ route("admin") }}" class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                        hover:ease-in  @php if(Route::currentRouteName() == ('admin')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                            Dashboard
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route("patient") }}" class="inline-block p-2 mr-3 border-b-[3px] hover:text-gray-500 hover:border-green-400 transition-all duration-200
                        hover:ease-in  @php if(Route::currentRouteName() == ('patient')){ echo 'border-b-[3px] border-green-400';}  @endphp">
                            Dashboard
                        </a>
                    </li>
                @endif

                <li>
                    <a href="#"  class="inline-block p-2 mr-3 border-b-[3px]  hover:text-gray-500
                    hover:border-b-{3px} hover:border-green-300 transition-all duration-200 hover:ease-in">
                        Pharmacies
                    </a>
                </li>
                <li>
                    <a href="#"  class="inline-block p-2 mr-3  border-b-[3px] hover:text-gray-500
                    hover:border-b-{3px} hover:border-green-300 transition-all duration-200 hover:ease-in">
                        A propos</a>
                </li>

            </ul>
        </nav>

        <div>
            @if(Auth::guard('web')->check() && Auth::guard('web')->user())

                <div class="relative px-2 py-1.5 border rounded-[8px] cursor-pointer text-xs mr-4" id="user">
                    <div class="flex gap-2 items-center">
                        <svg fill="none" class="w-6 h-6" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m18 10c0 4.4183-3.5817 8-8 8-4.41828 0-8-3.5817-8-8 0-4.41828 3.58172-8 8-8 4.4183 0 8 3.58172 8 8zm-6-3c0 1.10457-.8954 2-2 2-1.10457 0-2-.89543-2-2s.89543-2 2-2c1.1046 0 2 .89543 2 2zm-2.00007 4c-2.01754 0-3.75599 1.195-4.54619 2.9157 1.10029 1.2763 2.72891 2.0843 4.54624 2.0843 1.81732 0 3.44592-.8079 4.54622-2.0842-.7902-1.7208-2.5287-2.9158-4.54627-2.9158z" fill="#4a5568" fill-rule="evenodd"/></svg>
                        <span>
                            {{ Auth::guard('web')->user()->prenom }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transition-all duration-200 ease" id="ch-down">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>                          
                    </div>
                    
                    <div class="absolute z-1200 bg-white shadow-sm border px-2 py-2 w-[160px] rounded-[8px] flex flex-col transition-all duration-100 ease-in left-[30%] top-[115%] opacity-0" id="user-item">
                        <a href="{{route("patient.edit", Auth::guard('web')->user()->id)}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>                                                            
                            <span>profile</span>
                        </a>
        
                        <a href="{{route("logout")}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>                              
                            <span> déconnexion</span>
                        </a>
                    </div>
                    
                </div>
            @elseif(Auth::guard('medecin')->check() && Auth::guard('medecin')->user())

                <div class="relative px-2 py-1.5 border rounded-[8px] cursor-pointer text-xs mr-4" id="user">
                    <div class="flex gap-2 items-center">
                        <svg fill="none" class="w-6 h-6" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m18 10c0 4.4183-3.5817 8-8 8-4.41828 0-8-3.5817-8-8 0-4.41828 3.58172-8 8-8 4.4183 0 8 3.58172 8 8zm-6-3c0 1.10457-.8954 2-2 2-1.10457 0-2-.89543-2-2s.89543-2 2-2c1.1046 0 2 .89543 2 2zm-2.00007 4c-2.01754 0-3.75599 1.195-4.54619 2.9157 1.10029 1.2763 2.72891 2.0843 4.54624 2.0843 1.81732 0 3.44592-.8079 4.54622-2.0842-.7902-1.7208-2.5287-2.9158-4.54627-2.9158z" fill="#4a5568" fill-rule="evenodd"/></svg>
                        <span>
                            {{ Auth::guard('medecin')->user()->prenom }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transition-all duration-200 ease" id="ch-down">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>                          
                    </div>
                    
                    <div class="absolute z-1200 bg-white shadow-sm border px-2 py-2 w-[160px] rounded-[8px] flex flex-col transition-all duration-100 ease-in left-[30%] top-[115%] opacity-0" id="user-item">
                        <a href="{{route("medecin.edit", Auth::guard('medecin')->user()->id)}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>                              
                            <span>profile</span>
                        </a>
        
                        <a href="{{route("logout")}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>                              
                            <span> déconnexion</span>
                        </a>
                    </div>
                    
                </div>

            @elseif(Auth::guard('admin')->check()  && Auth::guard('admin')->user())

                <div class="relative px-2 py-1.5 border rounded-[8px] cursor-pointer text-xs mr-4" id="user">
                    <div class="flex gap-2 items-center">
                        <svg fill="none" class="w-6 h-6" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="m18 10c0 4.4183-3.5817 8-8 8-4.41828 0-8-3.5817-8-8 0-4.41828 3.58172-8 8-8 4.4183 0 8 3.58172 8 8zm-6-3c0 1.10457-.8954 2-2 2-1.10457 0-2-.89543-2-2s.89543-2 2-2c1.1046 0 2 .89543 2 2zm-2.00007 4c-2.01754 0-3.75599 1.195-4.54619 2.9157 1.10029 1.2763 2.72891 2.0843 4.54624 2.0843 1.81732 0 3.44592-.8079 4.54622-2.0842-.7902-1.7208-2.5287-2.9158-4.54627-2.9158z" fill="#4a5568" fill-rule="evenodd"/></svg>
                        <span>
                            {{ Auth::guard('admin')->user()->role }}
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transition-all duration-200 ease" id="ch-down">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>                          
                    </div>
                    
                    <div class="absolute z-1200 bg-white shadow-sm border px-2 py-2 w-[160px] rounded-[8px] flex flex-col transition-all duration-100 ease-in left-[30%] top-[115%] opacity-0" id="user-item">
                        <a href="{{route("admin")}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>                              
                            <span>réglages</span>
                        </a>
        
                        <a href="{{route("logout")}}" class="flex py-2 hover:bg-gray-100 px-2 rounded-lg transition duration-200 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>                              
                            <span> déconnexion</span>
                        </a>
                    </div>
                    
                </div>
            @else
                <div class="flex items-center text-[small]">
                    <a href="{{route("login")}}" class="flex items-center px-4 py-3 mr-2 rounded-[8px] transition-all duration-200 ease-in
                        hover:bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                        <span>connexion</span>
                    </a>
                    <a href="{{route("register")}}" class="flex items-center px-4 py-3 mr-2 rounded-[8px] bg-green-300 
                    transition-all duration-800 hover:ease">
                        inscription
                    </a>
                </div>
            @endif



        </div>
    </header>

