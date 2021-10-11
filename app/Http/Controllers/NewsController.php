<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\CatNews;
use App\Models\Tag;

class NewsController extends Controller
{
    private $news;
	private $cat_news;
	private $tag;
	
	public function __construct(News $news,CatNews $cat_news, Tag $tag){
		$this -> news = $news;
		$this -> cat_news = $cat_news;
		$this -> tag = $tag;
		
	}

    public function detail($slug, $id)
	{
    	//get news detail
		$news = $this -> news ->  where('id',$id) -> first();

        //tag cloud
        $tags = $this -> tag -> all();

		return view('frontend.news.detail',compact('news','tags'));
	}

	public function listCat($slug,$id)
    {
    	
    	//tag cloud
		$tags = $this -> tag -> all();
    	
    	//get tat ca cat_news
    	$cat_news = $this -> cat_news -> select('id','title','parent_id')  -> where('is_active',1) -> get();
    	
    	//get news 
        $news = $this -> news  -> where('is_active',1) ->where('cat_news_id',$id) -> paginate(15);

         //get news right
        $news_right = $this -> news  -> where('is_active',1) -> take(4) -> latest() -> get();
   
    	return view('frontend.news.list',compact('news','cat_news','tags','news_right'));
    }

    //list news
    public function listNews(Request $request)
    {
        
        
        //tag cloud
        $tags = $this -> tag -> all();
        
        //get tat ca cat_news
        
        $cat_news = $this -> cat_news -> select('id','title','parent_id')  -> where('is_active',1) -> get();

        //get news 
        if($request -> catNews && $request -> catNews <> ''){
            $news = $this -> news  -> where([
                ['is_active',1],
                ['cat_news_id',$request -> catNews]
                ]) -> paginate(10);
        }
        else {
            $news = $this -> news  -> where('is_active',1) -> paginate(10);
        }

        
   
        return view('frontend.news.list',compact('news','cat_news','tags'));
    }
    //list news tag
    public function listNewsTag($slug,$id)
    {
    	
    	//tag cloud
		$tags = $this -> tag -> all();
    	
    	
    	//get 1 tag
    	$tag = Tag::find($id);

        //get tat ca tin tuc thuoc 1 tag
        $news_tag =  $tag->news()->paginate(10);

    	return view('frontend.news.tag',compact('news_tag','tags'));
    }

     

    
}
