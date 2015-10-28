<?php 

namespace App\Http\Controllers;
use App\Article;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;

class PagesController extends Controller {

	
	public function index()
	{
		$articles = Article::latest()->get(); //latest('published_at')->published()->
		return view('articles.index', compact('articles'));
	}
	

	
	public function newpost()
	{
		//
		return view ('new-post'); 
	}
	
	
	
	public function showpost($id)
	{
		//display one post
		$article = Article::findOrFail($id);
		$comment = Comment::where('postid','=',$id)->get();
		//if (is_null($article)) {  abort(404); } 
		return view ('articles.show',compact('article','comment'));
	}
	
	
	public function savepost()
	{
		$input = Request::all();
		
		/*$article = new Article;
		$article->title = $input['title'];
		$article->body = $input['body'];
		$article->published_at = Carbon:now();
		$article->save();*/
		
		$input['published_at'] = Carbon::now();
		Article::create($input);
		
		return redirect('/');
	}
	
	public function savecomment()
	{
		$input = Request::all();
		$postid = $input["postid"];		
		/*$article = new Article;
		$article->title = $input['title'];
		$article->body = $input['body'];
		$article->published_at = Carbon:now();
		$article->save();*/		
		//$input['published_at'] = Carbon::now();
		Comment::create($input);		
		return redirect('/show-post/'.$postid);
	}
	
	public function editpost($id)
	{
		$article = Article::find($id);
		return view ('edit-post',compact('id','article'));
	}

	
	public function saveeditpost($id)
	{
		$input = Request::all();
		$postid = $input["postid"];		
		
		$article = new Article;
		$article = Article::find($id);
		$article->title = $input['title'];
		$article->body = $input['body'];
		$article->published_at = Carbon::now();
		$article->save();	
			
		//$input['published_at'] = Carbon::now();
		//Comment::create($input);
				
		return redirect('/show-post/'.$postid);
	}

	

}
