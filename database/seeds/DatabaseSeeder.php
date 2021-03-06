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
    factory(App\Product::class,600)->create();
    factory(App\User::class,50)->create();
    factory(App\SellerReview::class,300)->create();
    
    Model::reguard();
  }
}
