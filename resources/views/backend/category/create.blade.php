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
						<h4 class="card-title">Create Category</h4>
					</div>
				</div>
				<div class="card-body ">
					<form method="POST" action="{{route('category.store')}}" class="form-horizontal" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<label class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<div class="form-group">
									<input type="text" class="form-control" name="name">
								</div>
							</div>
						</div>
						<div class="row">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-sm-10">
								<div class="form-group">
									<a href="{{route('category.index')}}" class="btn btn-danger btn-lg" >Back</a>
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
