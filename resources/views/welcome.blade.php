{{-- @component('components.layout') --}}
 
<x-layouts.app 
    title="Home" 
    meta-description="Home meta description">

    {{-- <x-slot name="title"> diseñado para insertar html
       Home Title
    </x-slot> --}}

    {{-- Para tener codigo php debemos poner dos puntos :sum="2 + 2 " --}}
   

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Home!
    </h1>

    @auth
        <div class="text-white">
            Usuario Autenticado: {{ Auth::user()->name}}
        </div>
    @endauth
    
</x-layouts.app>
    

{{-- @endcomponent --}}   
