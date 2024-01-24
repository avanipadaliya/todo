<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AddTask') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white. overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

    <table class="w-full text-sm text-left rtl:text-right">
        <thead class="text-s uppercase dark:bg-gray-700 ">
            <tr class="border dark:bg-gray-800 dark:border-gray-700">
                <th scope="col" class="px-6 py-4">
                    Name
                </th>
                <th scope="col" class="px-6 py-4">
                    Description
                </th>
                <th scope="col" class="px-6 py-4">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($mytasks as $task)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$task->taskname}}
                </th>
                <td class="px-6 py-4">
                    {{substr($task->description,0,100)}}
                </td>
                <td class="px-6 py-4">
               <a href="/task/{{$task->id}}"> <x-secondary-button class="ms-4">
                            {{_('Delete')}}
                        </x-secondary-button></a>
                
               <a href="/task/{{$task->id}}/edit"> <x-secondary-button class="ms-4">
                            {{_('Edit')}}
                        </x-secondary-button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>


</x-app-layout>