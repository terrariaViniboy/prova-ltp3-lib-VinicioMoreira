@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="text-xl font-bold">Editar Autor</h2>
</div>

<form method="POST" action="{{ route('autores.update', $autor) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block font-medium mb-1">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $autor->nome) }}" class="w-full rounded border px-3 py-2">
        @error('nome') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Nacionalidade</label>
        <input type="text" name="nacionalidade" value="{{ old('nacionalidade', $autor->nacionalidade) }}" class="w-full rounded border px-3 py-2">
        @error('nacionalidade') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Atualizar</button>
        <a href="{{ route('autores.index') }}" class="ml-2 text-gray-600 hover:underline">Voltar para listagem</a>
    </div>
</form>
@endsection