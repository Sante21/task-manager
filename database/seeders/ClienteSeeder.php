<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cliente::factory()->count(10)->create();
        DB::table('clientes')->insert([
            'name' => 'Grupo Jovitec',
            'email' => 'comercial@jovitec.es',
            'phone' => '+34 937 19 01 45',
            'service' => 'Redes y Web',
            'image' => 'images/favicons/Favicon Grupo Jovitec.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Novaproin',
            'email' => 'info@novaproin.com',
            'phone' => '+34 937 18 11 13',
            'service' => 'Redes y Web',
            'image' => 'images/favicons/Favicon Novaproin.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Optica Fabrica',
            'email' => 'opticafabrica5@gmail.com',
            'phone' => '',
            'service' => 'Redes',
            'image' => 'images/favicons/Favicon Optica Fabrica.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Delycar Green',
            'email' => 'jardineria@delycar.com',
            'phone' => '+34 649 11 66 41',
            'service' => 'Redes',
            'image' => 'images/favicons/Favicon Delycar Green.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Proyectos Utopic',
            'email' => 'info@proyectosutopic.es',
            'phone' => '+34 624 865 771',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon Proyectos Utopic.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'ClickHomeBCN',
            'email' => 'info@clickhomebcn.com',
            'phone' => '+34 936 07 48 27',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon ClickHomeBCN.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'BCB Finques',
            'email' => 'comercial@bcbfinques.cat',
            'phone' => '+34 936 07 48 27',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon BCB Finques.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'JDM Piscines',
            'email' => 'jdm@piscines.es',
            'phone' => '+34 934 99 73 17',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon JDM Piscines.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'ORM Rehabilitaciones',
            'email' => 'info@ormrehabilitaciones.com',
            'phone' => '+34 93 720 37 54',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon ORM Rehabilitaciones.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Ecrea',
            'email' => 'info@ecrea.es',
            'phone' => '',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon Ecrea.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Embasol',
            'email' => 'embasol@embasol.com',
            'phone' => '+34 93 638 41 94',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon Embasol.png'
        ]);

        DB::table('clientes')->insert([
            'name' => 'Jordi Adell',
            'email' => 'info@jordiadell.com',
            'phone' => '+34 93 217 00 66',
            'service' => 'Web',
            'image' => 'images/favicons/Favicon Jordi Adell.png'
        ]);
    }
}
