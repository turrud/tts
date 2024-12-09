<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 space-y-4">
    <x-ui.breadcrumbs>
        <x-ui.breadcrumbs.link href="/dashboard"
            >Dashboard</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link active
            >{{ __('crud.formulirs.collectionTitle') }}</x-ui.breadcrumbs.link
        >
    </x-ui.breadcrumbs>

    <div class="flex justify-between align-top py-4">
        <x-ui.input
            wire:model.live="search"
            type="text"
            placeholder="Search {{ __('crud.formulirs.collectionTitle') }}..."
        />

        @can('create', App\Models\Formulir::class)
        <a wire:navigate href="{{ route('dashboard.formulirs.create') }}">
            <x-ui.button>New</x-ui.button>
        </a>
        @endcan
    </div>

    {{-- Delete Modal --}}
    <x-ui.modal.confirm wire:model="confirmingDeletion">
        <x-slot name="title"> {{ __('Delete') }} </x-slot>

        <x-slot name="content"> {{ __('Are you sure?') }} </x-slot>

        <x-slot name="footer">
            <x-ui.button
                wire:click="$toggle('confirmingDeletion')"
                wire:loading.attr="disabled"
            >
                {{ __('Cancel') }}
            </x-ui.button>

            <x-ui.button.danger
                class="ml-3"
                wire:click="delete({{ $deletingFormulir }})"
                wire:loading.attr="disabled"
            >
                {{ __('Delete') }}
            </x-ui.button.danger>
        </x-slot>
    </x-ui.modal.confirm>

    {{-- Index Table --}}
    <x-ui.container.table>
        <x-ui.table>
            <x-slot name="head">
                <x-ui.table.header for-crud wire:click="sortBy('name')"
                    >{{ __('crud.formulirs.inputs.name.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('phone')"
                    >{{ __('crud.formulirs.inputs.phone.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('institution')"
                    >{{ __('crud.formulirs.inputs.institution.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('domicile')"
                    >{{ __('crud.formulirs.inputs.domicile.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('event')"
                    >{{ __('crud.formulirs.inputs.event.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.header for-crud wire:click="sortBy('image')"
                    >{{ __('crud.formulirs.inputs.image.label')
                    }}</x-ui.table.header
                >
                <x-ui.table.action-header>Actions</x-ui.table.action-header>
            </x-slot>

            <x-slot name="body">
                @forelse ($formulirs as $formulir)
                <x-ui.table.row wire:loading.class.delay="opacity-75">
                    <x-ui.table.column for-crud
                        >{{ $formulir->name }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $formulir->phone }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $formulir->institution }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $formulir->domicile }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud
                        >{{ $formulir->event }}</x-ui.table.column
                    >
                    <x-ui.table.column for-crud>
                        <x-ui.table.image
                            url="{{ asset('storage/' . $formulir->image) }}"
                            alt="{{ $formulir->image }}"
                        />
                    </x-ui.table.column>
                    <x-ui.table.action-column>
                        @can('update', $formulir)
                        <x-ui.action
                            wire:navigate
                            href="{{ route('dashboard.formulirs.edit', $formulir) }}"
                            >Edit</x-ui.action
                        >
                        @endcan @can('delete', $formulir)
                        <x-ui.action.danger
                            wire:click="confirmDeletion({{ $formulir->id }})"
                            >Delete</x-ui.action.danger
                        >
                        @endcan
                    </x-ui.table.action-column>
                </x-ui.table.row>
                @empty
                <x-ui.table.row>
                    <x-ui.table.column colspan="7"
                        >No {{ __('crud.formulirs.collectionTitle') }} found.</x-ui.table.column
                    >
                </x-ui.table.row>
                @endforelse
            </x-slot>
        </x-ui.table>

        <div class="mt-2">{{ $formulirs->links() }}</div>
    </x-ui.container.table>
</div>
