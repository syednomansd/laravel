@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
			<h1>Edit Blog</h1>
        </div>
    </div>
    <div class="row">
		<div class="col-md-12">
			<form action="{{route('blog.update', $blog->id)}}" method="post">
				<input type="hidden" name="_method" value="PATCH">
				{{csrf_field()}}
				<div class="form-group{{($errors->has('title')) ? $errors->first('title') : ''}}">
					<input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="{{$blog->title}}">
					{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group{{($errors->has('title')) ? $errors->first('description') : ''}}">
					<input type="text" name="description" class="form-control" placeholder="Enter Description Here" value="{{$blog->description}}">
					{!! $errors->first('description', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>
    </div>
</div> 
@endsection   