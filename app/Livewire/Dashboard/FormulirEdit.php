<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Formulir;
use Illuminate\Support\Collection;
use App\Livewire\Dashboard\Formulirs\Forms\UpdateForm;

class FormulirEdit extends Component
{
    public ?Formulir $formulir = null;

    public UpdateForm $form;

    public function mount(Formulir $formulir)
    {
        $this->authorize('view-any', Formulir::class);

        $this->formulir = $formulir;

        $this->form->setFormulir($formulir);
    }

    public function save()
    {
        $this->authorize('update', $this->formulir);

        $this->validate();

        $this->form->save();

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.dashboard.formulirs.edit', []);
    }
}
