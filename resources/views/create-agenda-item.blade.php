<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Agenda Item</title>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Create Agenda Item</h2>
        <form action="/create-agenda-items" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-600">Title</label>
                <input type="text" id="title" name="title" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-600">Description</label>
                <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="begin_datum" class="block text-gray-600">Begin Datum</label>
                <input type="datetime-local" id="begin_datum" name="begin_datum" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="eind_datum" class="block text-gray-600">Eind Datum</label>
                <input type="datetime-local" id="eind_datum" name="eind_datum" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="prioriteit" class="block text-gray-600">Prioriteit</label>
                <input type="number" id="prioriteit" name="prioriteit" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-600">Status</label>
                <select id="status" name="status" class="w-full border border-gray-300 p-2 rounded">
                    <option value="n">N</option>
                    <option value="b">B</option>
                    <option value="a">A</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Create</button>
        </form>
    </div>
</body>
</html>