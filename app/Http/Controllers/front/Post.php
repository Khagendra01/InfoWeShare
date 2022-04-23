<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Support\Facades\Input;


class Post extends Controller
{
    function home(){
		$data['result']=DB::table('posts')->orderBy('added_on','desc')->take(6)->get();
		return view('front.home',$data);
	}

	function search(){
		$search_text = Request::get('searchquerry');
		$cnt = DB::table('posts')->where('title','LIKE','%'.$search_text.'%')->orwhere('short_desc','LIKE','%'.$search_text.'%')->count();
		if( $cnt > 0){
		$data['result']=DB::table('posts')->where('title','LIKE','%'.$search_text.'%')->orwhere('short_desc','LIKE','%'.$search_text.'%')->get();		
		return view('front.search',$data);
		}else{			
			return view('front.notfound');
		}
	}
	
	function post($id){
		$data['result']=DB::table('posts')->where('slug',$id)->get();
		return view('front.post',$data);
	}
	public static function page_menu(){
		$result=DB::table('pages')->where('status','1')->get();
		return $result;
	}

	public static function get_type_content($numo){
		$result=DB::table('posts')->where('typo','$numo')->get();
		return $result;
	}
	
	function page($id){
		$data['result']=DB::table('pages')->where('slug',$id)->get();
		return view('front.page',$data);
	}
}
