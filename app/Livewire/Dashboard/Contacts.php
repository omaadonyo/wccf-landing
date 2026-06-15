<?php

namespace App\Livewire\Dashboard;

use App\Livewire\Dashboard\Crud\ManageCrud;
use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    use ManageCrud;

    public $name, $email, $phone, $subject, $message, $is_read;

    protected function getModelClass(): string { return Contact::class; }

    protected function getFormFields(): array
    {
        return [
            'name' => ['label' => 'Name', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'email' => ['label' => 'Email', 'type' => 'email', 'rules' => 'nullable|email|max:255'],
            'phone' => ['label' => 'Phone', 'type' => 'text', 'rules' => 'nullable|string|max:255'],
            'subject' => ['label' => 'Subject', 'type' => 'text', 'rules' => 'nullable|string|max:255', 'searchable' => true],
            'message' => ['label' => 'Message', 'type' => 'textarea', 'rules' => 'nullable|string'],
            'is_read' => ['label' => 'Read', 'type' => 'checkbox', 'rules' => 'boolean'],
        ];
    }

    public function markAsRead($id)
    {
        Contact::where('id', $id)->update(['is_read' => true]);
        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.dashboard.contacts-index', [
            'records' => $this->getRecords(),
            'title' => 'Contact Messages',
            'fields' => $this->getFormFields(),
            'model' => 'contact',
            'columns' => ['name', 'email', 'subject', 'is_read', 'created_at'],
        ])->layout('layouts.app', ['title' => 'Contact Messages']);
    }
}
