@extends('layouts.app')

@section('content')

<div class="container">
	<div class="mb-5">
		<div class="row justify-content-center">
			<div class="">
        <div class="gallery-wrap">
          <div class="img-big-wrap">
            <img src="{{Storage::url($property->image)}}"  width="450" >
          </div>
					<div class="text-dark">
						<h3 class="title mb-3 " style="font-size:31px;color:rgb(0, 0, 0);" id="fa-build">{{$property->address}}</h3>
							<p class="fa-solid " style="font-size:31px;color:rgb(9, 196, 108);" id="fa-build">     {{$property->price}} $</p>
					</div>
					<ul class="text-dark">
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="font-size:31px;color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->address}}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-bed" style="font-size:31px;color:rgb(9, 196, 108);">:</i>
                            {{$property->bedrooms}} bedrooms
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-bath" style="font-size:31px;color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->bathrooms}} bathrooms
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="font-size:31px;color:rgb(9, 196, 108);" id="fa-build">:</i>
                            {{$property->user->name}}
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="font-size:31px;color:rgb(9, 196, 108);" id="fa-build">:</i>
                            Contacts {{$property->user->email}}
                        </p>
					</ul>
					<div>

						<like-button property-id="{{ $property->id }}" likes={{ $likes }}></like-button>
					</div>
        </div>
      </div>
		</div>
	</div>

	@if (count($propertyFromSameCategories) > 0)
		<div>
			<h3 class="text-dark">Similar Homes You May Like</h3>

			<div class="row">
				@foreach ($propertyFromSameCategories as $property)
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<img src="{{Storage::url($property->image)}}" alt="">
							<div class="card-body bg-dark text-success">
								<p class="card-text">
									${{$property->price}}
								</p>
								<p class="card-text">
									{{$property->address}}
								</p>
								<p class="card-text">
									{{$property->bedrooms}} Bedrooms
								</p>
								<p class="card-text">
									{{$property->bathrooms}} Bathrooms
								</p>
                                <p class="card-text">
                                    {{$property->user->name}}
                                </p>
                                <p class="card-text">
                                    Contacts: {{$property->user->email}}
                                </p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@else

	@endif
</div>

@endsection
