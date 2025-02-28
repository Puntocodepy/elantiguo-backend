<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnVirtualToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique('products_name_unique');
            $table->string('deleted_at_virtual', 20)->virtualAs("IF(products.deleted_at IS NULL, '0000-00-00 00:00:00', products.deleted_at)");
            $table->unique(['name', 'deleted_at_virtual'], 'uk_products_name_deleted_at_virtual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropUnique('uk_products_name_deleted_at_virtual');
            $table->dropColumn(['deleted_at_virtual']);
            $table->unique(['name'], 'products_name_unique');
        });
    }
}
