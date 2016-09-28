<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
	{
	    $a = [];
	    for ($i = 1; $i <= 5; $i++) {
	        $a[] = [
	            'name' => 'Best Article ' . $i,
	            'title' => 'Article ' . $i,
	            'author' => 'Author ' . $i,
	            'body' => 'Article Body ' . $i,
	           	'created_at' => Carbon::now(),
	           	'updated_at' => Carbon::now(),
	        ];
	    }
	    DB::table('articles')->insert($a);
	}

	
}
