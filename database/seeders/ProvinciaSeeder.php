<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['name' => 'AZUAY',]);
        Provincia::create(['name' => 'BOLIVAR',]);
        Provincia::create(['name' => 'CAÑAR',]);
        Provincia::create(['name' => 'CARCHI',]);
        Provincia::create(['name' => 'COTOPAXI',]);
        Provincia::create(['name' => 'CHIMBORAZO',]);
        Provincia::create(['name' => 'EL ORO',]);
        Provincia::create(['name' => 'ESMERALDAS',]);
        Provincia::create(['name' => 'GUAYAS',]);
        Provincia::create(['name' => 'IMBABURA',]);
        Provincia::create(['name' => 'LOJA',]);
        Provincia::create(['name' => 'LOS RIOS',]);
        Provincia::create(['name' => 'MANABI',]);
        Provincia::create(['name' => 'MORONA SANTIAGO',]);
        Provincia::create(['name' => 'NAPO',]);
        Provincia::create(['name' => 'PASTAZA',]);
        Provincia::create(['name' => 'PICHINCHA',]);
        Provincia::create(['name' => 'TUNGURAHUA',]);
        Provincia::create(['name' => 'ZAMORA CHINCHIPE',]);
        Provincia::create(['name' => 'GALAPAGOS',]);
        Provincia::create(['name' => 'SUCUMBIOS',]);
        Provincia::create(['name' => 'ORELLANA',]);
        Provincia::create(['name' => 'SANTO DOMINGO DE LOS TSACHILAS',]);
        Provincia::create(['name' => 'SANTA ELENA',]);
        Provincia::create(['name' => 'ZONAS NO DELIMITADAS',]);
    }
}
