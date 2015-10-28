@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Post</div>
				<div class="panel-body">
					
					{!! Form::open() !!}
                    
                    <div class="form-group">
                    {!! Form::label('title','Title') !!}
                    {!! Form::text('title',null,['class'=>'form-control','required']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::label('body','body') !!}
                    {!! Form::textarea('body',null,['class'=>'form-control','required']) !!}
                    </div>
                    
                    <div class="form-group">
                    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                    </div>
                    
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
