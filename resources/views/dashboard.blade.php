<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-200 leading-tight">
            <div class="p-6 text-gray-500">
                <p class="mb-4">Olá  <strong>{{ Auth::user()->name }}</strong> , bem-vindo aos seus chamados!</p>
            </div>
        </h3>
    </x-slot>



    <div>

    </div>


</x-app-layout>


