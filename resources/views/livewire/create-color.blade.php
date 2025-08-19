<?php

use App\Models\Color;
use Livewire\Volt\Component;
use function Livewire\Volt\{state};
 
new class extends Component 
{
    public $name = '';

    public function save()
    {
        Color::create([
            'name' => $this->name 
        ]);
        return redirect('/form-create-color');
    }
}

?>

<div>
    <form wire:submit='save'>
        <input type="text" wire:model.live="name">
        <input type="submit" value="send">
    </form>

</div>
