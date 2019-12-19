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
            "fotoInterior1" => "/img/imgAutos/Corolla-Exterior1.jpg",
            "fotoInterior2" => "/img/imgAutos/Corrolla-Exterior2.jpg",
            "fotoExterior1" => "/img/imgAutos/Corrolla-Interior1.jpg",
            "fotoExterior2" => "/img/imgAutos/Corrolla-Interior2.jpg",
            "product_id"=>"2"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/far-mondeo-2019-Exterior1.jpg",
            "fotoInterior2" => "/img/imgAutos/far-mondeo-2019-Exterior2.jpg",
            "fotoExterior1" => "/img/imgAutos/far-mondeo-2019-Interior2.jpg",
            "fotoExterior2" => "/img/imgAutos/far-mondeo-2019-Interior1.jpg",
            "product_id"=>"3"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/far-new-mondeo-hibrido-Exterior1.jpg",
            "fotoInterior2" => "/img/imgAutos/far-new-mondeo-hibrido-Exterior2.jpg",
            "fotoExterior1" => "/img/imgAutos/far-new-mondeo-hibrido-Interior1.jpg",
            "fotoExterior2" => "/img/imgAutos/far-new-mondeo-hibrido-Interior2.jpg",
            "product_id"=>"4"
            ]);
        DB::table("detail_products")->insert(
            [
            "fotoInterior1" => "/img/imgAutos/far-nuevo-fiesta-Exterior1.jpg",
            "fotoInterior2" => "/img/imgAutos/far-nuevo-fiesta-Exterior2.jpg",
            "fotoExterior1" => "/img/imgAutos/far-nuevo-fiesta-Interior1.jpg",
            "fotoExterior2" => "/img/imgAutos/far-nuevo-fiesta-Interior2.jpg",
            "product_id"=>"5"
            ]);

    }
}
