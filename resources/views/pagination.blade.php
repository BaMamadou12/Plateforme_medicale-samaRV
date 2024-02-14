    @if($paginator->hasPages())
        @if ($paginator->onFirstPage())
            <a href="" class="px-2 py-2 bg-green-200 rounded-lg" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                4<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>              
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-2 py-2 bg-green-200 rounded-lg" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                4<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>              
            </a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <a href="" class="px-4 py-2 bg-green-200 rounded-lg text-[small]">{{ $element }}</a>  
            @endif

            @if(is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="px-4 py-2 bg-green-400 rounded-lg text-[small]">{{ $page }}</a> 
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 bg-green-200 rounded-lg text-[small]">{{ $page }}</a> 
                    @endif
                @endforeach
            @endif
        @endforeach
        

        @if ($paginator->hasMorePages() )
            <a href="{{ $paginator->nextPageUrl() }}" class="px-2 py-2 bg-green-200 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>              
            </a>
        @else
        <a href="#" class="px-2 py-2 bg-green-200 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>              
        </a>
        @endif

        
    @endif
    
    
