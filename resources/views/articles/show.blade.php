@extends('app')

@section('content')
	    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading"> {{ $article->title }} </div>
				<div class="panel-body">
					
                   
                    <article>
                        {{ $article->body }}
                    </article>
                 
                    
				</div>
			</div>
		</div>
        
	</div>
    
    <div class="row">
		<div class="col-md-6 ">
			<div class="panel panel-default">
				<div class="panel-heading"> New Comments </div>
				<div class="panel-body">
					
                    {!! Form::open() !!}
                    
                    {!! Form::hidden('postid', $article->id ,['class'=>'form-control']) !!}                    	
                    <div class="form-group">
                    {!! Form::label('comment','Enter comment here') !!}
                    {!! Form::textarea('comment',null,['class'=>'form-control','required']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                    
                    
                   
                               
                    
				</div>
			</div>
		</div>
        <div class="col-md-6 ">
			<div class="panel panel-default">
				<div class="panel-heading"> Comments List </div>
				<div class="panel-body">
                 
                 	<ol>
                  @foreach($comment as $comments)
                    <li>
                        <div class="body">{{ $comments->comment }}</div>
                    </li>
                  @endforeach  
                 </ol>         
                    
                
					
				</div>
			</div>
		</div>
	</div>
</div>

@stop