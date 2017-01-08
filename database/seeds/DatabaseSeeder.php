<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'type' => 'supplier',
            'email' => 'supply1@gmail.com',
            'password' => 'password',
            'company_name' => 'Supply Inc',
            'website' => 'supply.com',
            'tax_id' => '123SUPPLY'
        ]);
        DB::table('users')->insert([
            'type' => 'distributor',
            'email' => 'distribute1@gmail.com',
            'password' => 'password',
            'company_name' => 'Distribute Inc',
            'website' => 'distrib.com',
            'tax_id' => '123DISTRIB'
        ]);
        DB::table('products')->insert([
            'name' => 'baby food',
            'brand' => 'Gerber',
            'company' => '1',
            'description' => 'tastes good for babies',
            'price' => 10.99,
            'rating' => 5
        ]);
        DB::table('products')->insert([
            'name' => 'Bacon',
            'brand' => 'USA',
            'company' => '1',
            'description' => 'Bringing bacon freedom to China',
            'price' => 5.99,
            'rating' => 5
        ]);

        Model::unguard();
    }
}
