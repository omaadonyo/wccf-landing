<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    use ManageCrud;

    public $name, $position, $organization, $content, $image, $rating, $is_active, $sort_order;

    protected function getModelClass(): string { return Testimonial::class; }

    protected function getFormFields(): array
    {
        return [
            'name' => ['label' => 'Name', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'position' => ['label' => 'Position', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'organization' => ['label' => 'Organization', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'content' => ['label' => 'Content', 'type' => 'textarea', 'rules' => 'required|string'],
            'image' => ['label' => 'Image', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'rating' => ['label' => 'Rating', 'type' => 'number', 'rules' => 'nullable|integer|min:1|max:5'],
            'sort_order' => ['label' => 'Sort Order', 'type' => 'number', 'rules' => 'nullable|integer'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Testimonials',
            'fields' => $this->getFormFields(),
            'model' => 'testimonial',
            'columns' => ['name', 'position', 'rating', 'sort_order', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Testimonials']);
    }
}
