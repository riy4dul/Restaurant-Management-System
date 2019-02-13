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
						<h4 class="card-title">Create Slide</h4>
					</div>
				</div>
				<div class="card-body ">
					<form method="POST" action="{{route('slider.update',$slider->id)}}" class="form-horizontal" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">
							<label class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="title" value="{{$slider->title}}">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label">Sub Title</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label">Image</label>
							<div class="col-sm-10">
								<div class="fileinput fileinput-new text-center" data-provides="fileinput">
									<div class="fileinput-new thumbnail">
										<img src="{{asset('frontend/images/slider/'.$slider->image)}}">
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
						<div class="row">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-sm-10">
								<div class="form-group">
									<a href="{{route('slider.index')}}" class="btn btn-danger btn-lg" >Back</a>
									<button class="btn btn-primary btn-lg" >save</button>
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
