@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						<a href="{{route('slider.create')}}" class="btn btn-info btn-lg">Add New</a>
						<button class="btn btn-primary btn-lg" onclick="demo.showNotification('top','right')">save</button>
						@include('backend.layouts.msg')
						<div class="card-icon">
							<i class="material-icons">assignment</i>
						</div>
						<h4 class="card-title">Simple Table</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Sub Title</th>
										<th>Image</th>
										<th>Created At</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($sliders as $key=>$slider)
									<tr>
										<td>{{$key + 1}}</td>
										<td>{{$slider->title}}</td>
										<td>{{$slider->sub_title}}</td>
										<td><img src="{{asset('frontend/images/slider/'.$slider->image)}}" alt="" height="100" width="100"></td>
										<td>{{$slider->created_at}}</td>
										<td class="td-actions text-right">
											<a href="{{route('slider.edit',$slider->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
											<form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')
											</form>
											<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{ $slider->id }}').submit();
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