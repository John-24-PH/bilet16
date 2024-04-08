<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventsController::class, 'index']);
Route::put('/edit/{event}', [EventsController::class, 'edit'])->name('edit');


Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::delete('/events/{event}', [EventsController::class, 'destroy'])->name('events.destroy');
