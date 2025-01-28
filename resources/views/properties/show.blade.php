<h1>Detalles de la Propiedad</h1>
<h2>{{ $property->title }}</h2>
<p>{{ $property->description }}</p>
<p>Precio: ${{ number_format($property->price, 2) }}</p>

<h3>Transacciones</h3>
<ul>
    @foreach ($property->transactions as $transaction)
        <li>
            Cliente: {{ $transaction->client->name }} <br>
            Monto: ${{ number_format($transaction->amount, 2) }} <br>
            Fecha: {{ $transaction->transaction_date }}
        </li>
    @endforeach
</ul>
