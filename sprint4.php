

<h1 class="text-2xl font-bold mb-4">{{ $evento->titulo }}</h1>


<form action="{{ route('perguntas.store') }}" method="POST">
    @csrf
    <input type="hidden" name="evento_id" value="{{ $evento->id }}">

    <textarea name="conteudo" rows="4" placeholder="Digite sua pergunta"
        class="w-full border p-2 rounded-md @error('conteudo') border-red-500 @enderror">{{ old('conteudo') }}</textarea>

    
    @error('conteudo')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mt-2">
        Enviar
    </button>
</form>


<h2 class="text-xl font-bold mt-8 mb-4">Perguntas</h2>

@foreach ($perguntas as $pergunta)
    <div class="bg-gray-200 p-4 mb-4 rounded-lg">
        {{ $pergunta->conteudo }}
    </div>
@endforeach


{{ $perguntas->links() }}
