<form action="{{ url(path: 'pokemons/' . $pokemons->id) }}"
method="POST">
    @csrf
    @method('PUT')
    
    <input type="text" name="nome" placeholder="Name"
    value="{{$pokemons->nome }} " required>

    <input type="text" name="tipo" placeholder="Type"
    value="{{$pokemons->tipo}} " required>

    <input type="text" name="pontosDePoder" placeholder="Strenght"
    value="{{$pokemons->pontosDePoder }} "required>

    <button type="submit">Update Pokemon</button>
</form> 