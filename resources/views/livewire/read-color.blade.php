<?php

use App\Models\Color;
use Livewire\Volt\Component;

new class extends Component {

    public function with():array
    {
        return [
            'colors' => Color::all(),
        ];
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
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('form-create-color') }}">create color</a>
</div>
