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
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class=" divide-y divide-neutral-200 mt-8 bg-white">
                <div class="px-6 py-4">
                    <details class="group">
                        <summary class="flex font-medium cursor-pointer list-none">
                            <span>Completed</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                        <table class="w-full text-sm text-left rtl:text-right">
                            <thead class="text-s uppercase bg-white shadow-sm">
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


</x-app-layout>