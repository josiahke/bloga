<?php 

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = [
		'comment',
		'postid'
	];

	/*public function articles()
	{
		return $this->belongsToMany('App\Article');
	}*/

}
