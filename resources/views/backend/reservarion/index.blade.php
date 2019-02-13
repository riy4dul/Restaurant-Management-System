@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						<a href="" class="btn btn-info btn-lg">Add New</a>
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
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Time And Date</th>
										<th>Message</th>
										<th>Status</th>
										<th>Created At</th>
										<th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($reservations as $key=>$reservation)
									<tr>
										<td style="width:3%">{{$key + 1}}</td>
										<td style="width:10%">{{$reservation->name}}</td>
										<td style="width:10%">{{$reservation->phone}}</td>
										<td style="width:15%">{{$reservation->email}}</td>
										<td style="width:15%">{{$reservation->date_and_time}}</td>
										<td style="width:18%">{{$reservation->message}}</td>
										<td style="width:15%">
                                         	@if($reservation->status == true)
                                         		<button class="btn btn-success btn-sm">Confirmed</button>
                                            @else
                                          		<button class="btn btn-danger btn-sm">Not Confirmed</button>
                                            @endif
										</td>
										<td style="width:7%">{{$reservation->created_at}}</td>
										<td>
                                                @if($reservation->status == false)
                                                    <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status',$reservation->id) }}" style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                                @endif
                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destory',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reservation->id }}').submit();
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

	