<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    use ManageCrud;

    public $title, $slug, $content, $excerpt, $featured_image, $author, $category, $published_at, $is_featured, $is_active;

    protected function getModelClass(): string { return Post::class; }

    protected function getFormFields(): array
    {
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'content' => ['label' => 'Content', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'excerpt' => ['label' => 'Excerpt', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'featured_image' => ['label' => 'Featured Image', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'author' => ['label' => 'Author', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'category' => ['label' => 'Category', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'published_at' => ['label' => 'Published At', 'type' => 'date', 'rules' => 'nullable|date'],
            'is_featured' => ['label' => 'Featured', 'type' => 'checkbox', 'rules' => 'boolean'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'News / Posts',
            'fields' => $this->getFormFields(),
            'model' => 'post',
            'columns' => ['title', 'author', 'category', 'is_featured', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage News Posts']);
    }
}
