<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Island Dreams',
            'price'=>'$100',
        'description'=>'n Island Dreams, Gavin Francis examines our collective fascination with islands. ',
        'category'=>'Biographies',
        'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/815zvRnTVPL.jpg'
        
        
        ],
        
        [
            'name'=>'SLEEPING BEAUTY',
            'price'=>'$63.12',
        'description'=>'Step into the magical world of Childs Play fairy tales… Traditional tales are a well-established part of all cultures. ',
        'category'=>'Childrens',
        'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/91GhOeRWldL.jpg'
        
        
        ],
        [
            'name'=>'The Old Man and the Sea ',
            'price'=>'$41.03',
        'description'=>'The Old Man and the Sea is a short novel written by the American author Ernest Hemingway in 1951 in Cayo Blanco, and published in 1952. ',
        'category'=>'Novels',
        'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71dUEXcxJzL.jpg'
        
        
        ],
        [
            'name'=>'INDIA:A HISTORY',
            'price'=>'$78.12',
        'description'=>'The first single-volume history of India since the 1950s, combining narrative pace and skill with social, economic and cultural analysis.',
        'category'=>'Science Fiction',
        'gallery'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1178761069l/834379.jpg'
        
        
        ],
       
        ]);

    }
}
