<?php

use Livewire\Attributes\Url;
use App\Models\Color;
use Livewire\Volt\Component;

new class extends Component {

    public function with():array
    {
        return [
            'colors' => Color::all(),
        ];
    }

    public function delete(Color $color){
        $color->delete();
    }
    
};?>

<div>
    <table>
        <thead>
            <tr>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colors as $color)
                <tr>
                    <td>{{ $color->name }}</td>
                    <td><a href="{{ url('form-update-color', $color->id) }}">update color</a></td>
                    <td><button wire:click="delete({{ $color->id }})" wire:confirm="Are you sure you want to erase a color?">Deletar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('form-create-color') }}">create color</a>
</div>
