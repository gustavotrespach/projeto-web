<form action="{{ url('pokemons') }}" method="POST">

    @csrf

    <input type="text" name="nome" placeholder="Name" required>

    <input type="text" name="tipo" placeholder="Type" required>

    <input type="text" name="pontosDePoder" placeholder="Strenght" required>

    <button type="submit">Create Pokemon</button>
</form>