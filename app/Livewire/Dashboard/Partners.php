<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Partner;
use Livewire\Component;

class Partners extends Component
{
    use ManageCrud;

    public $name, $logo, $website, $description, $is_active, $sort_order;

    protected function getModelClass(): string { return Partner::class; }

    protected function getFormFields(): array
    {
        return [
            'name' => ['label' => 'Name', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'logo' => ['label' => 'Logo Filename', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'website' => ['label' => 'Website', 'type' => 'url', 'rules' => 'nullable|url|max:255'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'sort_order' => ['label' => 'Sort Order', 'type' => 'number', 'rules' => 'nullable|integer'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Partners',
            'fields' => $this->getFormFields(),
            'model' => 'partner',
            'columns' => ['logo', 'name', 'website', 'sort_order', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Partners']);
    }
}
