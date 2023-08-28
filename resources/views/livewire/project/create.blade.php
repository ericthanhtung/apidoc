<div class="container mx-auto py-10">
    <div class="flex justify-between w-full mb-5 sm:px-6">
        <div class="my-auto font-bold text-3xl dark:text-white">
            {{__('Create Projects')}}
        </div>
    </div>
    <div>
        <form wire:submit.prevent="createProject">
            <div class="sm:p-6">
                <div class="mb-4">
                    <x-label for="name" value="{{ __('Project Name') }}"/>
                    <x-input id="name" type="text" class="mt-1 block w-full"
                             wire:model="name" autocomplete="name"/>
                    <x-input-error for="name" class="mt-2"/>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-4">
                    <div class="col-span-1">
                        <x-label value="{{ __('Project Link') }}"/>
                        <x-input type="text" class="mt-1 block w-full bg-gray-200" disabled placeholder="{{config('app.url')}}/{{Auth::user()->username}}/"/>
                    </div>
                    <div class="col-span-1">
                        <x-label for="slug" value="{{ __('Project Slug') }}"/>
                        <x-input id="slug" type="text" class="mt-1 block w-full"
                                 wire:model="slug" autocomplete="slug"/>
                        <x-input-error for="slug" class="mt-2"/>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="col-span-1">
                        <x-label for="url" value="{{ __('Url') }}"/>
                        <x-input id="url" type="text" class="mt-1 block w-full" wire:model="url" autocomplete="url" placeholder="http://localhost/api"/>
                        <x-input-error for="url" class="mt-2"/>
                    </div>
                </div>
                <div class="mb-4">
                    <x-label for="title" value="{{ __('Title') }}"/>
                    <x-input id="title" type="text" class="mt-1 block w-full" wire:model="title" autocomplete="title"/>
                    <x-input-error for="title" class="mt-2"/>
                </div>
                <div class="mb-4">
                    <x-label for="description" value="{{ __('Description') }}"/>
                    <x-input id="description" type="text" class="mt-1 block w-full" wire:model="description" autocomplete="description"/>
                    <x-input-error for="description" class="mt-2"/>
                </div>
                <div class="mb-4">
                    <x-label for="status" value="{{ __('Visibility Level') }}"/>
                    <div class="flex items-center">
                        <input id="default-radio-1" type="radio" value="0" wire:model="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            Private
                        </label>
                    </div>
                    <div class="text-gray-500 text-sm px-6 mb-4">{{__('Project access must be granted explicitly to each user. If this project is part of a group, access is granted to members of the group.')}}</div>

                    <div class="flex items-center">
                        <input id="default-radio-2" type="radio" value="1" wire:model="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            Public
                        </label>
                    </div>

                    <div class="text-gray-500 text-sm px-6 mb-4">{{__('The project can be accessed without any authentication.')}}</div>

                    <x-input-error for="status" class="mt-2"/>
                </div>

                <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{ __('Create Project') }}</button>
                <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">{{__('Cancel')}}</button>
            </div>
        </form>
    </div>
</div>
