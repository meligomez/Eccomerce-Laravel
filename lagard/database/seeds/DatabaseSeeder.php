<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SeederHomeClientes::class);
        $this->call(SeederDetalleProducto::class);
        $this->call(SeederHomeServices::class);
        $this->call(SeederProducts::class);
    }
}
