<div class="hidden sm:flex sm:items-center sm:ml-6">
    <div class="ml-3 relative">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                    >
                        {{ __('navigation.home') }}

                        <svg
                            class="ml-2 -mr-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                            />
                        </svg>
                    </button>
                </span>
            </x-slot>

            <x-slot name="content">

                <x-dropdown-link
                    wire:navigate
                    href="/"
                >
                    View Formulirs
                </x-dropdown-link>
                {{-- @endcan --}}
            </x-slot>
        </x-dropdown>
    </div>
    <div class="ml-3 relative">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                    >
                        {{ __('navigation.apps') }}

                        <svg
                            class="ml-2 -mr-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                            />
                        </svg>
                    </button>
                </span>
            </x-slot>

            <x-slot name="content">
                @can('view-any', App\Models\User::class)
                <x-dropdown-link
                    wire:navigate
                    href="{{ route('dashboard.users.index') }}"
                >
                    {{ __('navigation.users') }}
                </x-dropdown-link>
                @endcan @can('view-any', App\Models\Formulir::class)
                <x-dropdown-link
                    wire:navigate
                    href="{{ route('dashboard.formulirs.index') }}"
                >
                    {{ __('navigation.formulirs') }}
                </x-dropdown-link>
                @endcan
            </x-slot>
        </x-dropdown>
    </div>
</div>
