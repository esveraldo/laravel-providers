<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'Adriana',
            'cnpj' => '38.470.094/0001-35',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Maria Eduarda',
            'cnpj' => '38.470.094/0001-35',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Anna Luiza',
            'cnpj' => '38.470.094/0001-35',
            'user_id' => 1,
        ]);
        
        Cliente::create([
            'nome' => 'Larissa',
            'cnpj' => '38.470.094/0001-35',
            'user_id' => 1,
        ]);
    }
}
