<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-red-800">
                    {{ __("You're logged in!") }}
                    <p>Šis teksts rādās!</p><br>
                    <p class="animate-bounce">Nam Nam</p><br>
                    <img class="hover:scale-75 hover:rotate-180 duration-500 ease-in-out" src="kitty.jpg" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
