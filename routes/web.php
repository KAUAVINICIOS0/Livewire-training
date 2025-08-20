<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Volt::route('/', 'welcome');

Volt::route('/form-read-color', 'color.read-color');

Volt::route('/form-delete-color/{colorid}', 'color.read-color');

Volt::route('/form-create-color', 'color.create-color');

Volt::route('/form-update-color/{colorid}', 'color.update-color');

Volt::route('/form-read-brand', 'brand.read-brand');