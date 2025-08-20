<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Volt::route('/form-read-color', 'read-color');

Volt::route('/form-delete-color/{colorid}', 'read-color');

Volt::route('/form-create-color', 'create-color');

Volt::route('/form-update-color/{colorid}', 'update-color');

