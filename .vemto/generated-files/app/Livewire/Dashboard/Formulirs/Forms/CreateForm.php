<?php

namespace App\Livewire\Dashboard\Formulirs\Forms;

use Livewire\Form;
use App\Models\Formulir;
use Livewire\Attributes\Rule;

class CreateForm extends Form
{
    #[Rule('required|string')]
    public $name = '';

    #[Rule('required|string')]
    public $phone = '';

    #[Rule('required|string')]
    public $institution = '';

    #[Rule('required|string')]
    public $domicile = '';

    #[Rule('required')]
    public $event = '';

    #[Rule('nullable|image|max:5024')]
    public $image = '';

    public $newImage = null;

    public function save()
    {
        $this->validate();

        $this->processImage();

        $formulir = Formulir::create($this->except(['newImage']));

        $this->reset();

        return $formulir;
    }

    public function processImage()
    {
        if (empty($this->newImage)) {
            return;
        }

        $this->image = $this->newImage->store('formulirs', 'public');
    }

    public function deleteImage()
    {
        $this->newImage = null;
    }
}
