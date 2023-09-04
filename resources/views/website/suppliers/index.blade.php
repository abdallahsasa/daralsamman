@extends('website.layouts.app')
@section('content')
<div class="container">
    <div class="py-4 py-lg-8">
        <h6 class="font-weight-medium font-size-7 text-center">الموزعون المعتمدون</h6>
    </div>
    <div class="space-bottom-1 space-bottom-lg-3 pricing-table">
        <div class="row no-gutters-xl pb-lg-3">
            @foreach($countries as $country)
            <div class="col-md-6 col-xl-3">
                <div class="border border-sh-hover transition-3d-hover space-top-2 px-3 px-wd-7 pb-6 text-center mb-5 mb-xl-0">
                    <div class="mb-2 mb-lg-10 pt-lg-3 pb-lg-1">
                        <h6 class="font-weight-medium font-size-7 mb-2">{{$country->name}}</h6>
                        <i class="flag flag-{{strtolower($country->name)}}"></i>
                    </div>
                    <ul class="list-unstyled mb-6 pb-1 text-center">

                        @foreach($country->cities as $city)
                            @if(count($city->suppliers)>0)
                        <li class=" mb-2 pb-1 text-center"><strong>{{$city->name}}</strong></li>
                            <hr/>
                            @endif
                        <ul class="list-unstyled mb-6 pb-1 text-center">
                            @foreach($city->suppliers as $supplier)
                                <li class=" mb-2 pb-1 text-center"><strong>{{$supplier->name}}</strong></li>
                                <li class=" mb-2 pb-1 text-center">{{$supplier->phone}}</li>
                            @endforeach
                        </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
