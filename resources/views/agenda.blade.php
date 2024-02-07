<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <h1 class="text-3xl font-bold text-gray-800 bg-gray-300 p-4 mb-6">Agenda</h1>
    
    <a href="/create-agenda-item" class="inline-block px-4 py-2 bg-green-500 text-white no-underline mb-4">Create Job</a>

    <form action="/logout" method="POST" class="inline-block ml-4">
        @csrf
        <button type="submit" class="bg-red-500 text-white px-4 py-2">Logout</button>
    </form>

    <div class="mb-4 p-4 bg-white rounded shadow">
        @foreach ($jobs as $job)
            <div class="mb-4">
                <h1 class="text-xl font-bold mb-2">Title: {{ $job['title'] }}</h1>
                <p class="text-gray-700">Beschrijving: {{ $job['description'] }}</p>
                <p class="text-gray-700">BeginDatum: {{ $job['begin_datum'] }}</p>
                <p class="text-gray-700">EindDatum: {{ $job['eind_datum'] }}</p>
                <p class="text-gray-700">Prioriteit: {{ $job['prioriteit'] }}</p>
                <p class="text-gray-700">Status: {{ $job['status'] }}</p>
            <div class="mt-2">
                <a href="/edit-agenda-item/{{$job->id}}" class="text-blue-500 hover:underline mr-4">Edit</a>
                <form action="/delete-agenda-item/{{ $job->id }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>
