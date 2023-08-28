<div class="top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="container mx-auto px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <a href="/" class="flex ml-2 md:mr-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo"/>
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Apidoc</span>
                </a>
            </div>
            <div class="flex items-center">

                <div class="flex items-center ml-3">
                    <x-dropdown align="right" width="48" content-classes="dark:bg-gray-800">
                        <x-slot name="trigger">
                            <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                     src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=FFFFFF&background=111827"
                                     alt="user photo">
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-800 dark:text-white" role="none">
                                    {{Auth::user()->name}}
                                </p>
                                <p class="text-sm text-gray-800 font-medium truncate dark:text-gray-300" role="none">
                                    {{Auth::user()->email}}
                                </p>
                            </div>
                            <div
                                x-data="{
                                    mode: null,
                                    theme: null,
                                    init: function () {
                                        this.theme = localStorage.getItem('theme') || (this.isSystemDark() ? 'dark' : 'light')
                                        this.mode = localStorage.getItem('theme') ? 'manual' : 'auto'
                                        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
                                            if (this.mode === 'manual') return
                                            if (event.matches && (! document.documentElement.classList.contains('dark'))) {
                                                this.theme = 'dark'
                                                document.documentElement.classList.add('dark')
                                            } else if ((! event.matches) && document.documentElement.classList.contains('dark')) {
                                                this.theme = 'light'
                                                document.documentElement.classList.remove('dark')
                                            }
                                        })
                                        $watch('theme', () => {
                                            if (this.mode === 'auto') return

                                            localStorage.setItem('theme', this.theme)

                                            if (this.theme === 'dark' && (! document.documentElement.classList.contains('dark'))) {
                                                document.documentElement.classList.add('dark')
                                            } else if (this.theme === 'light' && document.documentElement.classList.contains('dark')) {
                                                document.documentElement.classList.remove('dark')
                                            }

                                            $dispatch('dark-mode-toggled', this.theme)
                                        })
                                    },

                                    isSystemDark: function () {
                                        return window.matchMedia('(prefers-color-scheme: dark)').matches
                                    },
                                }"
                            >
                                <div class="filament-theme-toggle">
                                    @if (config('filament.dark_mode'))
                                        <button class="flex text-sm dark:text-white dark:hover:bg-white dark:hover:text-gray-800 px-4 py-2" x-show="theme === 'dark'"
                                             x-on:click="close(); mode = 'manual'; theme = 'light'">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                            </svg>
                                            {{ __('Toggle light mode') }}
                                        </button>
                                        <button class="flex text-sm dark:text-white dark:hover:bg-white dark:hover:text-gray-800 px-4 py-2" x-show="theme === 'light'"
                                             x-on:click="close(); mode = 'manual'; theme = 'dark'">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                            </svg>
                                            {{ __('Toggle dark mode') }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();" class="dark:text-white dark:hover:text-gray-800">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>
</div>
