<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('id_ID');

      $limit = 3;

      for ($i = 0; $i < $limit; $i++) {
      \App\Product::insert([
          [
            'product_name'    => 'bpromax',
            'supplier_name'   => 'hbnr',
            'price'           => '190000',
            'id_type'         => 01,
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'product_name'    => 'fittomax',
            'supplier_name'   => 'hbnr',
            'price'           => '145000',
            'id_type'         => 01,
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'product_name'    => 'maxiqplus',
            'supplier_name'   => 'hbnr',
            'price'           => '135000',
            'id_type'         => 01,
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'product_name'    => 'cpro 1lt',
            'supplier_name'   => 'rim',
            'price'           => '100000',
            'id_type'         => 02,
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
          [
            'product_name'    => 'cpro 20lt',
            'supplier_name'   => 'rim',
            'price'           => '2000000',
            'id_type'         => 02,
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
          ],
      ]);
      }
    }
}
