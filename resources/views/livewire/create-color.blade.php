<?php

use App\Models\Color;
use Livewire\Volt\Component;
 
new class extends Component 
{
    public $name = '';

    public function save()
    {
        Color::create([
            'name' => $this->name 
        ]);
        $this->redirect('/form-read-color');
    }
}

?>

<div>
    <form wire:submit='save'>
        <input type="text" wire:model.live="name">
        <input type="submit" value="send">
    </form>
    <a href="{{ url('form-read-color') }}">read color</a>

</div>
