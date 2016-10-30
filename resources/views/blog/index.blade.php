@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
			<h1>Blog</h1>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<table class="table tabele-striped">
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Disciption</th>
						<th>Action</th>
					</tr>
					<a href="{{route('blog.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
					<?php $no = 1; ?>
					@foreach($blogs as $blog)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$blog->title}}</td>
						<td>{{$blog->description}}</td>
						<td>
							<form action="{{route('blog.destroy', $blog->id)}}" method="post">
								<input type="hidden" name="_method" value="delete">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary">Edit</a>
								<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')" name="name" value="delete">
							</form>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>	
	</div>   
</div>   
@endsection