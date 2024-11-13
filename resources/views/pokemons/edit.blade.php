<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pokemon</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-custom-background bg-cover bg-center h-screen flex justify-center items-center">
        <form action="{{ url(path: 'pokemons/' . $pokemons->id) }}" method="POST" class="max-w-sm mx-auto bg-white rounded-lg p-4 w-2/4">

            @csrf
            @method('PUT')

            <div class="mb-5">
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pokemon Name</label>
                <input type="text" name="nome" value="{{$pokemons->nome }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
            </div>
            <div class="mb-5">
                <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pokemon Type</label>
                <input type="text" name="tipo" value="{{$pokemons->tipo}} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Grass" required />
            </div>

            <div class="mb-5">
                <label for="pontosDePoder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Pokemon Strenght</label>
                <input type="text" name="pontosDePoder" value="{{$pokemons->pontosDePoder }} " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="8000" required />
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Pokemon</button>
        </form>
    </div>
</body>

</html>