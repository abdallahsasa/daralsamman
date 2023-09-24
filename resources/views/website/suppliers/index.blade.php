@extends('website.layouts.app')
@section('content')
<div class="container">
    <div class="py-4 py-lg-8">
        <h6 class="font-weight-medium font-size-7 text-center">الموزعون المعتمدون</h6>
    </div>
    <div class="space-bottom-1 space-bottom-lg-3 pricing-table">
        <div class="row no-gutters-xl pb-lg-3">
            @foreach($countries as $country)
                <div class="col-lg-4 mx-auto">
                    <div class="space-bottom-2 space-bottom-lg-3 faq-accordion">
                        <div class="pb-lg-1">
                            <div class="mb-2 pb-1">
                                <img style="width:25%;" class="mb-2" src="{{asset('flags/'.strtolower($country->code).'.svg')}}">
                                <h6 class="font-weight-medium font-size-4 mb-2">{{$country->name}}</h6>
                                @foreach($country->cities as $city)

                                <div id="{{$city->name}}">
                                    <div class="card rounded-0 border-0">
                                        <div class="card-collapse card-header p-0 bg-transparent border-bottom-0" id="{{$city->name}}">
                                            <button type="button" class="collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-0 px-md-4 border rounded-0 shadow-none collapsed" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                                <span class="mx-md-1">{{$city->name}}</span>
                                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z"></path>
                                                </svg>
                                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#{{$city->name}}" style="">
                                            <div class="card-body p-3 p-md-4">
                                                @if(count($city->suppliers)>0)
                                                <div class="mx-md-1">
                                                    @foreach($city->suppliers as $supplier)
                                                        <span class=" mb-2 pb-1 text-center"><strong>{{$supplier->name}}</strong></span>
                                                        <span class=" mb-2 pb-1 text-center">{{$supplier->phone}}</span>
                                                    @endforeach
                                                </div>
                                                @endif
                                                @if(count($country->cities)==0)

                                                    <ul class="list-unstyled mb-6 pb-1 text-center">
                                                        @foreach($country->suppliers as $supplier)
                                                            <li class=" mb-2 pb-1 text-center"><strong>{{$supplier->name}}</strong></li>
                                                            <li class=" mb-2 pb-1 text-center">{{$supplier->phone}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
