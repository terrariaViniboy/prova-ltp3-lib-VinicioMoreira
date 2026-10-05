@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="text-xl font-bold">Cadastrar Livro</h2>
</div>

<form method="POST" action="{{ route('livros.store') }}">
    @csrf

    <div class="mb-4">
        <label class="block font-medium mb-1">Título</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}" class="w-full rounded border px-3 py-2">
        @error('titulo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Ano de Publicação</label>
        <input type="text" name="ano_publicacao" value="{{ old('ano_publicacao') }}" class="w-full rounded border px-3 py-2">
        @error('ano_publicacao') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">ISBN</label>
        <input type="text" name="isbn" value="{{ old('isbn') }}" class="w-full rounded border px-3 py-2">
        @error('isbn') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Autor</label>
        <select name="autor_id" class="w-full rounded border px-3 py-2">
            <option value="">Selecione o autor</option>
            @foreach($autores as $autor)
                <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                    {{ $autor->nome }}
                </option>
            @endforeach
        </select>
        @error('autor_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salvar</button>
        <a href="{{ route('livros.index') }}" class="ml-2 text-gray-600 hover:underline">Voltar para listagem</a>
    </div>
</form>
@endsection