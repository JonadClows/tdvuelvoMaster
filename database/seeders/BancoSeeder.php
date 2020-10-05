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
        Banco::create(['name' => 'Banco Pichincha']);
        Banco::create(['name' => 'Banco Produbanco Grupo Promerica']);
        Banco::create(['name' => 'Banco Bolivariano']);
        Banco::create(['name' => 'Banco Diners Club']);
        Banco::create(['name' => 'Banco Austro']);
        Banco::create(['name' => 'Banco Pacífico']);
        Banco::create(['name' => 'Banco Guayaquil']);
        Banco::create(['name' => 'Banco Loja']);
        Banco::create(['name' => 'Banco General Rumiñahui']);
        Banco::create(['name' => 'Banco Internacional']);
        Banco::create(['name' => 'Banco BanEcuador']);
        Banco::create(['name' => 'Banco Machala']);
        Banco::create(['name' => 'Banco Solidario']);
        Banco::create(['name' => 'Banco Coopnacional']);
        Banco::create(['name' => 'Banco Procredit']);
        Banco::create(['name' => 'Banco Comercial de Manabí']);
        Banco::create(['name' => 'Banco Delbank']);
        Banco::create(['name' => 'Banco Desarrollo de los Pueblos']);
        Banco::create(['name' => 'Banco Finca']);
        Banco::create(['name' => 'Banco Visionfund']);
        Banco::create(['name' => 'Banco Dmiro']);
        Banco::create(['name' => 'Banco Citibank']);
        Banco::create(['name' => 'Banco Litoral']);
        Banco::create(['name' => 'Banco Amazonas']);
        Banco::create(['name' => 'Banco Capital']);
        Banco::create(['name' => 'Banco 29 de Octubre']);
        Banco::create(['name' => 'Banco Juventud Ecuatoriana Progresista']);
        Banco::create(['name' => 'Banco Andalucia']);
        Banco::create(['name' => 'Banco Coop. Policía Nacional']);

    }
}