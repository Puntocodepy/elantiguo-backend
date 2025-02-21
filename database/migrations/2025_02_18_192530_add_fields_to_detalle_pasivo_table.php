<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToDetallePasivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_pasivo', function (Blueprint $table) {
            // 1. Campo 'tax' (enum)
            $table->enum('tax', ['10%', '5%', 'EXENTO'])->default('10%');
            $table->enum('deposit', ['DEPOSITO', 'SALON'])->default('DEPOSITO')->comment('Para donde van ir destinado los materiales');


            // 2. Relación con 'measures' (measure_id)
            $table->unsignedBigInteger('measure_id')->nullable();
            $table->foreign('measure_id')
                ->references('id')
                ->on('measures')
                ->onDelete('set null');

            // 3. Relación con 'measures' (measure_stock_id)
            $table->unsignedBigInteger('measure_stock_id')->nullable();
            $table->foreign('measure_stock_id')
                ->references('id')
                ->on('measures')
                ->onDelete('set null');

            // 4. Campo 'quantity_stock'
            $table->decimal('quantity_stock', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_pasivo', function (Blueprint $table) {
            // Eliminar claves foráneas primero
            $table->dropForeign(['measure_id']);
            $table->dropForeign(['measure_stock_id']);

            // Eliminar columnas
            $table->dropColumn(['tax', 'measure_id', 'measure_stock_id', 'quantity_stock']);
        });
    }
}
