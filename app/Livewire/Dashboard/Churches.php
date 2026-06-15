<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Church;
use Livewire\Component;

class Churches extends Component
{
    use ManageCrud;

    public $name, $slug, $region, $district, $address, $history, $pastor_name, $phone, $email, $website, $logo, $description, $is_active;

    protected function getModelClass(): string
    {
        return Church::class;
    }

    protected function getFormFields(): array
    {
        return [
            'name' => ['label' => 'Church Name', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'region' => ['label' => 'Region', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'district' => ['label' => 'District', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'pastor_name' => ['label' => 'Pastor Name', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'phone' => ['label' => 'Phone', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'email' => ['label' => 'Email', 'type' => 'email', 'rules' => 'nullable|email|max:255'],
            'website' => ['label' => 'Website', 'type' => 'url', 'rules' => 'nullable|url|max:255'],
            'address' => ['label' => 'Address', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'history' => ['label' => 'History', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'logo' => ['label' => 'Logo URL', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        $records = $this->getRecords();
        return view('livewire.dashboard.crud-index', [
            'records' => $records,
            'title' => 'Churches',
            'fields' => $this->getFormFields(),
            'model' => 'church',
            'columns' => ['name', 'region', 'district', 'pastor_name', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Churches']);
    }
}
