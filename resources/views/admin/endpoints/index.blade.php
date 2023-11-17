<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Endpoints do site ' . $site->url) }}
            </h2>
            <a class="ml-4" href="{{ route('endpoints.create', $site->id) }}">Novo</a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-alerts />
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left"">Endpoint</span></th>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left"">Frequência</span>
                                    </th>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left"">Próxima
                                            Verificação</span></th>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left">Ações</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($endpoints as $endpoint)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">{{ $endpoint->endpoint }}</td>
                                        <td class="px-6 py-4">{{ $endpoint->frequency }}</td>
                                        <td class="px-6 py-4">{{ $endpoint->next_check }}</td>
                                        <td class="px-6 py-4">
                                            <a
                                                href="{{ route('endpoints.edit', [$site->id, $endpoint->id]) }}">Editar</a>
                                            <a href="{{ route('endpoints.checks', $endpoint->id) }}">Logs</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
