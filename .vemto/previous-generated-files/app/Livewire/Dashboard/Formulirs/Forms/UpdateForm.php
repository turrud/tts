<?php

namespace App\Livewire\Dashboard\Formulirs\Forms;

use Livewire\Form;
use App\Models\Formulir;
use Illuminate\Validation\Rule;

class UpdateForm extends Form
{
    public ?Formulir $formulir;

    public $name = '';

    public $phone = '';

    public $institution = '';

    public $domicile = '';

    public $event = '';

    public $image = '';

    public $newImage = null;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'institution' => ['required', 'string'],
            'domicile' => ['required', 'string'],
            'event' => ['required'],
            'image' => ['nullable', 'image', 'max:5024'],
        ];
    }

    public function setFormulir(Formulir $formulir)
    {
        $this->formulir = $formulir;

        $this->name = $formulir->name;
        $this->phone = $formulir->phone;
        $this->institution = $formulir->institution;
        $this->domicile = $formulir->domicile;
        $this->event = $formulir->event;
        $this->image = $formulir->image;
    }

    public function save()
    {
        $this->validate();

        $this->processImage();

        $this->formulir->update($this->except(['formulir', 'newImage']));
    }

    public function processImage()
    {
        if (empty($this->newImage)) {
            return;
        }

        $this->formulir->image = $this->newImage->store('formulirs', 'public');
    }

    public function deleteImage()
    {
        $this->newImage = null;
    }
}
