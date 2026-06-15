<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/members', 'pages.members')->name('members');
Route::view('/events', 'pages.events')->name('events');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/resources', 'pages.resources')->name('resources');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::view('/donate', 'pages.donate')->name('donate');

Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::livewire('dashboard/content/{page}', App\Livewire\Dashboard\PageContent::class)
        ->name('dashboard.content');

    Route::livewire('dashboard/churches', App\Livewire\Dashboard\Churches::class)
        ->name('dashboard.churches');
    Route::livewire('dashboard/events', App\Livewire\Dashboard\Events::class)
        ->name('dashboard.events');
    Route::livewire('dashboard/gallery', App\Livewire\Dashboard\Gallery::class)
        ->name('dashboard.gallery');
    Route::livewire('dashboard/leadership', App\Livewire\Dashboard\Leadership::class)
        ->name('dashboard.leadership');
    Route::livewire('dashboard/partners', App\Livewire\Dashboard\Partners::class)
        ->name('dashboard.partners');
    Route::livewire('dashboard/posts', App\Livewire\Dashboard\Posts::class)
        ->name('dashboard.posts');
    Route::livewire('dashboard/resources', App\Livewire\Dashboard\Resources::class)
        ->name('dashboard.resources');
    Route::livewire('dashboard/sermons', App\Livewire\Dashboard\Sermons::class)
        ->name('dashboard.sermons');
    Route::livewire('dashboard/testimonials', App\Livewire\Dashboard\Testimonials::class)
        ->name('dashboard.testimonials');
    Route::livewire('dashboard/contacts', App\Livewire\Dashboard\Contacts::class)
        ->name('dashboard.contacts');
});

require __DIR__.'/settings.php';
