@extends('dashboard.layouts.app')
@section('style')

@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Author</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard/index" class="default-color">Home</a>
                    </li>
                    <li class="breadcrumb-item active ps-0">Add New Author</li>
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
                    <form action="{{ route('dashboard.author.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="first_name">First Name*</label>
                                                <input type="text" class="form-control" name="first_name" required>
                                            </div>
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="middle_name">Middle Name
                                                    (Optional)</label>
                                                <input type="text" class="form-control" name="middle_name">
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="last_name">Last Name*</label>
                                                <input type="text" class="form-control" name="last_name" required>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="slug">slug</label>
                                                <input type="text" class="form-control" name="slug" required>
                                            </div>
                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                                <input type="text" class="form-control" name="date_of_birth">

                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-4 mb-3">
                                                <label class="form-label" for="gender">Gender*</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="gender">
                                                    <option selected="">Choose...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="number">Number</label>
                                                <input type="text" class="form-control" name="number">
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="website">website</label>
                                                <input type="text" class="form-control" name="website">
                                            </div>

                                            <div class="col-sm-4 col-xl-12 col-xxl-3 mb-3">
                                                <label class="form-label" for="nationality">Nationality</label>
                                                <select required class="form-control form-select form-select-lg mb-15"
                                                        aria-label=".form-select-lg example" name="nationality">
                                                    <option selected="">Choose...</option>

                                                </select>
                                            </div>

                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="biography">Biography</label>
                                            <textarea id="summernote" name="biography" class="form-control"
                                                      rows="2">{{old('biography')}}</textarea>
                                            @if($errors->has('biography'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('biography') }}
                                                </div>
                                            @endif
                                            <div id="biographyError" class="invalid-feedback"></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-30">
                                <div class="card card-statistics h-30">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <h5 class="card-title" for="category_id">Person Type</h5>
                                            <select required name="category_id" class="form-select form-select-lg mb-3"
                                                    id="category_id">
                                                <option selected disabled>Choose...</option>
                                                <option value="author">Author</option>
                                                <option value="auditor">Auditor</option>
                                            </select>
                                            @if($errors->has('category_id'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('category_id') }}
                                                </div>
                                            @endif
                                            <div id="categoryError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Author Status</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input type="checkbox" name="status" id="switchCheckbox" checked=""
                                                           value="active">
                                                    <span></span>
                                                    Active/Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Featured Author</h5>
                                        <div class="form-group mb-3">
                                            <div class="checkbox checbox-switch switch-success">
                                                <label>
                                                    <input type="checkbox" name="featured" id="featuredAuthor"
                                                           checked=""
                                                           value="1">
                                                    <span></span>
                                                    Yes/No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="image">Image</label>
                                            <input name="image" type="file" value="{{old('image')}}"
                                                   class="form-control" id="image">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                            <div id="imageError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-20">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value="{{old('meta_title')}}" id="meta_title"
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
                                                      rows="2"> {{old('meta_description')}}</textarea>
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


                            <button id="submitBtn" type="submit" class="btn btn-success">Submit</button>
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
            // Add an event listener to update the checkbox value when the switch is toggled
            $("#switchCheckbox").on("change", function () {
                if ($(this).prop("checked")) {
                    $(this).val("active");
                } else {
                    $(this).val("inactive");
                }
            });


            $("#featuredAuthor").on("change", function () {
                if ($(this).prop("checked")) {
                    $(this).val(1);
                } else {
                    $(this).val(0);
                }
            });
        });
    </script>



    <script>
        // JavaScript array containing all country names
        var countries = [
            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia",
            "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
            "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
            "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia",
            "Comoros", "Congo", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
            "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia",
            "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece",
            "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India",
            "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya",
            "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho",
            "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali",
            "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia",
            "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua",
            "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay",
            "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia",
            "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia",
            "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan",
            "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand",
            "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine",
            "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela",
            "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ];

        function generateOptions() {
            for (var i = 0; i < countries.length; i++) {
                var option = document.createElement("option");
                option.value = countries[i];
                option.text = countries[i];
                document.querySelector("select[name='nationality']").appendChild(option);
            }
        }

        generateOptions();
    </script>

@endsection


