<h1>Listado de Propiedades</h1>
<ul>
    @foreach ($properties as $property)
        <li>
            <a href="{{ route('properties.show', $property->id) }}">
                {{ $property->title }} - ${{ number_format($property->price, 2) }}
            </a>
        </li>
    @endforeach
</ul>
