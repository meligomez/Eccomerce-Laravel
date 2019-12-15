<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracionTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //1 Inserto la columna username que la utilizo como "id" del front, la foto que usara como perfil , el estado (activo o no) y si es admin o no
       Schema::table('users', function (Blueprint $table) {
        $table->string('username')->unique();
        $table->string('foto')->nullable()  ;
        $table->boolean('estado')->default(1);
        $table->boolean('esAdmin')->default(0);
    });
    //2 MEdio de pago
    Schema::create('payments', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('descripcion');
        $table->dateTime('vencimiento');
        $table->double('numero', 8,0);
        $table->double('codigo', 8, 2);
    });
    //3 Compra
    Schema::create('purchases', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->decimal('total', 8, 2);
        $table->dateTime('fechaCompra');
        $table->integer('descuentoPorcentaje');
        $table->string('envio');
        $table->unsignedBigInteger('medioPago_id');
        $table->foreign('medioPago_id')->references('id')->on('payments');
        $table->boolean('estado');
    });
    //4 Producto
    Schema::create('products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('foto')->nullable();
        $table->string('nombre');
        $table->string('descripcion');
        $table->boolean('estado');
        $table->decimal('precio', 8, 2);
        $table->integer('stock');
        $table->string('tipoProducto');
    });
    //5 Item tiene FK a producto
    Schema::create('items', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->decimal('precio', 8, 2);
        $table->unsignedBigInteger('tipoProduct_id');
        $table->foreign('tipoProduct_id')->references('id')->on('products');
    });
    //6 Compra_item (tabla intermedia)
    Schema::create('items_purchases', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('compra_id');
        $table->foreign('compra_id')->references('id')->on('purchases');
        $table->unsignedBigInteger('item_id');
        $table->foreign('item_id')->references('id')->on('items');
        $table->integer('descuentoPorcentaje');
    });
    //7 Carrito
    Schema::create('carts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->boolean('estado');
    });
    //8 Carrito_producto (tabla intermedia)
    Schema::create('carts_products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('carrito_id');
        $table->foreign('carrito_id')->references('id')->on('carts');
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')->references('id')->on('products');
        $table->integer('cantidad');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminamos primero las tablas intermedias
        // 1 - Carrito_producto
        Schema::drop('carts_products');
        //2 - Compra_items
        Schema::drop('items_purchases');
        //Como ya no tenemos las TI podemos eliminar las q unicamente otras tablas tenian FK a ellas
        //3 - Carrito
        Schema::drop('carts');
        //4 - Compra
        Schema::drop('purchases');
        //1 -  Item
        Schema::drop('items');
        //1 - Producto
        Schema::drop('products');
        //1 - Medio de pago
        Schema::drop('payments');
        //1 - usuarios esta la dejo comentada, xq es fundamental para el login!!
        //Schema::drop('users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('foto');
            $table->dropColumn('estado');
            $table->dropColumn('esAdmin');
        });
    }
}
