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

            <form action="{{ url('trainers') }}" method="POST" class="max-w-sm mx-auto bg-white rounded-lg p-4 w-2/4">

                @csrf

                <div class="mb-5">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Trainer Name</label>
                    <input  value='{{$trainer->nome}}'type="text" name="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Trainer</button>
            </form>

    </div>
</body>

</html>