<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 space-y-4">
    <x-ui.breadcrumbs>
        <x-ui.breadcrumbs.link href="/dashboard"
            >Dashboard</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link href="{{ route('dashboard.formulirs.index') }}"
            >{{ __('crud.formulirs.collectionTitle') }}</x-ui.breadcrumbs.link
        >
        <x-ui.breadcrumbs.separator />
        <x-ui.breadcrumbs.link active
            >Edit {{ __('crud.formulirs.itemTitle') }}</x-ui.breadcrumbs.link
        >
    </x-ui.breadcrumbs>

    <x-ui.toast on="saved"> Formulir saved successfully. </x-ui.toast>

    <div class="w-full text-gray-500 text-lg font-semibold py-4 uppercase">
        <h1>Edit {{ __('crud.formulirs.itemTitle') }}</h1>
    </div>

    <div class="overflow-hidden border rounded-lg bg-white">
        <form class="w-full mb-0" wire:submit.prevent="save">
            <div class="p-6 space-y-3">
                <div class="w-full">
                    <x-ui.label for="name"
                        >{{ __('crud.formulirs.inputs.name.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.name"
                        name="name"
                        id="name"
                        placeholder="{{ __('crud.formulirs.inputs.name.placeholder') }}"
                    />
                    <x-ui.input.error for="form.name" />
                </div>

                <div class="w-full">
                    <x-ui.label for="phone"
                        >{{ __('crud.formulirs.inputs.phone.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.phone"
                        name="phone"
                        id="phone"
                        placeholder="{{ __('crud.formulirs.inputs.phone.placeholder') }}"
                    />
                    <x-ui.input.error for="form.phone" />
                </div>

                <div class="w-full">
                    <x-ui.label for="institution"
                        >{{ __('crud.formulirs.inputs.institution.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.institution"
                        name="institution"
                        id="institution"
                        placeholder="{{ __('crud.formulirs.inputs.institution.placeholder') }}"
                    />
                    <x-ui.input.error for="form.institution" />
                </div>

                <div class="w-full">
                    <x-ui.label for="domicile"
                        >{{ __('crud.formulirs.inputs.domicile.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.text
                        class="w-full"
                        wire:model="form.domicile"
                        name="domicile"
                        id="domicile"
                        placeholder="{{ __('crud.formulirs.inputs.domicile.placeholder') }}"
                    />
                    <x-ui.input.error for="form.domicile" />
                </div>

                <div class="w-full">
                    <x-ui.label for="event"
                        >{{ __('crud.formulirs.inputs.event.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.select
                        wire:model="form.event"
                        class="w-full"
                        id="event"
                        name="event"
                    >
                        <option value="">Select</option>
                        <option value="Flower Bouquet | 18 Dec | 13:00 | IDR 25.000">Flower bouquet 18 dec 13 00 idr 25 000</option>
                        <option value="Flower Bouquet | 18 Dec | 14:00 | IDR 25.000">Flower bouquet 18 dec 14 00 idr 25 000</option>
                        <option value="Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000">Lomba sketsa a4 18 dec 15 00 idr 30 000</option>
                        <option value="Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000">Lomba poster a3 19 dec 09 00 idr 30 000</option>
                        <option value="Mewarnai A | 19 Dec | 13:00 | IDR 30.000">Mewarnai a 19 dec 13 00 idr 30 000</option>
                        <option value="Mewarnai B | 19 Dec | 15:00 | IDR 30.000">Mewarnai b 19 dec 15 00 idr 30 000</option>
                        <option value="Painting Ashtray | 20 Dec | 13:00 | IDR 20.000">Painting ashtray 20 dec 13 00 idr 20 000</option>
                        <option value="Lomba Puisi | 20 Dec | 15:00 | IDR 30.000">Lomba puisi 20 dec 15 00 idr 30 000</option>
                        <option value="Mirror Decoration | 20 Dec | 15:00 | IDR 30.000">Mirror decoration 20 dec 15 00 idr 30 000</option>
                    </x-ui.input.select>
                    <x-ui.input.error for="event" />
                </div>

                <div class="w-full">
                    <x-ui.label for="image"
                        >{{ __('crud.formulirs.inputs.image.label')
                        }}</x-ui.label
                    >
                    <x-ui.input.image
                        :src="$form->newImage ? Storage::url($form->newImage) : Storage::url($form->image)"
                        wire:model="form.newImage"
                        x-on:removed="$form->deleteImage()"
                        class="w-full"
                        id="image"
                        name="image"
                    />
                    <x-ui.input.error for="form.newImage" />
                </div>
            </div>

            <div class="flex justify-between mt-4 border-t border-gray-50 p-4">
                <div>
                    <!-- Other buttons here -->
                </div>
                <div>
                    <x-ui.button type="submit">Save</x-ui.button>
                </div>
            </div>
        </form>
    </div>
</div>
