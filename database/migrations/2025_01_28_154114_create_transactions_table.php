<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // propiedad asociada
            $table->foreignId('client_id')->constrained()->onDelete('cascade'); // cliente asociado
            $table->foreignId('agent_id')->constrained()->onDelete('cascade'); // agente asociado
            $table->date('transaction_date'); // fecha de la transacción
            $table->string('type'); // compra o renta
            $table->decimal('amount', 15, 2); // monto de la transacción
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
;
