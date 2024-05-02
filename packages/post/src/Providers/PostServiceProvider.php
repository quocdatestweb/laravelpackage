<?php
namespace datnguyen\post\Providers;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider{
   public function register()
   {
       //
   }

   /**
    * Bootstrap any application services.
    */
   public function boot()
   {
       //
       $this->loadRoutesFrom(__DIR__."/../../routes/web.php");
   }
}
