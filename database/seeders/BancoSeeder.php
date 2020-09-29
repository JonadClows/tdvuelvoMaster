<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banco;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banco::create(['name' => 'Banco Bolivariano']);
        Banco::create(['name' => 'Banco Central del Ecuador']);
        Banco::create(['name' => 'Banco Centro Mundo']);
        Banco::create(['name' => 'Banco Continental']);
        Banco::create(['name' => 'Banco de Guayaquil']);
        Banco::create(['name' => 'Banco de Loja']);
        Banco::create(['name' => 'Banco de Machala']);
        Banco::create(['name' => 'Banco del Austro']);
        Banco::create(['name' => 'Banco del Estado']);
        Banco::create(['name' => 'Banco del Pacífico']);
        Banco::create(['name' => 'Banco DELBANK']);
        Banco::create(['name' => 'Banco General Rumiñahui']);
        Banco::create(['name' => 'Banco Internacional']);
        Banco::create(['name' => 'Banco MM Jaramillo Arteaga']);
        Banco::create(['name' => 'Banco Mundial Ecuador']);
        Banco::create(['name' => 'Banco ProCredit Ecuador']);
        Banco::create(['name' => 'Banco Territorial']);
        Banco::create(['name' => 'Banco Universal Unibanco']);
        Banco::create(['name' => 'Banred']);
        Banco::create(['name' => 'Filanbanco']);
        Banco::create(['name' => 'Grupo Financiero Producción - Produbanco']);
        Banco::create(['name' => 'Lloyds Tsb Bank']);
        Banco::create(['name' => 'Mutualista Benalcázar']);
        Banco::create(['name' => 'Mutualista Pichincha']);
        Banco::create(['name' => 'Pacific National Bank']);
        Banco::create(['name' => 'Servipagos']);
        Banco::create(['name' => 'Todo1']);
    }
}
