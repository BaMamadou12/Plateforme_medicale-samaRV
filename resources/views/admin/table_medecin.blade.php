@extends("admin.dashboard")

@section("contenu")
    <div class="mt-8 bg-white rounded text-sm overflow-hidden shadow-md">
        <div class="flex items-center bg-gray-100 px-4">
            <span class="w-1/12 px-2 py-3">rang</span>
            <span class="w-3/12 px-2 py-3">Prénom et Nom</span>
            <span class="w-2/12 px-2 py-3">Age</span>
            <span class="w-1/12 px-2 py-3">Sexe</span>
            <span class="w-3/12 px-2 py-3">Adresse Exact</span>
            <span class="w-3/12 px-2 py-3">Action</span>
        </div>

        <div class="flex border-t border-gray-200 items-center px-4 py-3">
            <div class="w-1/12">
                <span class="px-4 py-2 bg-green-50 text-center rounded-lg font-kanit font-semibold">01</span>
            </div>
            <span class="w-3/12 px-2 py-1">Djibril Seye Wague</span>
            <span  class="w-2/12 px-2 py-1">22 ans</span>
            <span class="w-1/12 px-2 py-1">M</span>
            <span class="w-3/12 px-2 py-1">Rufisque</span>
            <span class="w-3/12 px-2 py-1 bg-green-100 rounded-lg text-[small] text-center">
                        <a href="{{ route("consultation") }}">
                            Consulter le patient
                        </a>
                    </span>
        </div>

        <div class="flex border-t border-gray-200 items-center px-4 py-3">
            <div class="w-1/12">
                <span class="px-4 py-2 bg-green-50 text-center rounded-lg font-kanit font-semibold">02</span>
            </div>
            <span class="w-3/12 px-2 py-1">Djibril Seye Wague</span>
            <span  class="w-2/12 px-2 py-1">22 ans</span>
            <span class="w-1/12 px-2 py-1">M</span>
            <span class="w-3/12 px-2 py-1">Rufisque</span>
            <span class="w-3/12 px-2 py-1 bg-green-100 rounded-lg text-[small] text-center">
                        <a href="">
                            Consulter le patient
                        </a>
                    </span>
        </div>

        <div class="flex border-t border-gray-200 items-center px-4 py-3">
            <div class="w-1/12">
                <span class="px-4 py-2 bg-green-50 text-center rounded-lg font-kanit font-semibold">03</span>
            </div>
            <span class="w-3/12 px-2 py-1">Djibril Seye Wague</span>
            <span  class="w-2/12 px-2 py-1">22 ans</span>
            <span class="w-1/12 px-2 py-1">M</span>
            <span class="w-3/12 px-2 py-1">Rufisque</span>
            <span class="w-3/12 px-2 py-1 bg-green-100 rounded-lg text-[small] text-center">
                        <a href="">
                            Consulter le patient
                        </a>
                    </span>
        </div>
    </div>
@endsection
