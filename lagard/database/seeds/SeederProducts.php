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
        "nombre"=>"Consesionaria Espasa",
        "descripcion"=>"Auto1",
        "estado"=>True,
        "precio"=>"1.9001",
        "stock"=>"100",
        "tipoProducto"=>"AUTO",
        "anio"=>"2018",
        "color"=>"Negro",
        "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/articulo_1-2.jpg",
            "nombre"=>"Consesionaria Espasa",
            "descripcion"=>"Auto1",
            "estado"=>True,
            "precio"=>"1.9001",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-audi1.jpg",
            "nombre"=>"Consesionaria Espasa",
            "descripcion"=>"Auto1",
            "estado"=>True,
            "precio"=>"1.90",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-citroen1.jpg",
            "nombre"=>"Consesionaria Espasa",
            "descripcion"=>"Auto1",
            "estado"=>True,
            "precio"=>"1.9",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Negro",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-peugeot2.jpg",
            "nombre"=>"Consesionaria Espasa",
            "descripcion"=>"Auto1",
            "estado"=>True,
            "precio"=>"1.9",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2019",
            "color"=>"Blanco",
            "tipoCombustible"=>"Nafta"
        ]);
        DB::table("products")->insert(
            [
            "foto" => "/img/auto-renault1.jpg",
            "nombre"=>"Consesionaria Espasa",
            "descripcion"=>"Auto1",
            "estado"=>True,
            "precio"=>"1.9",
            "stock"=>"100",
            "tipoProducto"=>"AUTO",
            "anio"=>"2018",
            "color"=>"Rojo",
            "tipoCombustible"=>"Diesel"
        ]);


    }
}
