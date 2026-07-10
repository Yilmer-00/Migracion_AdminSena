@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin-top: 20px;">
    <h2>Registrar Computador</h2>
    <hr>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div style="color: green; background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- El formulario ahora apunta a computer.store --}}
    <form action="{{ route('computer.store') }}" method="POST">
        @csrf

        <div>
            <label>Número de Computador</label><br>
            <input type="text" name="number" value="{{ old('number') }}" style="width: 100%; padding: 8px; margin-top: 5px;">
            @error('number')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <br>

        <div>
            <label>Marca (Brand)</label><br>
            <input type="text" name="brand" value="{{ old('brand') }}" style="width: 100%; padding: 8px; margin-top: 5px;">
            @error('brand')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <br>

        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Guardar Computador
        </button>
    </form>
</div>
@endsection