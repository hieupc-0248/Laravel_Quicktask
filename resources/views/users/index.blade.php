<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('users.create') }}">
                <x-primary-button class="mt-4 mb-4">
                    {{__('Create')}}
                </x-primary-button>
            </a>

            <Table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __('Name')}}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __('Username')}}</th>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{ __('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100 text-center" scope="col">{{++$index}}</th>
                        <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->fullname }}</td>
                        <td class="text-gray-900 dark:text-gray-100 text-center">{{ $user->username }}</td>
                        <td class="text-gray-900 dark:text-gray-100 text-center">
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                <x-primary-button>
                                    {{ __('Edit') }}
                                </x-primary-button>
                            </a>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                <x-primary-button>
                                    {{ __('View') }}
                                </x-primary-button>
                            </a>
                            <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <x-primary-button>
                                    {{ __('Delete') }}
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </Table>
        </div>
    </div>
</x-app-layout>
