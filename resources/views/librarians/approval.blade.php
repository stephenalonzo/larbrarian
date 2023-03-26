<x-layout>
    <div class="bg-white w-full">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-4 px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            School
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Grade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @unless (count($students) == 0)
                        @foreach ($students as $student)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{ $student['id'] }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $student['first_name'] }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{ $student['last_name'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student['school'] }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                    {{ $student['grade'] }}
                                </td>
                                <td class="px-6 py-4 bg-gray-50 flex flex-row items-center space-x-2 dark:bg-gray-800">
                                    <a href="#" class="px-4 py-2 rounded-sm bg-green-600 text-white">Approve</a>
                                    <a href="#" class="px-4 py-2 rounded-sm bg-red-600 text-white">Reject</a>
                                </td>
                            </tr>
                        @endforeach
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
</x-layout>