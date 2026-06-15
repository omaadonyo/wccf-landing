<?php

namespace App\Livewire\Dashboard;

use App\Models\ContentSection;
use Livewire\Component;

class PageContent extends Component
{
    public string $page = '';
    public array $sections = [];
    public string $title = '';

    public function mount($page = 'home')
    {
        $this->page = $page;
        $this->title = $this->pages[$page] ?? ucfirst($page);
        $this->loadSections();
    }

    public function loadSections()
    {
        $all = ContentSection::where('page', $this->page)->get();
        $this->sections = [];
        foreach ($all as $section) {
            $this->sections[$section->section_key] = [
                'value' => $section->value,
                'type' => $section->type,
            ];
        }
    }

    public $pages = [
        'home' => 'Home Page',
        'about' => 'About Page',
        'members' => 'Member Churches',
        'events' => 'Events Page',
        'gallery' => 'Gallery Page',
        'resources' => 'Resources Page',
        'donate' => 'Donate Page',
        'contact' => 'Contact Page',
    ];

    public function save()
    {
        foreach ($this->sections as $key => $data) {
            ContentSection::set($this->page, $key, $data['value'], $data['type'] ?? 'text');
        }

        session()->flash('saved', true);
    }

    public function render()
    {
        return view('livewire.dashboard.page-content')
            ->layout('layouts.app', ['title' => $this->title . ' Content']);
    }
}
