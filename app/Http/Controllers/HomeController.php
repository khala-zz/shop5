<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Product;
use App\Models\News;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
   
    private $setting;
    private $slider;
    private $product;
    private $news;
    private $banner;
    private $category;

    public function __construct(Setting $setting,Slider $slider,Product $product, News $news,Banner $banner, Category $category){
    	$this -> setting = $setting;
    	$this -> slider = $slider;
    	$this -> product =$product;
        $this -> news = $news;
        $this -> banner = $banner;
        $this -> category = $category;
    
    }
    public function home(){
    	//get setting
    	$settings = $this -> setting -> select('setting_key','setting_value') -> where('is_active',1) ->whereNotIn('id',[6,7])->get();

        //get  banner
        $banners = $this -> banner -> select('title','link','image') -> where('is_active',1) ->whereIn('id',[1,2,3,4])->get();

    	//get slider
    	$sliders = $this -> slider -> select('name','nametwo','image_name','namefour') -> where('is_active',1) -> get();

        //danh muc san pham
        $categories = $this -> category -> select('id','image_tron','title') -> where('parent_id',null) -> get();

        //san pham giao hang mien phi
        $product_ship = $this -> product 
                        -> select('id','image','title','price','new','discount','pro_total_rating','pro_total_number','discount_end_date','category_id','product_code') 
                         
                        -> where([
                                   ['is_active',1],
                                   ['ship',1], 
                                ])
                        ->get();
        // san pham flash sale
        $products_flash_sale = $this -> product 
                                -> with('category') 
                                -> where([
                                        ['is_active',1],
                                        ['discount','<>',0],
                                        ['discount_start_date','<>',null],
                                        ['discount_end_date','<>',null],
                                        ]) 
                                -> latest() -> get();

        //get news latest 
        $news = $this -> news  -> select('id','image_name','title','description','cat_news_id') -> where('is_active',1) ->latest() ->  get();

        // count review
        $review_count = $this -> product -> withCount('reviews')->get();

       

        //danh muc thoi trang va con cua no
        $category_thoitrang = $this -> category -> select('image','title','id') -> where('id',1) -> first();
        $category_thoitrang_con = $this -> category -> select('title','id') -> where('parent_id',1) -> get();

        // su dung array  map
        $mapIdProduct = function($category_thoitrang_con){
            return $category_thoitrang_con['id'];
        };
        $id_thoitrang_con = array_map($mapIdProduct,$category_thoitrang_con -> toArray());

        //san pham thuoc danh muc co parent_id la thoi trang lam dep

        $product_thoitrang = $this -> product ->  select('id','image','title','price','new','discount','pro_total_rating','pro_total_number','product_code') -> whereIn('category_id',$id_thoitrang_con) -> get();



        //danh muc cong nghe va con cua no
        $category_congnghe = $this -> category -> select('image','title','id') -> where('id',2) -> first();
        $category_congnghe_con = $this -> category -> select('title','id') -> where('parent_id',2) -> get();

        // su dung array  map
        $mapIdProduct_congnghe = function($category_congnghe_con){
            return $category_congnghe_con['id'];
        };

        $id_congnghe_con = array_map($mapIdProduct_congnghe,$category_congnghe_con -> toArray());

        //san pham thuoc danh muc co parent_id la cong nghe
        $product_congnghe = $this -> product ->  select('id','image','title','price','new','discount','pro_total_rating','pro_total_number','product_code') -> whereIn('category_id',$id_congnghe_con) -> get();

        //danh muc đồ thiết kế nội thất va con cua no
        $category_noithat = $this -> category -> select('image','title','id') -> where('id',3) -> first();
        $category_noithat_con = $this -> category -> select('title','id') -> where('parent_id',3) -> get();

        // su dung array  map
        $mapIdProduct_noithat = function($category_noithat_con){
            return $category_noithat_con['id'];
        };

        $id_noithat_con = array_map($mapIdProduct_noithat,$category_noithat_con -> toArray());

        //san pham thuoc danh muc co parent_id la cong nghe
        $product_noithat = $this -> product ->  select('id','image','title','price','new','discount','pro_total_rating','pro_total_number','product_code') -> whereIn('category_id',$id_noithat_con) -> get();


       

    	return view('frontend.home.home',compact('settings','sliders','news','review_count','banners','category_thoitrang','category_thoitrang_con','product_thoitrang','category_congnghe','category_congnghe_con','product_congnghe','category_noithat','category_noithat_con','product_noithat','products_flash_sale','product_ship','categories'));
    }

   

    
    public function searchProducts(Request $request){

        //sap xếp
        if($request -> orderby){
            $orderBy = $request -> orderby;
        }
        else {
            $orderBy = 'created_at';
        }

        //get product 
        //dùng appends($request -> query()) để giử lại query tren url khi click qua trang khác
                
        $query = $this -> product -> with('category');

        $this->filterAndResponse($request, $query);
        //xu ly cho sap xep a-z,z-a,moi nhat,cu nhat
        if($orderBy == 'title_giam'){
            $query->orderBy('title', 'DESC');
        }
        elseif ($orderBy == 'title_tang') {
            $query->orderBy('title', 'ASC');
        }
        elseif ($orderBy == 'created_at_oldest') {
            $query->orderBy('created_at', 'ASC');
        }
        elseif ($orderBy == 'created_at_latest') {
            $query->orderBy('created_at', 'DESC');
        }
        elseif ($orderBy == 'price_tang') {
            $query->orderBy('price', 'ASC');
        }
        elseif ($orderBy == 'price_giam') {
            $query->orderBy('price', 'DESC');
        }
        else{
            $query->orderBy($orderBy, 'DESC');
        }

        //count product
        $products_count = $query-> where('is_active',1) -> get()   -> append($request -> query());
        
        $products = $query-> where('is_active',1)  -> paginate(12) ->  appends($request -> query());

        //end get product
        $keyword = $request -> search_product;
        return view('frontend.product.search',compact('products','keyword','products_count'));

    }

    //fileter
    private function filterAndResponse($request, $query)
    {
        

        

        if($request->has('search_product') && $request -> search_product <> ''){
             $query-> where('title', 'like', "%" . $request -> search_product . "%") -> orWhere('description', 'like', "%" . $request -> search_product . "%") ;
        }

    }
}
