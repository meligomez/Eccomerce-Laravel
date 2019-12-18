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
        $table->dateTime('vencimiento')->nullable();
        $table->double('numero', 8,0)->nullable();
        $table->double('codigo', 8, 2)->nullable();
        $table->timestamps();
    });
    //3 Compra
    Schema::create('purchases', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->decimal('total', 8, 2);
        $table->dateTime('fechaCompra');
        $table->integer('descuentoPorcentaje')->nullable();
        $table->string('envio');
        $table->unsignedBigInteger('medioPago_id');
        $table->foreign('medioPago_id')->references('id')->on('payments');
        $table->boolean('estado')->default(1);
        $table->timestamps();
    });
    //4 Producto
    Schema::create('products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('foto')->nullable();
        $table->string('nombre');
        $table->string('descripcion');
        $table->boolean('estado')->default(1);
        $table->decimal('precio', 10, 2);
        $table->integer('stock');
        $table->string('tipoProducto');
        $table->string('anio');
        $table->string('color');
        $table->string('tipoCombustible');
        $table->timestamps();
    });
    //5 Detalle del producto
    Schema::create('detail_products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('product_id');
        $table->string('fotoInterior1')->nullable();
        $table->string('fotoInterior2')->nullable();
        $table->string('fotoExterior1')->nullable();
        $table->string('fotoExterior2')->nullable();
        $table->timestamps();
    });
    //6 Item tiene FK a producto
    Schema::create('items', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->decimal('precio', 10, 2);
        $table->unsignedBigInteger('tipoProduct_id');
        $table->foreign('tipoProduct_id')->references('id')->on('products');
        $table->timestamps();
    });
    //7 Compra_item (tabla intermedia)
    Schema::create('items_purchases', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('compra_id');
        $table->foreign('compra_id')->references('id')->on('purchases');
        $table->unsignedBigInteger('item_id');
        $table->foreign('item_id')->references('id')->on('items');
        $table->integer('descuentoPorcentaje');
        $table->timestamps();
    });
    //8 Carrito
    Schema::create('carts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
        $table->boolean('estado')->default(1);
        $table->timestamps();
    });
    //9 Carrito_producto (tabla intermedia)
    Schema::create('carts_products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('carrito_id');
        $table->foreign('carrito_id')->references('id')->on('carts');
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')->references('id')->on('products');
        $table->integer('cantidad')->nullable();
        $table->timestamps();
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
        // 1 - Detalle_producto
        Schema::dropIfExists('detail_products');
        // 2 - Carrito_producto
        Schema::dropIfExists('carts_products');
        //3 - Compra_items
        Schema::dropIfExists('items_purchases');
        //Como ya no tenemos las TI podemos eliminar las q unicamente otras tablas tenian FK a ellas
        //4 - Carrito
        Schema::dropIfExists('carts');
        //5 - Compra
        Schema::dropIfExists('purchases');
        //8 - Medio de pago
        Schema::dropIfExists('payments');
        //6 -  Item
        Schema::dropIfExists('items');
        //7 - Producto
        Schema::dropIfExists('products');

        //9 - usuarios esta la dejo comentada, xq es fundamental para el login!!
        //Schema::drop('users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('foto');
            $table->dropColumn('estado');
            $table->dropColumn('esAdmin');
        });
    }
}
