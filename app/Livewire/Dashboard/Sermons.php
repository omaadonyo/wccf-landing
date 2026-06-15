<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Sermon;
use Livewire\Component;

class Sermons extends Component
{
    use ManageCrud;

    public $title, $slug, $description, $speaker, $audio_url, $video_url, $image, $sermon_date, $content, $is_active;

    protected function getModelClass(): string { return Sermon::class; }

    protected function getFormFields(): array
    {
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'content' => ['label' => 'Content', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'speaker' => ['label' => 'Speaker', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'audio_url' => ['label' => 'Audio URL', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'video_url' => ['label' => 'Video URL', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'image' => ['label' => 'Image', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'sermon_date' => ['label' => 'Sermon Date', 'type' => 'date', 'rules' => 'nullable|date'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Sermons',
            'fields' => $this->getFormFields(),
            'model' => 'sermon',
            'columns' => ['title', 'speaker', 'sermon_date', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Sermons']);
    }
}
