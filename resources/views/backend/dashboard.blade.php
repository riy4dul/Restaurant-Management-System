@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
                       <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                 <i class="material-icons">content_copy</i>
                                            </div>
                                            <p class="card-category">Category / Item</p>
                                            <h3 class="card-title">{{ $categoryCount }}/{{ $itemCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons text-danger">warning</i>
                                                <a href="#pablo">Total Categories and Items</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">slideshow</i>
                                            </div>
                                            <p class="card-category">Slider Count</p>
                                            <h3 class="card-title">{{ $sliderCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">date_range</i> <a href="{{ route('slider.index') }}">Get More Details...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-success card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">store</i>
                                            </div>
                                            <p class="card-category">Reservation</p>
                                            <h3 class="card-title">{{ $reservations->count() }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                 <i class="material-icons">local_offer</i> Not Confirmed Reservation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-info card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">perm_contact_calendar</i>
                                            </div>
                                            <p class="card-category">Contact</p>
                                            <h3 class="card-title">{{ $contactCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">update</i> Just Updated
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <h3 style="color: red" class="card-title text-center"><b>Queue Reservation</b></h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
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
                                        <td style="width:15%">{{$reservation->message}}</td>
                                        <td style="width:15%">
                                            @if($reservation->status == true)
                                                <button class="btn btn-success btn-sm">Confirmed</button>
                                            @else
                                                <button class="btn btn-danger btn-sm">Not Confirmed</button>
                                            @endif
                                        </td>
                                        <td style="width:10%">{{$reservation->created_at}}</td>
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
                            {{-- <h3>Manage Listings</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-2.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$899/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-3.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Office Studio</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$1.119/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-1.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Beautiful Castle</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$459/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
@endsection