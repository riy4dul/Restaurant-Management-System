@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						<a href="{{route('item.create')}}" class="btn btn-info btn-md">Add New</a>
						@include('backend.layouts.msg')
						<h3 class="card-title text-center">ALL Items</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
		                                <th>Name</th>
		                                <th>Image</th>
		                                <th>Category Name</th>
		                                <th>Description</th>
		                                <th>Price</th>
		                                <th>Created At</th>
		                                <th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($items as $key=>$item)
									<tr>
										<td style="width: 3%" >{{$key + 1}}</td>
										<td style="width: 9%" >{{$item->name}}</td>
										<td style="width: 11%" ><img src="{{asset('frontend/images/item/'.$item->image)}}" alt="" height="50px" width="100"></td>
										<td style="width: 15%" >{{$item->category->name}}</td>
										<td style="width: 39%" >{{$item->description}}</td>
										<td style="width: 5%">{{$item->price}}</td>
										<td style="width: 10%">{{$item->created_at}}</td>
										<td style="width: 8%" class="td-actions text-right">
											<a href="{{route('item.edit',$item->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
											<form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')
											</form>
											<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{ $item->id }}').submit();
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