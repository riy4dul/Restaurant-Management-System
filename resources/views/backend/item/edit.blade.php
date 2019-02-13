@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				@include('backend.layouts.msg')
				<div class="card ">
					<div class="card-header card-header-rose card-header-text">
						<div class="card-text">
							<h4 class="card-title">Edit Category</h4>
						</div>
					</div>
					<div class="card-body ">
						<form method="POST" action="{{route('item.update',$item->id)}}" class="form-horizontal" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="card ">
								<div class="card-header card-header-rose card-header-icon">
									<h4 class="card-title text-center">Create Item Form</h4>
								</div>
								<div class="card-body ">
									<div class="form-group">
										<label class="control-label">Category</label>
										<select class="form-control" name="category">
											@foreach($categories as $category)
											<option {{$category->id == $item->category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Name</label>
										<input type="text" class="form-control" name="name" required="true" value="{{$item->name}}">
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Description</label>
										<textarea class="form-control" name="description" required="true">{{$item->description}}</textarea>
									</div>
									<div class="form-group">
										<label class="bmd-label-floating">Price</label>
										<input type="text" class="form-control " oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="price" value="{{$item->price}}">
									</div>
									<div class="row">
											<div class="col-sm-10">
												<div class="fileinput fileinput-new text-center" data-provides="fileinput">
													<div class="fileinput-new thumbnail">
														<img src="{{asset('frontend/images/item/'.$item->image)}}">
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div>
														<span class="btn btn-rose btn-round btn-file">
															<span class="fileinput-new">Select image</span>
															<span class="fileinput-exists">Change</span>
															<input type="file" name="image" id="image"/>
															
														</span>
														<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
													</div>
												</div>
										</div>
									</div>
									<div class="form-group">
										<a href="{{route('item.index')}}" class="btn btn-danger btn-md" >Back</a>
										<button class="btn btn-primary btn-md" >save</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				</div> <!-- end row -->
			</div>
		</div>
		@endsection