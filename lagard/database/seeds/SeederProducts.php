<?php

use Illuminate\Database\Seeder;

class SeederProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación de autos
    DB::table("products")->insert(
        [
        "foto" => "/img/articulo_1-1.jpg",
        "nombre"=>"Peugeot 306",
        "descripcion"=>"Auto de alta gama, especial para pistear",
        "estado"=>True,
        "precio"=>"1900100.2",
        "stock"=>"100",
        "tipoProducto"=>"AUTO",
        "anio"=>"2018",
        "color"=>"Negro",
        "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/articulo_1-2.jpg",
            "nombre"=>"Mercedes Benz - Clase C3",
            "descripcion"=>"Auto comodo para andar en familia",
            "estado"=>True,
            "precio"=>"500000.33",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-audi1.jpg",
            "nombre"=>"Audi A9 - Coupe",
            "descripcion"=>"Este auto esta diseñado para ir a donde sea, cuando sea.",
            "estado"=>True,
            "precio"=>"3500000",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-citroen1.jpg",
            "nombre"=>"Citroen Celsye",
            "descripcion"=>"¿Queres la mejor calidad? Mira el detalle de este vehiculo y sorprendete",
            "estado"=>True,
            "precio"=>"750000.66",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-peugeot2.jpg",
            "nombre"=>"Peugeot 508 - Pack III",
            "descripcion"=>"El auto que te va a hacer ir a todos lados, siempre",
            "estado"=>True,
            "precio"=>"150000.98",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2019",
            "color"=>"Blanco",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-renault1.jpg",
            "nombre"=>"Renault Megane",
            "descripcion"=>"Este auto, no gasta nada!! Con el aguinaldo lo señas, dale que si.",
            "estado"=>True,
            "precio"=>"698000.00",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Rojo",
            "tipoCombustible"=>"Diesel"
        ]);


    }
}
