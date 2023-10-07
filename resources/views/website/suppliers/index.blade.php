@extends('website.layouts.app')
@section('content')
    <div class="container">
        <div class="py-4 py-lg-8">
            <h6 class="font-weight-medium font-size-7 text-center">الموزعون المعتمدون</h6>
        </div>
        <div class="space-bottom-1 space-bottom-lg-3 pricing-table">
            <div class="row no-gutters-xl pb-lg-3">
                @foreach($countries as $country)
                    <div class="col-lg-4 mx-auto pt-4 pr-3 pl-3 supplier-container" >
                        <div class="space-bottom-1 space-bottom-lg-1 faq-accordion">
                            <div class="pb-lg-1">
                                <div class="mb-2 pb-1 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6 class="font-weight-medium font-size-4 mb-2">{{$country->name}}</h6>



                                        </div>
                                        <div class="col-6">
                                            <img style="width:30%;" class="mb-2 country-image" src="{{asset('flags/'.strtolower($country->code).'.svg')}}">
                                        </div>

                                    </div>

                                    @foreach($country->cities as $city)
                                        <div id="{{str_replace(' ', '', $city->name)}}{{$city->id}}">
                                            <div class="card rounded-0 border-0">
                                                <div
                                                    class="card-collapse card-header p-0 bg-transparent border-bottom-0"
                                                    id="{{$city->id}}">
                                                    <button type="button"
                                                            class=" rtl-container collapse-link btn btn-block d-flex align-items-center justify-content-between card-btn py-3 px-2 px-md-4 border rounded-0 shadow-none collapsed"
                                                            data-toggle="collapse" data-target="#city{{$city->id}}"
                                                            aria-expanded="false" aria-controls="basicsCollapseOne">
                                                        <span class="mx-md-1">{{$city->name}}</span>
                                                        <svg class="minus" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                             height="2px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                  d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z"></path>
                                                        </svg>
                                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                             height="15px">
                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                  d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div id="city{{$city->id}}" class="collapse"
                                                     aria-labelledby="basicsHeadingOne"
                                                     data-parent="#{{str_replace(' ', '', $city->name)}}{{$city->id}}" style="">
                                                    <div class="card-body p-3 p-md-4">
                                                        @if(count($city->suppliers)>0)
                                                            <div class="mx-md-1">
                                                                @foreach($city->suppliers as $supplier)
                                                                    <span
                                                                        class=" mb-2 pb-1 text-center"><strong>{{$supplier->name}}</strong></span>
                                                                    <span
                                                                        class=" mb-2 pb-1 text-center">{{$supplier->phone}}</span>
                                                                    <br/>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                    @if(count($country->cities)==0)
                                        <div class="card-body p-3 p-md-4">
                                            @foreach($country->suppliers as $supplier)
                                                <div class="mx-md-1">
                                                    <span
                                                        class=" mb-2 pb-1 text-center"><strong>{{$supplier->name}}</strong></span>
                                                    <span class=" mb-2 pb-1 text-center">{{$supplier->phone}}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
