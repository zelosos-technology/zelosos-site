<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar um serviço\\') }}
        </h2>
        <div class="h-10 space-x-50">

            {{-- Home page service --}}
            <x-nav-link href="{{ route('services.index') }}" :active="request()
            ->routeIs('services.index')">
                <h1 style="color:blue"> {{ __('Home') }} </h1>
            </x-nav-link>

            {{-- create page service --}}

            <x-nav-link href="{{ route('services.create') }}" :active="request()
            ->routeIs('services.create')">
                <h1 style="color:blue"> {{ __('Criar Serviço') }} </h1>
            </x-nav-link>

        </div>
    </x-slot>

    {{-- content for index --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <div class="px-4 py-4">
                    <form action="{{ route('services.store') }}"method="POST">
                        @csrf

                        <div>
                            <small class="mb-1 text-gray-500 px-auto ">Nota: selecione uma categoria para o novo serviço</small>
                            <select name="category" id="category" class="w-full mb-6 px-auto bg-indigo-50 b">
                                <option value=""> Selecione uma categoria</option>
                                <option value="1"> Redes</option>
                                <option value="2"> Web</option>
                                <option value="3"> Gestão</option>
                            </select>
                        </div>

                        <div class="py-4">
                            <x-label for="title" value="{{ __('Nome do serviço') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                                :value="old('name')" required autofocus autocomplete="name"
                                placeholder="Insira o título do serviço" />
                            <span class="mt-2 text-xs text-gray-500 "> Máximo 100 caracteres </span>
                                    <x-input-error for="name" class="mt-2" />
                        </div>
                        <div class="py-4">
                            <x-label for="description" value="{{ __('Descrição') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                                :value="old('name')" required autofocus autocomplete="name"
                                placeholder="Insira a descrição do serviço" />
                        </div>

                        <x-button class="mt-4">
                            {{ _('Criar serviço') }}
                        </x-button>

                        <br>
                        <br>
                        <br>

                    </form>
                    <div>

                    </div>
                </div>
            </div>
</x-app-layout>
