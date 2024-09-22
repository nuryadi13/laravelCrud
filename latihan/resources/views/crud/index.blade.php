<!-- resources/views/crud/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Data CRUD</h1>
        <a href="{{ route('crud.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Data Baru</a>
        
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Jumlah</th>
                    <th class="py-3 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($data as $item)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $item->id }}</td>
                        <td class="py-3 px-6 text-left">{{ $item->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $item->jumlah }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('crud.edit', $item->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('crud.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
