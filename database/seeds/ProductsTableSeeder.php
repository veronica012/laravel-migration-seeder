<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_products = [
            [
                'name' => 'quaderno',
                'brand' => 'Pigna',
                'description' => 'A4, monocromo, quadretti-10MM',
                'price' => 1.80
            ],
            [
                'name' => 'evidenziatore',
                'brand' => 'Stabilo',
                'description' => 'tratto 2-5mm, colori assortiti',
                'price' => 1.50
            ]
        ];
        foreach ($data_products as $data_product) {
            $newProduct = new Product();
            $newProduct->name = $data_product['name'];
            $newProduct->brand = $data_product['brand'];
            $newProduct->description =  $data_product['description'];
            $newProduct->price = $data_product['price'];
            $newProduct->save();
        }
    }
}
