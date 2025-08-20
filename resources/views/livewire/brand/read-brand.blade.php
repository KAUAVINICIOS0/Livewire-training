<?php

use App\Models\Brand;
use Livewire\Volt\Component;

new class extends Component {
    
    public function with()
    {
        return [
            'brands' => Brand::all(),
        ];       
    }

}; ?>

<div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/') }}">Back</a>
    <a href="{{ url('/form-create-brand') }}">Create Brand</a>
</div>
