<?php

use Illuminate\Database\Seeder;
use App\Services\Registrar;
class UserSeeder extends Seeder{
    public function run(){
        $data = [
            'name' => 'LinZH',
            'email' => '1152886797@qq.com',
            'password' =>'235033',
            'desc'=>'管理员'
        ];
        $register = new Registrar();
        $register->create($data);
    }
}