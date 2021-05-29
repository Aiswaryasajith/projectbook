<?php

use Illuminate\Database\Seeder;

class registrationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelregistration')->insert([
            'fname'=>'anil',
            'lname'=>'kumar',
            'homename'=>'chakkanassery',
            'street'=>'annamanada',
            'city'=>'thrissur',
            'state'=>'thrissur',
            'city'=>'thrissur',
            'state'=>'kerala',
            'phno'=>'4567892345',
            'lemail'=>'admin123@gmail.com',
            'lpassword'=>'anil',
            'lcpassword'=>'anil',
            



            
        ]);
    }
}
