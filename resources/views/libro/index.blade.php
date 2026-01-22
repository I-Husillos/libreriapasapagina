<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->paginas }}</td>
            <td>{{ $libro->precio }}</td>
            <td><a href="{{ route('libro.edit', $libro->id) }}">Editar</a></td>
            <td><a href="{{ route('libro.destroy', $libro->id) }}">Eliminar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>