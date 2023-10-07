@extends('website.layouts.app')
@section('content')

    <main id="content">
        <div class="py-3 py-lg-7">
            <h6 class="font-weight-medium font-size-7 text-center my-1">تواصل معنا</h6>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835253576489!2d144.95372995111143!3d-37.817327679652266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1581584770980!5m2!1sen!2sin"
            height="500" style="border:0; width:100%;" allowfullscreen=""></iframe>
        <div class="container">
            <div class="space-bottom-1 space-bottom-lg-2">
                <div class="pb-4">
                    <div class="col-lg-8 mx-auto">
                        <div class="bg-white mt-n10 mt-md-n13 pt-5 pt-lg-7 px-3 px-md-5 pl-xl-10 pr-xl-3">
                            <div class="ml-xl-4">
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
                                <div>
                                    <h6 class="font-weight-medium font-size-10 mb-3 pb-xl-1">تواصل معنا</h6>
                                    <form method="POST" action="{{route('website.contact.store')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <!-- Input -->
                                            <div class="col-sm-12 mb-5">
                                                <div class="js-form-message">
                                                    <label for="name">الاسم الكامل</label>
                                                    <input id="name" type="text" class="form-control rounded-0 text-right"
                                                           value="{{old('name')}}" name="name" required >
                                                    @if($errors->has('name'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('name') }}
                                                        </div>
                                                    @endif
                                                    <div id="nameError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <!-- Input -->
                                            <div class="col-sm-6 mb-5">
                                                <div class="js-form-message">
                                                    <label for="email">البريد الالكتروني</label>
                                                    <input id="email" type="email" class="form-control rounded-0 text-right"
                                                     value="{{old('email')}}"      name="email" required>
                                                    @if($errors->has('email'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('email') }}
                                                        </div>
                                                    @endif
                                                    <div id="emailError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <!-- Input -->
                                            <div class="col-sm-6 mb-5">
                                                <div class="js-form-message">
                                                    <label for="number">رقم الهاتف</label>
                                                    <input id="number" type="text" class="form-control rounded-0 text-right"
                                                         value="{{old('number')}}"  name="number" required>
                                                    @if($errors->has('number'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('number') }}
                                                        </div>
                                                    @endif
                                                    <div id="numberError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <div class="col-sm-12 mb-5">
                                                <div class="js-form-message ">
                                                    <label for="subject_id">الهدف من التواصل</label>
                                                    <select required name="subject_id" class="form-control rounded-0 text-right"
                                                            id="subject_id">
                                                        <option selected disabled>الهدف من التواصل</option>
                                                        @foreach($subjects as $subject)
                                                            <option
                                                                value="{{$subject->id}}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                                                                {{$subject->subject}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('subject_id'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $errors->first('subject_id') }}
                                                        </div>
                                                    @endif
                                                    <div id="subject_idError" class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-5">
                                                <div class="js-form-message">
                                                    <div class="input-group flex-column">
                                                        <label for="message">الرسالة</label>
                                                        <textarea id="message"
                                                                  class="form-control rounded-0 pl-3 font-size-2 placeholder-color-3 text-right"
                                                                  rows="6" cols="77" name="message" required> {{old('message')}}</textarea>
                                                        @if($errors->has('message'))
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $errors->first('message') }}
                                                            </div>
                                                        @endif
                                                        <div id="messageError" class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                            <div class="col d-flex justify-content-lg-start">
                                                <button type="submit"
                                                        class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60">
                                                    ارسال الرسالة
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
