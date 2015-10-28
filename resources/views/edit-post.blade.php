@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Post</div>
				<div class="panel-body">
					
					{!! Form::open() !!}
                    
                    {!! Form::hidden('postid', $article->id ,['class'=>'form-control']) !!}
                    
                    <div class="form-group">
                    {!! Form::label('title','Title') !!}
                    {!! Form::text('title',$article->title,['class'=>'form-control','required']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('body','body') !!}
                    {!! Form::textarea('body',$article->body,['class'=>'form-control','required']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
