<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Leadership;
use Livewire\Component;

class Leadership extends Component
{
    use ManageCrud;

    public $name, $position, $bio, $image, $email, $phone, $sort_order, $is_active;

    protected function getModelClass(): string { return Leadership::class; }

    protected function getFormFields(): array
    {
        return [
            'name' => ['label' => 'Name', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'position' => ['label' => 'Position', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'bio' => ['label' => 'Bio', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'image' => ['label' => 'Image Filename', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'email' => ['label' => 'Email', 'type' => 'email', 'rules' => 'nullable|email|max:255'],
            'phone' => ['label' => 'Phone', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'sort_order' => ['label' => 'Sort Order', 'type' => 'number', 'rules' => 'nullable|integer'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Leadership',
            'fields' => $this->getFormFields(),
            'model' => 'leadership',
            'columns' => ['image', 'name', 'position', 'sort_order', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Leadership']);
    }
}
