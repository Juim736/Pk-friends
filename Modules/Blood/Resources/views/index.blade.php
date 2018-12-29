@extends('layouts.master')
@section('header_link')
    <link rel="stylesheet" href="{{ asset('/assets/DataTable/dataTable.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/DataTable/dataTable.responsive.bootstrap.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">

            @if(Session::has('suc_msg'))
                <div class="alert alert-success">
                    {!! Session::get('suc_msg') !!}
                </div>
            @endif
            @if(Session::has('err_msg'))
                <div class="alert alert-danger">
                    {!! Session::get('err_msg') !!}
                </div>
            @endif

            <div class="col-md-8">
                <br>
                <!--   <h2>Carousel Example</h2> -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">

                            <img src="{{asset('/pk/')}}/images/blood1.jpg" alt="" style="width:100%;height: 300px;">
                            <div class="carousel-caption" style="color: red;">
                                <h3>Pk Friends</h3>
                                <p>Give Blood Save Life</p>
                            </div>
                        </div>

                        <div class="item">

                            <img src="{{asset('/pk/')}}/images/blood2.jpg" alt="" style="width:100%; height: 300px;">
                            <div class="carousel-caption">
                                <h3>Pk Friends</h3>
                                <p>Give Blood Save Life</p>
                            </div>
                        </div>

                        <div class="item">

                            <img src="{{asset('/pk/')}}/images/blood3.jpg" alt="" style="width:100%;height: 300px;">
                            <div class="carousel-caption">
                                <h3>Pk Friends</h3>
                                <p>Give Blood Save Life</p>
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
            <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading" style="background: red;">
                        <h2 class="panel-title" style="color: white">Blood Related Issue</h2>
                    </div>
                    <div class="panel-body">
                        রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু
                        দুঃখের
                        ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে। বর্তমানে
                        বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ মারা যাচ্ছে
                        রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল প্রান্তের
                        পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।
                        <br>
                        যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন।

                        <!-- <a href="" class="btn btn-danger pull-right">আমি ও চাই রক্ত দিতে </a> -->
                        <button type="button" class="btn btn-danger pull-right" data-toggle="modal"
                                data-target="#myModal">
                            <b> আপনার তথ্য </b></button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8" style="background: #B6ECE6">
                    <h2 style="color: red; text-align: center; font-weight: bold">আপনি জানেন কি?</h2>
                    <p>রক্ত কৃত্তিমভাবে তৈরী করা যায় না, শুধুমাত্র একজন মানুষই পারে আরেকজন মানুষকে বাঁচাতে। কিন্তু
                        দুঃখের ব্যাপার, প্রতিবছর বহুসংখ্যক মানুষ মারা যাচ্ছে জরুরি মুহুর্তে প্রয়োজনীয় রক্তের অভাবে।
                        বর্তমানে বাংলাদেশে প্রতি বছর রক্তের প্রয়োজন মাত্র ৯ লাখ ব্যাগ। অথচ জনবহুল এই দেশে এখনো মানুষ
                        মারা যাচ্ছে রক্তের অভাবে। রক্তের এই চাহিদা খুব সহজেই পূরণ করা সম্ভব হবে যদি আমাদের দেশের সকল
                        প্রান্তের পূর্ণবয়স্ক মানুষদের রক্তদানের প্রয়োজনীয়তা এবং সুফলতা বুঝিয়ে সচেতন করা যায়।

                        একজন মুমূর্ষু রোগীকে তার প্রিয়জনের মাঝে সুস্থভাবে ফিরিয়ে আনা থেকে আনন্দের আর কিছু হতে পারে না।
                        জরুরি রক্তের প্রয়োজনে মুমূর্ষু রোগীদের পাশে থাকুন। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে
                        রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড
                        ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি
                        রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে
                        এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে
                        নিবে। হ্যাপি ব্লাড ডোনেটিং। যারা রক্তদানে ইচ্ছুক, দয়া করে এই ওয়েবসাইটটিতে রক্তদাতা হিসাবে
                        রেজিস্ট্রেশন করুন। জরুরি রক্তের প্রয়োজনে রোগীরাই আপনাকে খুঁজে নিবে। হ্যাপি ব্লাড ডোনেটিং।
                    </p>
                    <h4 style="color: red; text-align: center">…”রক্তদান ঐচ্ছিক বিষয় নয়, এটি দায়িত্বের চেয়েও বেশি
                        কিছু”…</h4>
                </div>
                <br>
                <div class="col-md-4">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/A+')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 0px; width: 100%">A+</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/A-')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 0px; width: 100%">A-</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/B+')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 0px; width: 100%">B+</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/B-')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 0px; width: 100%; margin: 6px 0px 6px 0px;">B-</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <!--  <a href="" class="btn btn-danger rounded-circle" style="background: red;padding: 30px 0px; width: 100%">A-</a>
                        <img src="..." alt="..." class="rounded-circle"> -->
                        <img src="{{asset('/pk/')}}/images/bloodlove.jpg" class="rounded-circle" alt="Image"
                             style="text-align: center;" height="70" width="70">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/O+')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 5px; width: 100% ;margin: 6px 0px 6px 0px;">O+</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/O-')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 5px; width: 100%">O-</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/AB-')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 5px; width: 100%">AB-</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href="{{url('blood/groupBlood/AB+')}}" class="btn btn-danger"
                           style="background: red;padding: 30px 0px; width: 100%">AB+</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            {{ Form::open(['url' => '/blood/update-blood-info', 'method' => 'post', 'id' => 'blood_info', 'class' => ''])}}
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: red;text-align: center"><b> স্বেচ্ছায় করি রক্ত দান
                            হাসবে রুগী বাঁচবে প্রাণ </b></h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group col-md-10 col-md-offset-1">
                                @if ($errors->has('blood_group'))
                                    <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                                <label for="" class="col-md-6 col-sm-6" style="color: #610D02">Blood Group (রক্তের
                                    গ্রুপ) :</label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="" name="blood_group">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+">A+ Positive</option>
                                        <option value="A-">A- Negetive</option>
                                        <option value="B+">B+ Positive</option>
                                        <option value="B-">B- Negetive</option>
                                        <option value="O+">O+ Positive</option>
                                        <option value="O-">O- Negetive</option>
                                        <option value="AB+">AB+ Positive</option>
                                        <option value="AB-">AB- Negetive</option>
                                    </select>
                                    <span id="blood_group" style="color: red"></span>
                                </div>
                            </div>


                            <div class="form-group col-md-10 col-md-offset-1">
                                @if ($errors->has('last_given_date'))
                                    <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('last_given_date') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    <label for="name" class="col-md-6 col-sm-6" style="color: #610D02"><i
                                                class="zmdi zmdi-account material-icons-name"></i>Last
                                        Given Blood :</label>
                                    {{ Form::date('last_given_date','',['id' => 'last_given_date','class' =>'col-md-6 col-sm-6', 'placeholder' => '', 'required']) }}
                                </div>
                            </div>

                            <div class="form-group col-md-10 col-md-offset-1">

                                @if ($errors->has('current_zone'))
                                    <span class="invalid-feedback" style="color: red;display:block">
                                        <strong>{{ $errors->first('current_zone') }}</strong>
                                    </span>
                                @endif
                                <div class="form-group">
                                    <label for="name" class="col-md-6 col-sm-6" style="color: #610D02"><i
                                                class="zmdi zmdi-account material-icons-name"></i>Present
                                        Zone or Area
                                        :</label>
                                    {{ Form::text('current_zone','',['id' => 'current_zone','class' =>'col-md-6 col-sm-6', 'placeholder' => '', 'required']) }}
                                </div>
                            </div>

                        </div>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="w3l-table-info agile_info_shadow">
                <h3 class="w3_inner_tittle two">Available Donor List</h3>

                <table id="donor_table" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Current Zone</th>
                        <th>Mobile</th>
                        <th>Union</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($allAvailableDonor) > 0)
                    @foreach($allAvailableDonor as $donor)
                        <tr>
                            <td>{{ ucfirst($donor->first_name.' - '.$donor->last_name )  }}</td>
                            <td>{{ $donor->blood }}</td>
                            @if($donor->current_zone)
                                <td>{{ $donor->current_zone }}</td>
                            @else
                                <td>{{ $donor->union }}</td>
                            @endif
                            <td>{{ $donor->mobile }}</td>
                            <td>{{ $donor->union }}</td>
                        </tr>
                    @endforeach
                        @else
                    <tr>
                        No Result Found ..
                    </tr>
                        @endif
                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection

@section('footer_script')

    <script src="{{ asset('/assets/DataTable/jquery.dataTable.js') }}"></script>
    <script src="{{ asset('/assets/DataTable/dataTable.bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/DataTable/dataTable.responsive.js') }}"></script>
    <script src="{{ asset('/assets/DataTable/dataTable.responsive.bootstrap.js') }}"></script>

    <!-- Bootstrap JavaScript -->
    <script>
        $(document).ready(function(){
            $('#blood_info').validate({
                rules: {
                    // blood_group: {
                    //     required: true,
                    // },
                    last_given_date: {
                        required: true,
                    },
                    current_zone : {
                        required: true,
                    }
                },
                messages: {
                    current_zone: {
                        required : "Current zone is required",
                    },
                    last_given_date: {
                        required : "Last Gvien blood date is required",
                    },
                    blood_group : {
                        required :  "Blood Group is required, Please enter your proper blood Group",
                    },
                }
            });
        });

        $(function () {
            $('#donor_table').DataTable({
            });
        });

    </script>
@endsection



