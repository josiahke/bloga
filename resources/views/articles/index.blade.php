@extends('app')

@section('content')
	
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">All Articles</div>
				<div class="panel-body">
					
                    @foreach($articles as $article)
                    <article>
                        <h2>
                            <a href="{{ url('/show-post', $article->id) }}">{{ $article->title }}</a> 
                            | <a href="{{ url('/edit-post', $article->id) }}">Edit Post</a> 
                        </h2>
                        <div class="body">{{ $article->body }}</div>
                    </article>
                @endforeach
                    
				</div>
			</div>
		</div>
	</div>
</div>

		

@stop