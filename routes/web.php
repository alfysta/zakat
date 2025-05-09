<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;

use App\Livewire\Laporan\LaporanZakat;
use App\Livewire\Posts\Kategori;
use App\Livewire\Posts\KategoriCreate;
use App\Livewire\Posts\KategoriUpdate;
use App\Livewire\Posts\PostCreate;
use App\Livewire\Posts\PostEdit;
use App\Livewire\Posts\PostIndex;

use App\Livewire\Zakat\AmilZakat;
use App\Livewire\Zakat\DaftarPenerima;
use App\Livewire\Zakat\EditAmilZakat;
use App\Livewire\Zakat\EditPenerimaZakat;
use App\Livewire\Zakat\InputZakat;
use App\Livewire\Zakat\PenerimaZakat;
use App\Livewire\Zakat\InputAmilZakat;
use App\Livewire\Zakat\Zakat;
use App\Livewire\Zakat\ZakatEdit;

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/amil/', [HomeController::class, 'amilzakat'])->name('home.amil');
Route::get('/home/penerima/', [HomeController::class, 'penerima'])->name('home.penerima');


Route::get('/home/articles/', [ArticleController::class, 'index'])->name('home.articles');
Route::get('/home/articles/{post:slug}', [ArticleController::class, 'show'])->name('home.show');



Route::get('dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('zakat', Zakat::class)->name('zakat.index');
    Route::get('zakat/input', InputZakat::class)->name('zakat.input');
    Route::get('zakat/amil', AmilZakat::class)->name('amil.list');
    
    Route::get('zakat/amil/input', InputAmilZakat::class)->name('amil.input');
    
    Route::get('zakat/penerima', DaftarPenerima::class)->name('penerima.list');
    Route::get('zakat/penerima/input', PenerimaZakat::class)->name('penerima.input');


    Route::get('zakat/amil/{amil:id}/edit', EditAmilZakat::class)->name('amil.edit');
    Route::get('zakat/penerima/{penerima:id}/edit', EditPenerimaZakat::class)->name('penerima.edit');


    Route::get('zakat/{zakat:id}/edit', ZakatEdit::class)->name('zakat.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('laporan', LaporanZakat::class)->name('laporan.index');
    Route::get('laporan/cetak', [LaporanController::class, 'index'])->name('laporan.cetak');
});




Route::middleware(['auth'])->group(function () {
    Route::get('article', PostIndex::class)->name('article.index');
    Route::get('article/created', PostCreate::class)->name('article.created');
    Route::get('article/{post:slug}/edit', PostEdit::class)->name('article.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('article/kategori', Kategori::class)->name('kategori.index');
    Route::get('article/kategori/create', KategoriCreate::class)->name('kategori.create');
    Route::get('article/kategori/{kategori:id}/edit', KategoriUpdate::class)->name('kategori.edit');
});



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


require __DIR__.'/auth.php';
