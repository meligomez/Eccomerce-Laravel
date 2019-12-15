<?php

use Illuminate\Database\Seeder;

class SeederDetalleProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/Audi-A5-Interior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Audi-A5-Interior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Audi-A5-Exterior2.jpg",
            "product_id"=>"1"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/Audi-A5-Interior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Audi-A5-Interior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "product_id"=>"2"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/Audi-A5-Interior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Audi-A5-Interior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "product_id"=>"3"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/Audi-A5-Interior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Audi-A5-Interior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "product_id"=>"4"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/Audi-A5-Interior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Audi-A5-Interior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Audi-A5-Exterior1.jpg",
            "product_id"=>"5"
            ]);

    }
}
