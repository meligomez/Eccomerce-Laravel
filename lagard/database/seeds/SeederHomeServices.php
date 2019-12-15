<?php

use Illuminate\Database\Seeder;

class SeederHomeServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación del cliente espasa
        DB::table("home_services")->insert(
            [
            "foto" => "/img/servicio-precio.svg",
            "titulo"=>"Mejores precios del mercado",
            "descripcion"=>"Manejamos los mejores precios para que puedas elegir el vehículo que más te guste",
            "estado"=>True
            ]);
        //Creación del cliente Bill gates
        DB::table("home_services")->insert(
            [
            "foto" => "/img/servicio-calidad.svg",
            "titulo"=>"Calidad en atención y servicio",
            "descripcion"=>"Manejamos los mejores precios para que puedas elegir el vehículo que más te guste.",
            "estado"=>True
            ]);
         //Creación del cliente espasa
         DB::table("home_services")->insert(
            [
            "foto" => "/img/servicio-seguridad.svg",
            "titulo"=>"Protegemos su compra online",
            "descripcion"=>"Manejamos los mejores precios para que puedas elegir el vehículo que más te guste",
            "estado"=>True
            ]);
        //Creación del cliente Bill gates
        DB::table("home_services")->insert(
            [
            "foto" => "/img/servicio-variedad.svg",
            "titulo"=>"Todas las marcas, todos los modelos",
            "descripcion"=>"Manejamos los mejores precios para que puedas elegir el vehículo que más te guste.",
            "estado"=>True
            ]);
          //Creación del cliente Bill gates
        DB::table("home_services")->insert(
            [
            "foto" => "/img/servicio-gestoria.svg",
            "titulo"=>"Gestoría propia",
            "descripcion"=>"Manejamos los mejores precios para que puedas elegir el vehículo que más te guste.",
            "estado"=>True
            ]);
    }
}
