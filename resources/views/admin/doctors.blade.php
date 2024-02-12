<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-200">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex justify-between">
                        <h2 class="text-2xl font-bold dark:text-gray-200">Doctors</h2>
                        <a href="doctors/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Doctor</a>
                    </div>
                </div>
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 dark:text-gray-200">Name</th>
                                <th class="px-4 py-2 dark:text-gray-200">Email</th>
                                <th class="px-4 py-2 dark:text-gray-200">Phone</th>
                                <th class="px-4 py-2 dark:text-gray-200">Specialization</th>
                                <th class="px-4 py-2 dark:text-gray-200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="border px-4 py-2 dark:text-gray-200">{{ $doctor->name }}</td>
                                    <td class="border px-4 py-2 dark:text-gray-200">{{ $doctor->email }}</td>
                                    <td class="border px-4 py-2 dark:text-gray-200">{{ $doctor->phone }}</td>
                                    <td class="border px-4 py-2 dark:text-gray-200">{{ $doctor->specialization }}</td>
                                    <td class="border px-4 py-2 dark:text-gray-200">
                                        <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
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
