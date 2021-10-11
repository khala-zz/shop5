<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use App\Models\Product;
use App\Models\Brand;

class ChangeActive extends Command
{
    //private $product;
    //private $brand;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:createbrand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'thay doi active san pham trong ban product';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
       //$this -> product = $product;
       //$this -> brand = $brand;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$this -> brand -> create(['title','nhan hieu test']);
        //exec($this -> product -> update(['is_active',0]));
        $brand = new Brand;

        $brand->title = 'lam';

        $brand->save();
    }
}
