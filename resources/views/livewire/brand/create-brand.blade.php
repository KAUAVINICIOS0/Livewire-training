<?php

use App\Models\Brand;
use Livewire\Volt\Component;

new class extends Component {

    public $name = '';

    public function create(){
        Brand::create([
            'name' => $this->name,
        ]);
        $this->redirect('/form-read-brand');
    }

}; 
?>

<div>
    <form wire:submit='create'>
        <input wire:model="name">
        <button>Submit</button>
    </form>
</div>
