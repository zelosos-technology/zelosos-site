<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Serviços\\') }}
        </h2>
        <div class="h-10 space-x-50">

            {{-- Home page service --}}
            <x-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.index')">
                <h1 style="color:blue"> {{ __('Home') }} </h1>
            </x-nav-link>

            {{-- create page service --}}

            <x-nav-link href="{{ route('services.create') }}" :active="request()->routeIs('services.create')">
                <h1 style="color:blue"> {{ __('Criar Serviço') }} </h1>
            </x-nav-link>


        </div>
    </x-slot>

    <div class= "mx-auto mt-4 max-w-7 sm:px lg:px-8">
        <x-ui.alerts />
    </div>

    {{-- content for index --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

                <div class="bg-white overflow-hidden shadow-xl">
                    <table class="w-full divide-y divide-blue-200">
                        <thead class="text-xs divide-y divide-gray-200  bg-indigo-600">
                            <tr>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    {{ _('Id') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    {{ _('Título') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    {{ _('Categoria') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase text-center">
                                    {{ _('Descrição') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase text-center">
                                    {{ _('Data de criação') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase text-center">
                                    {{ _('Data de actualização') }}
                                </th>

                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase text-center">
                                    {{ _('O que pretende fazer? ') }}
                                </th>
                            </tr>
                        </thead>

                        <tbody class="font-bold text-blue-500 bg-indigo-200">
                            @foreach ($services as $service)
                                <tr style="align-items:center;">

                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap">
                                    </td>

                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap border-b-2 text-center">
                                        {{ $service->id }}
                                    </td>
                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap ">
                                        {{ $service->title }}
                                    </td>
                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap">
                                        @if ($service->category == 1)
                                            {{ _('REDES') }}
                                        @elseif ($service->category == 2)
                                            {{ _('WEB') }}
                                        @elseif ($service->category == 3)
                                            {{ _('Gestao') }}
                                        @endif
                                    </td>
                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap">
                                        {{ $service->description }}
                                    </td>

                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap">
                                        {{ $service->created_at }}
                                    </td>

                                    <td class="px-2 py-4  border-b-2 whitespace-nowrap">
                                        {{ $service->updated_at }}
                                    </td>

                                    <td class="px-2 py-4 border-b-2 whitespace-nowrap">

                                        <div class="flex justify-start space-x-2">

                                            <a href="{{ route('services.edit', $service) }}"
                                                class="p-auto border-1 border-indigo-200 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="1 1 24 24" stroke="currentColor"
                                                    class="w-10 h-6 text-green-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="3"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>

                                            <form action="{{ route('services.delete', $service) }}" method="POST">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit"
                                                    class="p-auto border-1 border-indigo-200 rounded-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="1 1 24 24" stroke="currentColor"
                                                        class="w-10 h-6 text-red-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="3"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
