<?php

use App\Product;

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
        Product::create([

        	'name' => 'White Peplum Top',
        	'slug' => 'white_peplum_top',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 39.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.',
        ]);

        Product::create([

        	'name' => 'Flamboyant Pink Top',
        	'slug' => 'flamboyant_pink_top',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 45.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. '
        ]);

        Product::create([

        	'name' => 'Black and White Stripes Dress',
        	'slug' => 'black_white_top',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 56.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.'
        ]);

        Product::create([

        	'name' => 'Black Peplum Top',
        	'slug' => 'black_peplum_top',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 36.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.'
        ]);

        Product::create([

        	'name' => 'Skinny Fit Jeans',
        	'slug' => 'skinny_fit_jeans',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 35.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.'
        ]);

        Product::create([

        	'name' => 'Black Short',
        	'slug' => 'black_short',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 26.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.'
        ]);

       	Product::create([

        	'name' => 'Black Leather Jacket',
        	'slug' => 'black_leather_jacket',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 96.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. '
        ]);

        Product::create([

        	'name' => 'Black Dress',
        	'slug' => 'black_dress',
        	'details' => 'Approx length 66cm/26" (Based on a UK size 8 sample), Mixed fibres, The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 6"',
        	'price' => 85.90,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida.'
        ]);


    }
}
