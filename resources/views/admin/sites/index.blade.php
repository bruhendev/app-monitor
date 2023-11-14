<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Site') }}
            </h2>
            <a class="ml-4" href="{{ route('sites.create') }}">Novo</a>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-alerts />
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left"">Site</span></th>
                                    <th scope="col" class="px-6 pb-6"><span style="float: left">Ações</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sites as $site)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">{{ $site->url }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('sites.edit', $site->id) }}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="py-6">
                            {{ $sites->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
