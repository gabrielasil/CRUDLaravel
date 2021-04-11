<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name'=>'João Pedro',
            'email'=>'joaopedro1234@outlook.com',
            'password'=>'admin123',
        ]);

        $user->create([
            'name'=>'Gabriel Magno',
            'email'=>'gabrielmagno1234@outlook.com',
            'password'=>'admin123',
        ]);

        $user->create([
            'name'=>'Tiago Gaspar',
            'email'=>'tiagogaspar1234@outlook.com',
            'password'=>'admin123',
        ]);
    }
}
