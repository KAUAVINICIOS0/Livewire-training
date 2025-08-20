<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;
use App\Models\Brand;

new class extends Component {

    #[Url]
    public $brandid;
    
    public $name = '';
    public $brand;

    public function mount()
    {
        $brand = Brand::find($this->brandid); 
        $this->name = $brand->name;
        $this->brand = $brand;
    }

    public function update()
    {
        $this->brand->update([
            'name' => $this->name,
        ]);
        $this->redirect('/form-read-brand');
    }



}; ?>

<div>
    <form wire:submit="update">
        <input wire:model='name'>
        <button>Submit</button>
    </form>
    <a href="{{ url('/form-read-brand') }}">Back</a>
</div>
