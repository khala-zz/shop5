<?php

use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;
use App\Models\News;
//su dung de quy
use App\Components\Recusive;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

//kiem tra super admin
function superAdminCheck()
{
    return auth()->user()->is_super_admin == 1;
}
/**
 * upload file
 *
 *
 * @param $request
 * @param $name
 * @param string $destination
 * @return string
 */
function uploadFile($request, $name, $destination = '',$title = '')
{
    $image = $request->file($name);
    //dat ten image theo ten bai viết
    $title_image = str_replace(" ","_",$title);
    if($title == ''){
        $name = time().'_'.$title_image.'.'.$image->getClientOriginalExtension();
    }
    else{
        $name = $title_image.'.'.$image->getClientOriginalExtension();
    }
    
    

    if($destination == '') {
        $destination = public_path('/uploads');
    }

    $image->move($destination, $name);

    return $name;
}



/**
 * add setting key and value
 *
 *
 * @param $key
 * @param $value
 * @return Setting|bool
 */
function addSetting($key, $value)
{
    if(Setting::where('setting_key', $key)->first() != null)
        return false;

    $setting = new Setting();

    $setting->setting_key = $key;

    $setting->setting_value = $value;

    $setting->save();

    return $setting;
}

/**
 * get setting value by key
 *
 * @param $key
 * @return mixed
 */
function getSetting($key)
{
    return ($setting = Setting::where('setting_key', $key)->first()) != null ? $setting->setting_value:null;
}

//get all setting
function getFourSetting()
{
    return  Setting::take(4) -> get();
}

//get recent news
function getRecentNews()
{
    return  News::select('id','title','created_at') -> where('is_active',1) -> latest() -> take(4) -> get();
}

//san pham ban chay
function getBestSeller()
{
    //get product bán chạy 
        $products_selling = Product::leftJoin('categories','products.category_id','=','categories.id')
        ->leftJoin('orders_products','products.id','=','orders_products.product_id')
        
        ->selectRaw('categories.title catTitle,categories.id catId,products.id,products.title,products.product_code,products.image,products.price,products.new,products.discount,products.pro_total_number,products.pro_total_rating,orders_products.product_id idOrder, COALESCE(sum(orders_products.product_qty),0) total')
        ->groupByRaw('catTitle,catId,idOrder,products.id,products.id,products.title,products.product_code,products.image,products.price,products.new,products.discount,products.pro_total_number,products.pro_total_rating')

        ->orderBy('total','desc')
        ->where('products.is_active',1)
        
        
        ->take(4) -> get(); 
    return  $products_selling;
}
/**
 * check directory exists and try to create it
 *
 *
 * @param $directory
 */
function checkDirectory($directory)
{
    try {
        if (!file_exists(public_path('uploads/' . $directory))) {
            mkdir(public_path('uploads/' . $directory));

            chmod(public_path('uploads/' . $directory), 0777);
        }
    } catch (\Exception $e) {
        die($e->getMessage());
    }
}

/**
 * check if user has permission
 *
 *
 * @param $permission
 * @return bool
 */
function user_can($permission)
{
    return \Auth::user()->is_super_admin == 1 || \Auth::user()->can($permission);
}

// get order chưa xử ly
function getUnreadOrder()
{
    
    return DB::table('orders') -> where('status','Đang xử lý') -> get();
}

// get product cart 
function getProductCart()
{
    $userCart = DB::table('cart') -> where('session_id',Session::get('session_cart_id')) -> get();
    //them phan tu image vao bien userCart thong qua product_id
        foreach($userCart as $key => $products){
            $productDetail = DB::table('products') -> where('id',$products -> product_id) -> first();
            $userCart[$key] -> image = $productDetail -> image;
        }
    return $userCart;
}

//get tong tien price trong gio hang
function getTotalCart(){
    $total_cart = 0;
    $productCart = DB::table('cart') -> where('session_id',Session::get('session_cart_id')) -> get();
    foreach ($productCart as $value) {
        $total_cart = $total_cart + ($value -> price * $value -> quantity);
    }
    return $total_cart;
}

//get aLL product
function getProducts()
{
    
    return \App\Models\Product::all();
}
//get all categories
function getCategories()
{
    $categories = Category::select('id','title','parent_id','image')  -> where('is_active',1) -> get();
    return $categories;
}
// danh cho menu footer
function getFooterCat($parent_id)
{
    $categories = Category::select('id','title') -> where([
        ['is_active',1],
        ['parent_id',$parent_id],
        ]) -> get();
    return $categories;
}

/**
 * get Users
 *
 *
 * @return mixed
 */
function getUsers()
{
    return \App\Models\User::where('is_admin', 0)->where('is_active', 1)->get();
}

function slugify($string, $separator = "-")
    {
        // Slug
        $string = mb_strtolower($string);
        $string = @trim($string);
        $replace = "/(\\s|\\" . $separator . ")+/mu";
        $subst = $separator;
        $string = preg_replace($replace, $subst, $string);

        // Remove unwanted punctuation, convert some to '-'
        $puncTable = [
            // remove
            "'"  => '',
            '"'  => '',
            '`'  => '',
            '='  => '',
            '+'  => '',
            '*'  => '',
            '&'  => '',
            '^'  => '',
            ''   => '',
            '%'  => '',
            '$'  => '',
            '#'  => '',
            '@'  => '',
            '!'  => '',
            '<' => '',
            '>'  => '',
            '?'  => '',
            // convert to minus
            '['  => '-',
            ']'  => '-',
            '{'  => '-',
            '}'  => '-',
            '('  => '-',
            ')'  => '-',
            ' '  => '-',
            ','  => '-',
            ';'  => '-',
            ':'  => '-',
            '/'  => '-',
            '|'  => '-',
            '\\' => '-',
        ];
        $string = str_replace(array_keys($puncTable), array_values($puncTable), $string);

        // Clean up multiple '-' characters
        $string = preg_replace('/-{2,}/', '-', $string);

        // Remove trailing '-' character if string not just '-'
        if ($string != '-') {
            $string = rtrim($string, '-');
        }

        return $string;
    }

//format money
function formatMoney($value)
{
    return number_format($value, 0, '', '.').' đ';
}