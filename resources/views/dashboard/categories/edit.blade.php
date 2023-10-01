@extends('dashboard.layouts.app')
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Edit {{$category->name}} Category</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">{{$category->name}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            @if(session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form method="POST" action="{{route('dashboard.categories.update',$category->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="parent_id">Parent Name</label>
                                            <select name="parent_id" class="form-select form-select-lg mb-3" id="parent_id">
                                                <option value="">Category</option>
                                                @foreach($categories as $ParentCategory)
                                                    <option value="{{ $ParentCategory->id }}" {{ old('parent_id', $ParentCategory->id) == $category->id || (is_null(old('parent_id')) && is_null($category->parent_id)) ? 'selected' : '' }}>
                                                        {{ $ParentCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if($errors->has('parent_id'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('parent_id') }}
                                                </div>
                                            @endif
                                            <div id="categoryError" class="invalid-feedback"></div>
                                        </div>





                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Category Name</label>
                                            <input required name="name" type="text" class="form-control"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Ex.. Fresh juice " value="{{old('name',$category->name)}}">
                                            @if($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Category Slug</label>
                                            <input required name="slug" type="text" class="form-control"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Ex.. Fresh juice " value="{{old('name',$category->slug)}}">
                                            @if($errors->has('slug'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('slug') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlTextarea1">Category
                                                Description</label>
                                            <textarea name="description" class="form-control" id="description"
                                                      id="exampleFormControlTextarea1"
                                                      rows="3">{{old('description',$category->description)}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="exampleFormControlFile1">Category
                                                Image</label>
                                            <img width="15%" src="{{old('image_url',$category->image_url)}}"
                                                 class="form-label d-block w-10" for="exampleFormControlFile1" alt="">
                                            <input name="image" type="file" class="form-control" id="customFile"
                                                   value="{{old('image_url',$category->image_url)}}">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="col-md-6 mb-30">

                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <h5 class="card-title">Category Status</h5>
                                            <div class="form-group mb-3">
                                                <div class="checkbox checbox-switch switch-success">
                                                    <label>
                                                        <input type="checkbox" name="status_checkbox" id="status" value="{{old('status',$category->status)}} ">
                                                        <span></span>
                                                        Active/Inactive
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Hidden input field to store the actual status value -->
                                            <input type="hidden" name="status" id="status_hidden" value="{{old('status',$category->status)}} ">
                                        </div>


                                        <div class="mb-3">
                                            <h5 class="card-title">Featured Category</h5>
                                            <div class="form-group mb-3">
                                                <div class="checkbox checbox-switch switch-success">
                                                    <label>
                                                        <input type="checkbox"  id="featuredCategory" checked="" value="{{old('featured',$category->featured)}} ">
                                                        <span></span>
                                                        Yes/No
                                                    </label>
                                                    @if($errors->has('featured'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('featured') }}
                                                        </div>
                                                    @endif
                                                    <!-- Hidden input field to store the actual status value -->
                                                    <input type="hidden" name="featured" id="featured_hidden" value="{{old('featured',$category->featured)}} ">
                                                    <div id="featuredError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value=" {{old('meta_title',$category->meta_title)}}"
                                                   id="meta_title"
                                                   placeholder="Meta Title">
                                            @if($errors->has('meta_title'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_title') }}
                                                </div>
                                            @endif
                                            <div id="metaTitleError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description"
                                                      rows="2">  {{old('meta_description',$category->meta_description)}}</textarea>
                                            @if($errors->has('meta_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_description') }}
                                                </div>
                                            @endif
                                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {

            // Fetch the product state from the server and store it in a variable (e.g., productState)
            var productState = "{{$category->status}}"; // Replace this with your dynamic value from the server
            // Set the checkbox state based on the product state
            if (productState === "active") {
                $("#status").prop("checked", true);
            } else {
                $("#status").prop("checked", false);
            }

            $(document).ready(function() {
                // Add an event listener to update the checkbox value when the switch is toggled
                $("#status").on("change", function () {
                    if ($(this).prop("checked")) {
                        $(this).val("active");
                    } else {
                        $(this).val("inactive");
                    }
                });
            });

            // Add an event listener to update the hidden input's value when the switch is toggled
            $("#status").on("change", function () {

                if ($(this).prop("checked")) {
                    $("#status_hidden").val("active");
                } else {
                    $("#status_hidden").val("inactive");
                }
            });



            var featuredCategory = "{{$category->featured}}"; // Replace this with your dynamic value from the server
            // Set the checkbox state based on the product state
            if (featuredCategory == 1) {
                $("#featuredCategory").prop("checked", 1);
            } else {
                $("#featuredCategory").prop("checked", 0);
            }

            $("#featuredCategory").on("change", function () {
                if ($(this).prop("checked")) {
                    $('#featured_hidden').val(1);
                } else {
                    $('#featured_hidden').val(0);
                }
            });
        });


    </script>




@endsection
