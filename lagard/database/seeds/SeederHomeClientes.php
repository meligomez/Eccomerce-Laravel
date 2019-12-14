<?php

use Illuminate\Database\Seeder;

class SeederHomeClientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creación del cliente espasa
        DB::table("home_clients")->insert(
            [
            "foto" => "/img/client-espasa.jpg",
            "nombre"=>"Consesionaria Espasa",
            "comentario"=>"Lagard es un proveedor muy confiable,somos compradores desde hace 50 años y seguimos confiando en su calidad.",
            "estado"=>True
            ]);
        //Creación del cliente Bill gates
        DB::table("home_clients")->insert(
            [
            "foto" => "/img/client-billGates.jpg",
            "nombre"=>"Bill Gates",
            "comentario"=>"Lagard es uno de los mejores concesionarios que pude conocer, siempre que renuevo mi vehículo confio en que ellos tienen la experiencia perfecta para mi decisión.",
            "estado"=>True
            ]);
    }
}
