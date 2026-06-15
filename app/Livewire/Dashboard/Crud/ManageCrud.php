<?php

namespace App\Livewire\Dashboard\Crud;

use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

trait ManageCrud
{
    use WithPagination, WithoutUrlPagination;

    public bool $showModal = false;
    public ?int $editId = null;
    public ?string $search = '';
    public string $sortField = 'id';
    public string $sortDirection = 'desc';

    abstract protected function getModelClass(): string;
    abstract protected function getFormFields(): array;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function create()
    {
        $this->resetForm();
        $this->editId = null;
        $this->showModal = true;
    }

    public function edit($id)
    {
        $this->resetForm();
        $this->editId = $id;
        $modelClass = $this->getModelClass();
        $record = $modelClass::findOrFail($id);

        foreach ($this->getFormFields() as $field => $config) {
            $this->{$field} = $record->{$field} ?? '';
        }

        $this->showModal = true;
    }

    public function save()
    {
        $rules = [];
        $messages = [];
        foreach ($this->getFormFields() as $field => $config) {
            if (isset($config['rules'])) {
                $rules[$field] = $config['rules'];
            }
        }

        $this->validate($rules, $messages);

        $modelClass = $this->getModelClass();
        $data = [];
        foreach ($this->getFormFields() as $field => $config) {
            $data[$field] = $this->{$field} ?? null;
        }

        if ($this->editId) {
            $record = $modelClass::findOrFail($this->editId);
            $record->update($data);
        } else {
            $modelClass::create($data);
        }

        $this->showModal = false;
        $this->resetForm();
        $this->dispatch('saved');
    }

    public function delete($id)
    {
        $modelClass = $this->getModelClass();
        $modelClass::findOrFail($id)->delete();
        $this->dispatch('saved');
    }

    protected function resetForm()
    {
        foreach ($this->getFormFields() as $field => $config) {
            $this->{$field} = '';
        }
    }

    public function getRecords()
    {
        $modelClass = $this->getModelClass();
        $query = $modelClass::query();

        if ($this->search) {
            $searchable = [];
            foreach ($this->getFormFields() as $field => $config) {
                if (isset($config['searchable']) && $config['searchable']) {
                    $searchable[] = $field;
                }
            }
            if (!empty($searchable)) {
                $query->where(function ($q) use ($searchable) {
                    foreach ($searchable as $i => $field) {
                        if ($i === 0) {
                            $q->where($field, 'like', '%' . $this->search . '%');
                        } else {
                            $q->orWhere($field, 'like', '%' . $this->search . '%');
                        }
                    }
                });
            }
        }

        return $query->orderBy($this->sortField, $this->sortDirection)->paginate(15);
    }
}
