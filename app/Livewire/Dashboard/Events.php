<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    use ManageCrud;

    public $title, $slug, $description, $type, $event_date, $event_time, $location, $registration_link, $image, $is_featured, $is_active;

    protected function getModelClass(): string { return Event::class; }

    protected function getFormFields(): array
    {
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255', 'searchable' => true],
            'slug' => ['label' => 'Slug', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'description' => ['label' => 'Description', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'type' => ['label' => 'Type', 'type' => 'select', 'rules' => 'required|string|max:255', 'options' => ['Conference' => 'Conference', 'Worship' => 'Worship', 'Fellowship' => 'Fellowship', 'Outreach' => 'Outreach', 'Prayer' => 'Prayer', 'Workshop' => 'Workshop']],
            'event_date' => ['label' => 'Event Date', 'type' => 'date', 'rules' => 'required|date'],
            'event_time' => ['label' => 'Event Time', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'location' => ['label' => 'Location', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'registration_link' => ['label' => 'Registration Link', 'type' => 'url', 'rules' => 'nullable|url|max:255'],
            'image' => ['label' => 'Image', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'is_featured' => ['label' => 'Featured', 'type' => 'checkbox', 'rules' => 'boolean'],
            'is_active' => ['label' => 'Active', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.crud-index', [
            'records' => $this->getRecords(),
            'title' => 'Events',
            'fields' => $this->getFormFields(),
            'model' => 'event',
            'columns' => ['title', 'type', 'event_date', 'location', 'is_featured', 'is_active'],
        ])->layout('layouts.app', ['title' => 'Manage Events']);
    }
}
