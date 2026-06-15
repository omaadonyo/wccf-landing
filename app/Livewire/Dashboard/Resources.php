<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Resource;
use Livewire\Component;

class Resources extends Component
{
    use ManageCrud;

    public $title, $slug, $description, $type, $file_url, $external_link, $image, $is_active;

    protected function getModelClass(): string { return Resource::class; }

    protected function getFormFields(): array
    {
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'type' => ['label' => 'Type', 'type' => 'select', 'rules' => 'nullable|string|max:255', 'options' => ['Document' => 'Document', 'Video' => 'Video', 'Audio' => 'Audio', 'Link' => 'Link']],
            'file_url' => ['label' => 'File URL', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'external_link' => ['label' => 'External Link', 'type' => 'url', 'rules' => 'nullable|url|max:255'],
            'image' => ['label' => 'Image', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Resources',
            'fields' => $this->getFormFields(),
            'model' => 'resource',
            'columns' => ['title', 'type', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Resources']);
    }
}
