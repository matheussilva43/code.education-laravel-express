@extends('template')

@section('content')
	<h1>Blog Admin</h1>

	<a class="btn btn-success" href="{{ route('admin.posts.create') }}">Create</a>
	<br />
	<br />
	{{-- table.table.table-hover>tr>th*3 --}}

	<table class='table table-hover'>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Action</th>
		</tr>

		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>
					<a class="btn btn-default" href="{{ route('admin.posts.edit', ['id'=> $post->id]) }}">Edit</a>
					<a class="btn btn-danger" href="{{ route('admin.posts.destroy', ['id'=> $post->id]) }}">Destroy</a>
				</td>
			</tr>
		@endforeach
		</table>

		{!! $posts->render() !!}
	</table>
@endsection