<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\GalleryItem;
use Livewire\Component;

class Gallery extends Component
{
    use ManageCrud;

    public $title, $slug, $category, $image, $description, $is_active, $sort_order;

    protected function getModelClass(): string { return GalleryItem::class; }

    protected function getFormFields(): array
    {
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'category' => ['label' => 'Category', 'type' => 'select', 'rules' => 'nullable|string|max:255', 'options' => ['Conference' => 'Conference', 'Worship' => 'Worship', 'Fellowship' => 'Fellowship', 'Outreach' => 'Outreach', 'Events' => 'Events', 'Prayer' => 'Prayer', 'Teaching' => 'Teaching', 'Leadership' => 'Leadership', 'Workshop' => 'Workshop']],
            'image' => ['label' => 'Image Filename', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'sort_order' => ['label' => 'Sort Order', 'type' => 'number', 'rules' => 'nullable|integer'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Gallery',
            'fields' => $this->getFormFields(),
            'model' => 'gallery_item',
            'columns' => ['image', 'title', 'category', 'sort_order', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Gallery']);
    }
}
