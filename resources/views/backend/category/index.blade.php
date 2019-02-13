@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						<a href="{{route('category.create')}}" class="btn btn-info btn-lg">Add New</a>
						@include('backend.layouts.msg')
						<div class="card-icon">
							<i class="material-icons">assignment</i>
						</div>
						<h3 class="card-title text-center">ALL Categories</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Slug</th>
										<th>Created At</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($categories as $key=>$category)
									<tr>
										<td>{{$key + 1}}</td>
										<td>{{$category->name}}</td>
										<td>{{$category->slug}}</td>
										<td>{{$category->created_at}}</td>
										<td class="td-actions text-right">
											<a href="{{route('category.edit',$category->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
											<form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')
											</form>
											<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{ $category->id }}').submit();
											}else {
											event.preventDefault();
											}"><i class="material-icons">delete</i></button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</div> <!-- end col-md-12 -->
				</div> <!-- end row -->
			</div>
		</div>
		@endsection