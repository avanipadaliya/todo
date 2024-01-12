<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AddTask') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                <form method="POST" action="{{route('addtask')}}">
                    @csrf
                    <div>
                        <x-input-label for="taskname" :value="__('Task Name')"/>
                        <x-text-input id="taskname" class="block mt-1 w-full" type="text" :value="old('taskname')" name="taskname" required  autocomplete="taskname"/>
                        <x-input-error :messages="$errors->get('taskname')" class="m-2"/>
                    </div>


                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')"/>
                        <x-textarea-input id="description" class="block mt-1 w-full" rows="5" :value="old('description')" name="description" required autocomplete="description"/>
                        <x-input-error :messages="$errors->get('description')" class="m-2"/>

                    </div>

                    <div class="mt-4">
                        <x-primary-button class="ms-4">
                            {{__('Add Task')}}
                        </x-primary-button>
                </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
