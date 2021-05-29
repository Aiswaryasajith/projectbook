<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modellogins')->insert([
            'lemail'=>'annl@gmail.com',
            'lpassword'=>'12345',
            'lcpassword'=>'123456'


            
        ]);
    }
}
