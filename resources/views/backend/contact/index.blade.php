@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						@include('backend.layouts.msg')
						<h4 class="card-title text-center">Contact Table</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Message</th>
										<th>Sent At</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($contacts as $key=>$contact)
									<tr>
										<td style="width:5%">{{$key + 1}}</td>
										<td style="width:15%">{{$contact->name}}</td>
										<td style="width:20%">{{$contact->email}}</td>
										<td style="width:15%">{{$contact->subject}}</td>
										<td style="width:25%">{{$contact->message}}</td>
										<td style="width:20%">{{$contact->created_at}}</td>
										<td>
											<form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destroy',$contact->id) }}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')
											</form>
											<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{ $contact->id }}').submit();
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

	