<table>
    @foreach ($properties as $property)
        <x-property-row :property="$property" />
    @endforeach
</table>
