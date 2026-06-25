<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Directorio de Mascotas</h1>

    @if(session('success'))
        <div style="color: green; padding: 10px; background: #d4edda; border-radius: 4px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pets.create') }}" style="display: inline-block; margin-bottom: 15px;">
        ➕ Registrar Nueva Mascota
    </a>

    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%;">
        <thead style="background: #f8f9fa;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->age }} años</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">No hay mascotas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $pets->links() }}
    </div>
</body>
</html>