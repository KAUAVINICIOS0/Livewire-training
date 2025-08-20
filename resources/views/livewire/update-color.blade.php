<?php

use Livewire\Attributes\Url;
use App\Models\Color;
use Livewire\Volt\Component;
use function Livewire\Volt\layout;


layout('components.layouts.admin');
 
new class extends Component {
    
    #[Url]
    public $colorid;
    public $name = '';
    
    public $color;
    
    public function mount()
    {
        $color = Color::find($this->colorid);
        $this->name = $color->name;
        $this->color = $color; 
    }

    public function update()
    {
        $this->color->update([
            'name' => $this->name,
        ]);
        $this->redirect('/form-read-color');
    }
}; 
?>


<div>

    <form wire:submit="update">
        <input wire:model="name" type="text">
        
        <button type="submit">Submit</button>
    </form>

    <a href="{{ url('form-read-color') }}">read color</a>

</div>
