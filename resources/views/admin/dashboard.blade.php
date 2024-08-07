@extends("layout")

@section("section")
    {{-- les notifications éphémeres : --}}

    {{-- Message apres ajout avoir affecté un médecin dans la base de données --}}
    @if(session('msg'))
    <div class="mt-10 rounded-md bg-green-100 flex content-center w-4/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('msg') }}</p>
            </div>
        </div>
    </div>
    @endif

    {{-- Mise a jour d'un hopital --}}
    @if(session('message'))
            <div class="mt-10 rounded-md bg-green-100 flex content-center min-w-4/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer"">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
    @endif

    

    {{-- Message apres ajout avoir affecté un médecin dans la base de données --}}
    @if(session('msg_error'))
    <div class="mt-10 rounded-md bg-red-100 flex content-center w-4/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-red-800">{{ session('msg_error') }}</p>
            </div>
        </div>
    </div>
    @endif

    {{-- Message apres ajout d'un medecin dans la base de donnee FIN DE LA SESSION --}}
    @if(session('success'))
            <div class="mt-10 rounded-md bg-green-100 flex content-center min-w-4/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer"">
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


    {{-- Message apres ajout d'un hopital dans la base de donnee--}}
    @if(session('successhopital'))
        <div class="mt-10 rounded-md bg-green-100 flex content-center w-4/12 mx-auto absolute z-1200 top-12 right-2 px-4 py-3" id="closer">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('successhopital') }}</p>
                </div>
            </div>
        </div>
    @endif




    <section class="w-[70%] mx-auto relative mb-12 z-0" id="sect-sibling">
        <div class="flex gap-2 items-center mt-8">
            <div class="px-2 py-2 rounded-lg bg-green-300">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M2.8 1L2.74967 0.99997C2.52122 0.999752 2.32429 0.999564 2.14983 1.04145C1.60136 1.17312 1.17312 1.60136 1.04145 2.14983C0.999564 2.32429 0.999752 2.52122 0.99997 2.74967L1 2.8V5.2L0.99997 5.25033C0.999752 5.47878 0.999564 5.67572 1.04145 5.85017C1.17312 6.39864 1.60136 6.82688 2.14983 6.95856C2.32429 7.00044 2.52122 7.00025 2.74967 7.00003L2.8 7H5.2L5.25033 7.00003C5.47878 7.00025 5.67572 7.00044 5.85017 6.95856C6.39864 6.82688 6.82688 6.39864 6.95856 5.85017C7.00044 5.67572 7.00025 5.47878 7.00003 5.25033L7 5.2V2.8L7.00003 2.74967C7.00025 2.52122 7.00044 2.32429 6.95856 2.14983C6.82688 1.60136 6.39864 1.17312 5.85017 1.04145C5.67572 0.999564 5.47878 0.999752 5.25033 0.99997L5.2 1H2.8ZM2.38328 2.01382C2.42632 2.00348 2.49222 2 2.8 2H5.2C5.50779 2 5.57369 2.00348 5.61672 2.01382C5.79955 2.05771 5.94229 2.20045 5.98619 2.38328C5.99652 2.42632 6 2.49222 6 2.8V5.2C6 5.50779 5.99652 5.57369 5.98619 5.61672C5.94229 5.79955 5.79955 5.94229 5.61672 5.98619C5.57369 5.99652 5.50779 6 5.2 6H2.8C2.49222 6 2.42632 5.99652 2.38328 5.98619C2.20045 5.94229 2.05771 5.79955 2.01382 5.61672C2.00348 5.57369 2 5.50779 2 5.2V2.8C2 2.49222 2.00348 2.42632 2.01382 2.38328C2.05771 2.20045 2.20045 2.05771 2.38328 2.01382ZM9.8 1L9.74967 0.99997C9.52122 0.999752 9.32429 0.999564 9.14983 1.04145C8.60136 1.17312 8.17312 1.60136 8.04145 2.14983C7.99956 2.32429 7.99975 2.52122 7.99997 2.74967L8 2.8V5.2L7.99997 5.25033C7.99975 5.47878 7.99956 5.67572 8.04145 5.85017C8.17312 6.39864 8.60136 6.82688 9.14983 6.95856C9.32429 7.00044 9.52122 7.00025 9.74967 7.00003L9.8 7H12.2L12.2503 7.00003C12.4788 7.00025 12.6757 7.00044 12.8502 6.95856C13.3986 6.82688 13.8269 6.39864 13.9586 5.85017C14.0004 5.67572 14.0003 5.47878 14 5.25033L14 5.2V2.8L14 2.74967C14.0003 2.52122 14.0004 2.32429 13.9586 2.14983C13.8269 1.60136 13.3986 1.17312 12.8502 1.04145C12.6757 0.999564 12.4788 0.999752 12.2503 0.99997L12.2 1H9.8ZM9.38328 2.01382C9.42632 2.00348 9.49222 2 9.8 2H12.2C12.5078 2 12.5737 2.00348 12.6167 2.01382C12.7995 2.05771 12.9423 2.20045 12.9862 2.38328C12.9965 2.42632 13 2.49222 13 2.8V5.2C13 5.50779 12.9965 5.57369 12.9862 5.61672C12.9423 5.79955 12.7995 5.94229 12.6167 5.98619C12.5737 5.99652 12.5078 6 12.2 6H9.8C9.49222 6 9.42632 5.99652 9.38328 5.98619C9.20045 5.94229 9.05771 5.79955 9.01382 5.61672C9.00348 5.57369 9 5.50779 9 5.2V2.8C9 2.49222 9.00348 2.42632 9.01382 2.38328C9.05771 2.20045 9.20045 2.05771 9.38328 2.01382ZM2.74967 7.99997L2.8 8H5.2L5.25033 7.99997C5.47878 7.99975 5.67572 7.99956 5.85017 8.04145C6.39864 8.17312 6.82688 8.60136 6.95856 9.14983C7.00044 9.32429 7.00025 9.52122 7.00003 9.74967L7 9.8V12.2L7.00003 12.2503C7.00025 12.4788 7.00044 12.6757 6.95856 12.8502C6.82688 13.3986 6.39864 13.8269 5.85017 13.9586C5.67572 14.0004 5.47878 14.0003 5.25033 14L5.2 14H2.8L2.74967 14C2.52122 14.0003 2.32429 14.0004 2.14983 13.9586C1.60136 13.8269 1.17312 13.3986 1.04145 12.8502C0.999564 12.6757 0.999752 12.4788 0.99997 12.2503L1 12.2V9.8L0.99997 9.74967C0.999752 9.52122 0.999564 9.32429 1.04145 9.14983C1.17312 8.60136 1.60136 8.17312 2.14983 8.04145C2.32429 7.99956 2.52122 7.99975 2.74967 7.99997ZM2.8 9C2.49222 9 2.42632 9.00348 2.38328 9.01382C2.20045 9.05771 2.05771 9.20045 2.01382 9.38328C2.00348 9.42632 2 9.49222 2 9.8V12.2C2 12.5078 2.00348 12.5737 2.01382 12.6167C2.05771 12.7995 2.20045 12.9423 2.38328 12.9862C2.42632 12.9965 2.49222 13 2.8 13H5.2C5.50779 13 5.57369 12.9965 5.61672 12.9862C5.79955 12.9423 5.94229 12.7995 5.98619 12.6167C5.99652 12.5737 6 12.5078 6 12.2V9.8C6 9.49222 5.99652 9.42632 5.98619 9.38328C5.94229 9.20045 5.79955 9.05771 5.61672 9.01382C5.57369 9.00348 5.50779 9 5.2 9H2.8ZM9.8 8L9.74967 7.99997C9.52122 7.99975 9.32429 7.99956 9.14983 8.04145C8.60136 8.17312 8.17312 8.60136 8.04145 9.14983C7.99956 9.32429 7.99975 9.52122 7.99997 9.74967L8 9.8V12.2L7.99997 12.2503C7.99975 12.4788 7.99956 12.6757 8.04145 12.8502C8.17312 13.3986 8.60136 13.8269 9.14983 13.9586C9.32429 14.0004 9.52122 14.0003 9.74967 14L9.8 14H12.2L12.2503 14C12.4788 14.0003 12.6757 14.0004 12.8502 13.9586C13.3986 13.8269 13.8269 13.3986 13.9586 12.8502C14.0004 12.6757 14.0003 12.4788 14 12.2503L14 12.2V9.8L14 9.74967C14.0003 9.52122 14.0004 9.32429 13.9586 9.14983C13.8269 8.60136 13.3986 8.17312 12.8502 8.04145C12.6757 7.99956 12.4788 7.99975 12.2503 7.99997L12.2 8H9.8ZM9.38328 9.01382C9.42632 9.00348 9.49222 9 9.8 9H12.2C12.5078 9 12.5737 9.00348 12.6167 9.01382C12.7995 9.05771 12.9423 9.20045 12.9862 9.38328C12.9965 9.42632 13 9.49222 13 9.8V12.2C13 12.5078 12.9965 12.5737 12.9862 12.6167C12.9423 12.7995 12.7995 12.9423 12.6167 12.9862C12.5737 12.9965 12.5078 13 12.2 13H9.8C9.49222 13 9.42632 12.9965 9.38328 12.9862C9.20045 12.9423 9.05771 12.7995 9.01382 12.6167C9.00348 12.5737 9 12.5078 9 12.2V9.8C9 9.49222 9.00348 9.42632 9.01382 9.38328C9.05771 9.20045 9.20045 9.05771 9.38328 9.01382Z"
                      fill="currentColor"
                    />
                  </svg>
            </div>
              <span class="font-kanit">Tableau de bord</span>

        </div>
        <div class="grid grid-cols-3 gap-6 mt-4 mb-20">
            <div class="h-40 rounded-xl bg-sky-100 flex gap-1 items-center justify-center flex-col">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-12 h-12 " viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M256,70.172c7.875,0,14.25-6.391,14.25-14.266s-6.375-14.25-14.25-14.25s-14.25,6.375-14.25,14.25 S248.125,70.172,256,70.172z"></path> <path class="st0" d="M451.313,430.484c-2-7.438-4.797-14.125-8.266-20.063c-6.063-10.422-14.125-18.547-22.984-24.969 c-6.656-4.844-13.781-8.766-21-12.156c-10.844-5.078-21.922-8.969-32.156-12.75c-10.219-3.766-19.578-7.469-26.859-11.75 c-2.656-1.578-5.047-3.219-7.109-4.938c-3.109-2.594-5.5-5.328-7.266-8.406c-1.75-3.078-2.906-6.547-3.375-10.875 c-0.313-3.094-0.453-6-0.453-8.766c0-8.188,1.219-15.297,2.75-22.531c4.578-5.172,8.766-11.313,12.719-18.672 c3.984-7.406,7.75-16.047,11.5-26.281c2.406-1.094,4.828-2.422,7.203-4.016c5.406-3.625,10.547-8.688,14.813-15.453 c4.281-6.734,7.719-15.141,10.047-25.5c0.656-2.859,0.969-5.719,0.969-8.531c0-5.875-1.375-11.484-3.719-16.5 c-1.609-3.453-3.672-6.641-6.078-9.531c1.234-4.516,2.719-10.594,4.031-17.703c1.828-9.875,3.344-21.734,3.344-34.219 c0-8.047-0.625-16.359-2.266-24.563c-1.219-6.156-3.016-12.25-5.563-18.109c-3.813-8.797-9.359-17.047-17.078-23.875 c-7.141-6.344-16.094-11.375-26.891-14.609c-4.578-5.469-9.297-10.109-14.156-13.984c-8.219-6.563-16.875-10.953-25.688-13.594 c-1.672-0.5-3.344-0.953-5.031-1.344C274.797,2.469,265.672-0.016,256,0c-7.688,0-15.063,1.563-21.766,4.391 c-3.047,1.297-5.953,2.844-8.703,4.625c-0.875,0.266-1.75,0.563-2.594,0.859c-3.938,1.344-7.688,2.906-12.625,4.844 c-1.875,0.75-4.344,1.844-7.313,3.328c-5.172,2.625-11.844,6.484-18.984,11.813c-10.703,7.984-22.531,19.25-31.75,34.531 c-4.594,7.641-8.547,16.266-11.313,25.938c-2.781,9.641-4.391,20.313-4.391,31.953c0,7.297,0.625,14.953,1.984,22.984 c0,0.578,0.016,1.094,0.047,1.641c0.063,1,0.172,2.047,0.281,3.125c0.156,1.609,0.359,3.266,0.5,4.656 c0.078,0.688,0.125,1.313,0.172,1.797c0.016,0.234,0.031,0.438,0.031,0.578l0.016,0.172v0.047v0.922l1.969,8.75 c-2.828,3.094-5.281,6.547-7.172,10.359c-2.641,5.266-4.234,11.234-4.234,17.531c0,2.797,0.313,5.656,0.969,8.531 c1.563,6.906,3.609,12.938,6.063,18.188c3.688,7.891,8.344,14.031,13.516,18.641c4,3.578,8.266,6.203,12.516,8.125 c3.75,10.219,7.5,18.859,11.469,26.25c3.969,7.375,8.141,13.516,12.719,18.688c1.547,7.234,2.75,14.359,2.75,22.547 c0,2.766-0.125,5.672-0.469,8.766c-0.297,2.984-0.953,5.547-1.906,7.859c-1.406,3.453-3.453,6.422-6.25,9.203 c-2.797,2.766-6.359,5.328-10.594,7.734c-4.281,2.438-9.234,4.688-14.641,6.875c-9.453,3.828-20.234,7.438-31.156,11.797 c-8.203,3.281-16.5,6.984-24.406,11.656c-5.938,3.5-11.641,7.531-16.891,12.344c-7.875,7.203-14.656,16.172-19.344,27.281 c-4.703,11.109-7.297,24.266-7.297,39.813c0,2.172,0.469,4.281,1.219,6.203c0.703,1.813,1.672,3.484,2.828,5.047 c2.156,2.938,4.938,5.578,8.359,8.109c5.984,4.406,13.953,8.547,24.266,12.453c15.453,5.828,36.156,11.063,62.938,14.875 C183.594,509.625,216.422,512,256,512c34.313,0,63.547-1.781,88.172-4.75c18.469-2.203,34.328-5.078,47.797-8.359 c10.094-2.469,18.859-5.172,26.375-8.031c5.641-2.125,10.578-4.359,14.859-6.641c3.219-1.719,6.078-3.469,8.594-5.281 c3.766-2.734,6.813-5.563,9.109-8.734c1.141-1.609,2.094-3.297,2.797-5.141c0.672-1.844,1.094-3.844,1.094-5.922 C454.797,448.5,453.578,439,451.313,430.484z M326.5,359.766l-49.625,77.469l-5.516-38.031l14.063-14.906l-9.109-15.203 l38.469-20.219c1.078,1.359,2.203,2.672,3.406,3.891C320.719,355.375,323.531,357.672,326.5,359.766z M304.453,83.828h41.656 v23.781h-68.797c0.141-0.063,0.297-0.125,0.453-0.188c10.047-4.25,18.563-11.328,24.594-20.25 C303.094,86.078,303.797,84.969,304.453,83.828z M216.844,39.359c3.219-7.609,8.625-14.109,15.406-18.703 c6.781-4.578,14.938-7.234,23.75-7.234c5.891,0,11.469,1.172,16.547,3.328c7.609,3.219,14.109,8.609,18.688,15.406 c4.594,6.781,7.25,14.922,7.25,23.75c0,5.891-1.172,11.453-3.328,16.531c-3.219,7.625-8.609,14.125-15.406,18.703 c-6.781,4.578-14.922,7.25-23.75,7.25c-5.891,0-11.453-1.188-16.531-3.328c-7.625-3.219-14.125-8.625-18.719-15.406 c-4.563-6.781-7.25-14.922-7.25-23.75C213.5,50.016,214.703,44.438,216.844,39.359z M165.891,83.828h41.672 c4.25,7.375,10.141,13.688,17.172,18.438c3.109,2.094,6.438,3.891,9.953,5.344h-68.797V83.828z M189.297,266.75 c-3.891-7.219-7.75-16.234-11.734-27.438l-1.297-3.672l-3.656-1.344c-2.531-0.938-4.984-2.141-7.359-3.734 c-3.578-2.391-6.969-5.656-10.078-10.563c-3.094-4.875-5.891-11.422-7.875-20.281h-0.016c-0.375-1.688-0.547-3.297-0.547-4.875 c0-3.531,0.859-6.906,2.469-10.125c1.328-2.672,3.203-5.203,5.453-7.5c3.813,5.766,6.953,10.313,8.094,11.469 c3.734,3.734,4.25-5.063,2.484-14.922c-3.25-18.016,5.422-10.063,27.469-52.578h5.469c5.609,0.703,11.641,0.641,17.906,0h113.641 c0.688,1.047,1.422,2.078,2.203,3.109c14.156,18.875,22.203,63.141,22.203,63.141s1.922-3.656,4.781-8.547 c1.734,2.016,3.156,4.188,4.188,6.438c1.422,3.031,2.172,6.203,2.172,9.5c0,1.594-0.172,3.203-0.547,4.891 c-1.328,5.891-3.016,10.781-4.906,14.813c-2.844,6.078-6.109,10.25-9.547,13.313c-3.422,3.063-7.063,5.047-10.859,6.453 l-3.656,1.328l-1.297,3.672c-3.984,11.219-7.859,20.234-11.734,27.469s-7.75,12.656-11.781,16.891l-1.578,1.672l-0.5,2.266 c-1.797,8.25-3.594,17.391-3.594,28.219c0,3.328,0.172,6.813,0.563,10.469c0.438,4.297,1.422,8.328,2.891,12.047 c0.063,0.172,0.156,0.344,0.219,0.516l-50.344,26.453l-55.781-25.875c1.719-4,2.891-8.406,3.375-13.141 c0.375-3.656,0.531-7.141,0.531-10.469c0.016-10.828-1.781-19.984-3.594-28.25l-0.484-2.234l-1.578-1.688 C197.047,279.406,193.172,273.969,189.297,266.75z M188.844,357.266c2.906-2.313,5.594-4.922,7.938-7.844l42.563,19.734 l-9.094,15.141l14.063,14.906L239.125,435l-54.281-74.781C186.219,359.281,187.563,358.313,188.844,357.266z M437.797,459.984 c-0.547,0.938-1.844,2.484-4.031,4.25c-1.922,1.531-4.484,3.266-7.719,5.016c-5.656,3.094-13.328,6.344-23.078,9.406 c-14.625,4.594-33.922,8.813-58.281,11.844c-24.344,3.047-53.781,4.938-88.688,4.938c-33.734,0-62.328-1.766-86.188-4.625 c-17.891-2.156-33.125-4.922-45.844-8.031c-9.547-2.328-17.672-4.844-24.438-7.406c-5.078-1.922-9.375-3.875-12.922-5.766 c-2.672-1.422-4.906-2.813-6.719-4.125c-2.734-1.953-4.469-3.734-5.328-4.953c-0.438-0.594-0.656-1.047-0.734-1.281 c-0.047-0.094-0.047-0.141-0.047-0.141c0-9.297,1.047-17.25,2.875-24.125c1.594-6.047,3.781-11.281,6.453-15.922 c4.672-8.109,10.813-14.469,18.094-19.859c5.453-4.031,11.547-7.469,18.016-10.531c9.688-4.625,20.203-8.375,30.5-12.172 c8.688-3.203,17.203-6.438,25.063-10.406l85.75,118.156l75.938-118.547c3.797,1.969,7.75,3.734,11.813,5.406 c10.188,4.188,21.031,7.813,31.516,11.953c7.859,3.109,15.484,6.516,22.438,10.547c5.219,3.031,10.047,6.422,14.344,10.313 c6.453,5.844,11.75,12.734,15.547,21.594c3.781,8.859,6.094,19.734,6.109,33.563C438.203,459.172,438.109,459.484,437.797,459.984z "></path> </g> </g></svg>
                <h2 class="font-kanit">Médecins en Activité</h2>
                <span class="font-bold">{{$medecin_actif}}</span>
            </div>
            <div class="h-40 rounded-xl bg-amber-100 flex gap-1 items-center justify-center flex-col">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-12 h-12" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M453.047,429.766c-2.016-7.516-4.844-14.25-8.344-20.25c-6.109-10.516-14.234-18.703-23.188-25.188 c-6.703-4.891-13.891-8.844-21.172-12.266c-10.953-5.125-22.125-9.047-32.453-12.875c-10.313-3.781-19.766-7.516-27.094-11.844 c-2.672-1.594-5.094-3.25-7.172-4.969c-3.141-2.625-5.563-5.375-7.328-8.5c-1.766-3.094-2.938-6.594-3.406-10.969 c-0.313-3.125-0.453-6.047-0.453-8.844c0-8.25,1.219-15.438,2.766-22.719c4.625-5.219,8.844-11.422,12.828-18.844 c4.031-7.469,7.813-16.188,11.609-26.531c2.422-1.094,4.875-2.422,7.281-4.031c5.438-3.656,10.625-8.781,14.922-15.594 c4.328-6.813,7.797-15.281,10.141-25.719c0.656-2.906,0.984-5.781,0.984-8.625c0-5.922-1.406-11.563-3.75-16.625 c-1.625-3.5-3.719-6.719-6.125-9.625c1.234-4.563,2.734-10.688,4.063-17.875c1.844-9.969,3.375-21.922,3.375-34.5 c0-8.125-0.641-16.516-2.297-24.797c-1.234-6.203-3.047-12.359-5.625-18.266c-3.844-8.875-9.422-17.219-17.219-24.094 c-7.203-6.391-16.234-11.469-27.125-14.75c-4.609-5.5-9.375-10.188-14.297-14.094c-8.281-6.625-17-11.031-25.906-13.719 C279.188,0.969,270.172,0,261.203,0c-4.734,0-9.469,0.281-14.203,0.688c-4.438,0.406-8.141,0.875-11.438,1.422 c-4.922,0.828-8.984,1.922-12.922,3.297c-3.953,1.359-7.766,2.938-12.734,4.906c-1.891,0.734-4.375,1.844-7.375,3.344 c-5.234,2.641-11.953,6.531-19.156,11.906C172.563,33.625,160.656,45,151.344,60.406c-4.641,7.719-8.625,16.406-11.406,26.156 c-2.813,9.734-4.438,20.5-4.438,32.266c0,7.328,0.625,15.078,2,23.172c0,0.594,0.031,1.109,0.063,1.656 c0.063,1.016,0.156,2.063,0.266,3.156c0.172,1.625,0.359,3.281,0.516,4.688c0.063,0.703,0.125,1.328,0.156,1.813 c0.031,0.25,0.047,0.453,0.047,0.594l0.016,0.172v0.047v0.938l1.984,8.813c-2.859,3.125-5.328,6.625-7.25,10.453 c-2.672,5.328-4.266,11.328-4.25,17.703c-0.016,2.813,0.313,5.688,0.969,8.594l0,0c1.578,6.969,3.641,13.063,6.109,18.359 c3.719,7.953,8.422,14.156,13.641,18.797c4.031,3.625,8.344,6.25,12.609,8.219c3.797,10.297,7.594,19.016,11.594,26.469 c4,7.438,8.203,13.625,12.828,18.844c1.563,7.313,2.781,14.5,2.781,22.75c0,2.813-0.141,5.719-0.469,8.844 c-0.313,3-0.984,5.594-1.922,7.938c-1.422,3.5-3.5,6.469-6.328,9.281c-2.813,2.781-6.406,5.391-10.672,7.813 c-4.328,2.438-9.328,4.719-14.781,6.922c-9.531,3.859-20.406,7.516-31.438,11.922c-8.266,3.297-16.625,7.047-24.625,11.75 c-5.984,3.531-11.75,7.594-17.031,12.438c-7.938,7.281-14.781,16.328-19.5,27.531c-4.75,11.219-7.375,24.5-7.375,40.172 c0,2.203,0.469,4.328,1.219,6.266c0.719,1.828,1.688,3.5,2.844,5.094c2.188,2.969,5,5.609,8.453,8.172 c6.031,4.453,14.078,8.641,24.484,12.563c15.578,5.891,36.484,11.141,63.5,15C182.953,509.594,216.078,512,256,512 c34.625,0,64.109-1.797,88.953-4.781c18.625-2.234,34.641-5.125,48.234-8.453c10.188-2.484,19.016-5.203,26.609-8.078 c5.688-2.156,10.656-4.406,14.984-6.719c3.25-1.719,6.125-3.5,8.672-5.328c3.797-2.75,6.859-5.609,9.188-8.828 c1.156-1.594,2.109-3.313,2.813-5.188c0.703-1.844,1.109-3.875,1.109-5.953C456.563,447.938,455.344,438.344,453.047,429.766z M327.125,358.406l-50.063,78.156l-5.563-38.359l14.188-15.047l-9.203-15.313l38.828-20.422c1.078,1.375,2.219,2.703,3.422,3.938 C321.297,354,324.125,356.313,327.125,358.406z M188.703,264.563c-3.922-7.281-7.828-16.375-11.828-27.688l-1.313-3.688 l-3.688-1.375c-2.563-0.938-5.047-2.141-7.438-3.75c-3.594-2.422-7.031-5.719-10.156-10.656 c-3.125-4.922-5.953-11.531-7.969-20.469l0,0c-0.375-1.688-0.563-3.313-0.563-4.906c0.016-3.578,0.875-6.969,2.5-10.234 c1.344-2.688,3.234-5.234,5.5-7.547c3.844,5.813,7.016,10.406,8.172,11.563c3.766,3.75,4.297-5.109,2.516-15.063 c-3.313-18.281,5.578-10.016,28.156-53.906c45.125,10.031,124-37.938,124-37.938s0.953,21.875,16,41.938 C346.875,139.891,355,184.563,355,184.563s1.938-3.688,4.828-8.625c1.734,2.031,3.172,4.219,4.234,6.5 c1.422,3.047,2.188,6.25,2.188,9.563c0,1.594-0.188,3.25-0.563,4.938c-1.344,5.953-3.047,10.875-4.953,14.969 c-2.859,6.094-6.172,10.313-9.609,13.406c-3.469,3.094-7.141,5.094-10.969,6.5l-3.688,1.344l-1.313,3.719 c-4.016,11.313-7.922,20.406-11.844,27.703s-7.828,12.766-11.875,17.047l-1.594,1.688l-0.5,2.281 c-1.828,8.344-3.625,17.563-3.625,28.469c0,3.375,0.172,6.875,0.547,10.563c0.453,4.344,1.438,8.406,2.922,12.156 c0.078,0.188,0.156,0.344,0.234,0.531L258.625,364l-56.281-26.094c1.734-4.063,2.906-8.5,3.391-13.281l0,0 c0.391-3.688,0.547-7.188,0.547-10.563c0.016-10.906-1.797-20.156-3.625-28.5l-0.484-2.25l-1.609-1.688 C196.531,277.328,192.609,271.859,188.703,264.563z M188.25,355.906c2.922-2.344,5.641-4.984,8.016-7.938l42.922,19.922 l-9.172,15.266l14.203,15.047l-5.25,36.125l-54.766-75.453C185.594,357.922,186.938,356.938,188.25,355.906z M439.422,459.531 c-0.563,0.938-1.875,2.5-4.078,4.281c-1.938,1.563-4.516,3.281-7.781,5.063c-5.703,3.125-13.453,6.391-23.281,9.469 c-14.766,4.656-34.234,8.906-58.813,11.969c-24.563,3.063-54.234,4.969-89.469,4.969c-34.031,0-62.875-1.781-86.953-4.656 c-18.063-2.172-33.422-4.969-46.266-8.094c-9.625-2.344-17.813-4.906-24.641-7.484c-5.125-1.953-9.469-3.922-13.047-5.813 c-2.688-1.438-4.938-2.859-6.781-4.172c-2.734-1.969-4.5-3.75-5.359-4.984c-0.438-0.609-0.656-1.047-0.75-1.297 c-0.031-0.094-0.047-0.156-0.047-0.172c0-9.359,1.063-17.359,2.891-24.328c1.609-6.094,3.828-11.375,6.516-16.047 c4.719-8.172,10.906-14.609,18.25-20.016c5.516-4.063,11.656-7.547,18.188-10.656c9.781-4.656,20.375-8.438,30.781-12.266 c8.75-3.234,17.359-6.484,25.281-10.484L260.563,484l76.625-119.594c3.828,1.969,7.813,3.781,11.906,5.469 c10.281,4.219,21.234,7.859,31.797,12.063c7.922,3.125,15.641,6.547,22.641,10.625c5.266,3.063,10.141,6.469,14.469,10.391 c6.531,5.891,11.844,12.859,15.688,21.797c3.813,8.938,6.156,19.906,6.156,33.875C439.828,458.688,439.719,459.031,439.422,459.531 z"></path> <rect x="318.625" y="449.188" class="st0" width="66.875" height="11.719"></rect> </g> </g></svg>
                <h2 class="font-kanit">Médecins disponible</h2>
                <span class="font-bold">{{$medecin_dispo}}</span>
            </div>
            <div class="h-40 rounded-xl bg-green-100 flex gap-1 items-center justify-center flex-col">
                <svg fill="none" class="w-12 h-12" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill="#333" fill-rule="evenodd"><path d="m43 44h-38v-2h38z"/><path d="m24 7c.5523 0 1 .44772 1 1v6c0 .5523-.4477 1-1 1s-1-.4477-1-1v-6c0-.55228.4477-1 1-1z"/><path d="m20 11c0-.5523.4477-1 1-1h6c.5523 0 1 .4477 1 1s-.4477 1-1 1h-6c-.5523 0-1-.4477-1-1z"/><path d="m28 6h-8c-.5523 0-1 .44772-1 1v8c0 .5523.4477 1 1 1h8c.5523 0 1-.4477 1-1v-8c0-.55228-.4477-1-1-1zm-8-2h8c1.6569 0 3 1.34315 3 3v8c0 1.6569-1.3431 3-3 3h-8c-1.6569 0-3-1.3431-3-3v-8c0-1.65685 1.3431-3 3-3z"/><path d="m9 17c0-1.6569 1.3431-3 3-3h5.2593v2h-5.2593c-.5523 0-1 .4477-1 1v25h-2z"/><path d="m39 17c0-1.6569-1.3431-3-3-3h-5.2593v2h5.2593c.5523 0 1 .4477 1 1v25h2z"/><path d="m24 34c-1.1046 0-2 .8954-2 2v7h-2v-7c0-2.2091 1.7909-4 4-4s4 1.7909 4 4v7h-2v-7c0-1.1046-.8954-2-2-2z"/><path d="m18 24v-4h-4v4z"/><path d="m18 30v-4h-4v4z"/><path d="m26 24v-4h-4v4z"/><path d="m26 30v-4h-4v4z"/><path d="m34 24v-4h-4v4z"/><path d="m34 30v-4h-4v4z"/></g></svg>
                <h2 class="font-kanit">Hopitaux</h2>
                <span class="font-bold">{{$nombre_hopitaux}}</span>
            </div>

        </div>

        <div class="mt-12 pb-20">
            <div class=" flex items-center justify-between">

                <div class="flex items-center justify-center gap-4">
                    <h2 class="text-xl font-kanit font-medium tracking-[.03rem] pl-2">liste des médecins :</h2>
                    <form action="" method="get" class="flex items-center justify-center ">
                        <input type="text" placeholder="trouver un medecin"
                        class="text-xs px-3 py-1 rounded-md border outline-none focus:border-green-500">
                        <button type="submit" class="text-xs px-2 py-1 bg-green-300 ml-2 rounded-md">rechercher</button>
                    </form>
                </div>

                <a href="{{route("admin.medecin")}}"  class="px-4 py-1 text-xs bg-green-300 rounded-md">ajouter un medecin</a>

            </div>

            <div class="mt-6 bg-white rounded text-sm overflow-hidden shadow-sm border text-[small]  ">

                <div class="flex items-center bg-gray-100">
                    <span class="w-[18%] px-2 py-3 border-r">Prénom</span>
                    <span class="w-[16%] px-2 py-3 border-r">Nom</span>
                    <span class="w-[20%] px-2 py-3 border-r">Spécialité</span>
                    <span class="w-[20%] px-2 py-3 border-r">téléphone</span>
                    <span class="basis-[100px] flex-shrink-0 flex-grow-0 px-2 py-3 border-r">disponibilité</span>
                    <span class="pl-3 py-3 basis-[188px] flex-shrink-0 flex-grow-0">Action</span>
                </div>

                {{--Lister les medecins qui se trouve dans la base de donnee--}}
                @foreach($list_medecin as $medecin)


                <div class="flex border-t border-gray-200 items-center text-[small]">

                    <span class="w-[18%] px-2 border-r py-3">{{$medecin->prenom }}</span>
                    <span class="w-[16%] px-2 border-r py-3">{{ $medecin->nom }}</span>
                    <span  class="w-[20%] px-2 border-r py-3">{{$medecin->specialite }}</span>
                    <span class="w-[20%] px-2 border-r py-3">{{$medecin->telephone}}</span>
                    <span class="basis-[100px] flex-shrink-0 flex-grow-0 px-2 border-r py-3">{{$medecin->disponibilite}}</span>
                    <div class=" text-xs flex justify-center gap-3 basis-[188px] flex-shrink-0 flex-grow-0">
                        <button class="bg-green-200 py-1 px-2 rounded" id="btn-affecter" data-id-medecin="{{$medecin->id}}" >affecter</button>
                        <form action="{{ route("delete_medecin",$medecin->id) }}" method="post">
                            @csrf
                             @method('DELETE')
                            <button type="submit" class="bg-red-300 py-1 px-2 rounded">Supprimer</button>
                        </form>
                    </div>
                </div>
                @endforeach
                {{-- FIN de Chaque tour de boucle --}}
            </div>
            <div class="flex gap-2 items-center justify-center m-6">
                {{ $list_medecin->links('pagination') }}
           </div>

        </div>



        <div class="mt-20 ">
            <div class=" flex items-center justify-between">

                <div class="flex items-center justify-center gap-4">
                    <h2 class="text-xl font-kanit font-medium tracking-[.03rem] pl-2">liste des hopitaux :</h2>
                    <form action="" method="get" class="flex items-center justify-center ">
                        <input type="text" placeholder="trouver un hopital"
                        class="text-xs px-3 py-1 rounded-md border outline-none focus:border-green-500">
                        <button type="submit" class="text-xs px-2 py-1 bg-green-300 ml-2 rounded-md">rechercher</button>
                    </form>
                </div>

                <a href="{{route("admin.hopital")}}"  class="px-4 py-1 text-xs bg-green-300 rounded-md">ajouter un hopital</a>

            </div>

            <div class="mt-6 bg-white rounded text-sm overflow-hidden hadow-sm border">

                <div class="flex items-center bg-gray-100 text-[small]">
                    <span class="basis-[60px] flex-shrink-0 flex-grow-0 px-2 py-3 border-r ">Image</span>
                    <span class="w-[22%] px-2 py-3 border-r">Nom</span>
                    <span class="w-[20%] px-2 py-3 border-r">Ville</span>
                    <span class="w-[20%] px-2 py-3 border-r">Adresse</span>
                    <span class="w-[20%] px-2 py-3 border-r">Médecin Chef</span>
                    <span class="basis-[188px] flex-shrink-0 flex-grow-0 pl-3 py-3">Action</span>
                </div>

                {{-- LIISTE DES HOPITAUx QUI SONT DISPONIBLE DANS LA BASE DE DONNEE --}}
                @foreach($list_hopital as $hopital)
                    <div class="flex border-t border-gray-200 items-center  text-[small]">
                        <span class="basis-[60px] flex-shrink-0 flex-grow-0 px-2 border-r py-1 flex items-center">
                            <span class="inline-block rounded border-2 border-gray-400 overflow-hidden">
                                <img src="{{asset('images/hopitaux/'.$hopital->image)}}" alt="" class="h-7">
                            </span>
                        </span>
                        <span class="w-[25%] px-2 border-r py-3">{{$hopital->nom}}</span>
                        <span class="w-[20%] px-2 border-r py-3">{{$hopital->ville}}</span>
                        <span  class="w-[20%] px-2 border-r py-3">{{$hopital->adresse}}</span>
                        <span  class="w-[20%] px-2 border-r py-3">@if($hopital->medecin ) {{$hopital->medecin->prenom}} {{$hopital->medecin->nom}}@else non disponible @endif</span>
                        <div class="basis-[188px] flex-shrink-0 flex-grow-0 text-xs pl-3 flex gap-3">
                            <a href="{{ route("admin.hopital.edit", $hopital->id) }}" class="bg-green-200 py-1 px-2 rounded"> modifier </a>
                            <form action="{{route('delete_hopital',$hopital->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-300 py-1 px-2 rounded">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{--FIN POUR CHAQUE TOUR DE BOUCLE --}}

            </div>
            <div class="flex gap-2 items-center justify-center m-6">
                {{ $list_hopital->links('pagination') }}
           </div>
        </div>


        <div class="mt-20 ">
            <div class=" flex items-center justify-between">

                <h2 class="text-xl font-kanit font-medium tracking-[.03rem] pl-2">liste des demandes :</h2>

            </div>

            <div class="w-full bg-green-100 h-24 mt-4 rounded-lg">

            </div>

            
        </div>

    </section>



    <script>
        const btnAffecter = document.querySelectorAll('#btn-affecter');
        btnAffecter.forEach((item)=>{
            item.addEventListener('click', (e)=>{
                const id = item.getAttribute('data-id-medecin');
                let section = document.createElement('section');
                let sectSibling = document.getElementById('sect-sibling')
                let parent = document.querySelector('main');
                let classValue = `w-full h-[100vh] flex items-center justify-center z-1200 fixed top-0 transition-all ease-in-out duration-300 bg-[rgba(0,0,0,.6)]`
                section.setAttribute('class', classValue);
                section.setAttribute('id', 'sect-affecter');
                section.innerHTML = `
                <div class="w-1/2 bg-white h-60 rounded flex flex-col items-center px-6 py-4 shadow-lg relative z-1200
                    transition-all duration-800 ease-in-out animate-affect">
                    <h1 class="mb-10 tracking-[.4px] text-2xl font-kanit ">Affecter Un Hôpital à Un Médecin</h1>
                    <form action="{{route('affecter')}}" method="post" class="w-full flex flex-col" id="affect">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="${id}" name="id_medecin">
                        <select name="id" id="hop" class="px-4 py-3 bg-gray-100 rounded-lg outline-none border border-gray-300
                        focus:border-[#2ea8bf] transition duration-100 ease">
                            <option value="" selected>Selectionnner un hopital</option>
                            @foreach($list_hopital as $h)
                                <option value="{{$h->id}}">{{$h->nom}}</option>
                            @endforeach
                        </select>
                        <div class="text-center mt-10">
                            <button type="submit" class="px-6 py-2 bg-green-300 rounded mr-2 transition duration-200 hover:bg-[#92f1b4]"  >Valider</button>
                            <button type="button" class="px-6 py-2 bg-red-300 rounded transition duration-200 hover:bg-[#fcaeae]" id="Acloser" >Annuler</button>
                        </div>
                    </form>
                </div>`
                parent.insertBefore(section, sectSibling)
                Acloser = document.getElementById('Acloser').addEventListener('click', AffectCloser)
                let affect = document.getElementById('affect');
                let hop = document.getElementById('hop');
                affect.addEventListener('submit',Affect)
                hop.addEventListener('change', (e)=>{e.target.classList.remove('border-red-500')})

            })
        })

        function Affect(e){
            e.preventDefault();
            let hop = document.getElementById('hop');
            if(hop.value == ""){
                hop.classList.add('border-red-500')
            }else{
                hop.classList.remove('border-red-500')
                e.target.submit();
            }

        }
        function AffectCloser(e){
            x = document.getElementById('sect-affecter');
            document.querySelector('main').removeChild(x);
        }

    </script>
@endsection
