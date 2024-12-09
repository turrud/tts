<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Collection;
use App\Livewire\Dashboard\Formulirs\Forms\CreateForm;

class FormulirCreate extends Component
{
    use WithFileUploads;

    public CreateForm $form;

    public function mount()
    {
    }

    public function save()
    {
        $this->authorize('create', Formulir::class);

        $this->validate();

        $formulir = $this->form->save();

        return redirect()->route('dashboard.formulirs.edit', $formulir);
    }

    public function render()
    {
        return view('livewire.dashboard.formulirs.create', []);
    }
}
