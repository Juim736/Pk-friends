@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
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
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: red;text-align: center"><b> স্বেচ্ছায় করি রক্ত দান
                            হাসবে রুগী বাঁচবে প্রাণ </b></h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/blood/update')  }}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="" class="col-md-6 col-sm-12" style="color: #610D02">Blood Group (রক্তের
                                        গ্রুপ) :</label>
                                    <div class="col-md-6 col-sm-12">
                                        <select class="">
                                            <option value="">Select Blood Group</option>
                                            <option value="">A+</option>
                                            <option value="">A-</option>
                                            <option value="">B+</option>
                                            <option value="">B-</option>
                                            <option value="">O+</option>
                                            <option value="">O-</option>
                                            <option value="">AB+</option>
                                            <option value="">AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-10 col-md-offset-1">
                                    <label for="" class="col-md-6 col-sm-12" style="color: #610D02">Last Blood Given
                                        Date
                                        :</label>
                                    <div class="col-md-6 col-sm-12 pull-right" style="">
                                        <input type="date" name="" class="">
                                    </div>
                                    <br>
                                    <br/>

                                    <label for="" class="col-md-6 col-sm-12" style="color: #610D02">Present Zone or Area
                                        :</label>
                                    <div class="col-md-6 col-sm-12 pull-right" style="">
                                        <input type="text" name="" class="">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="w3l-table-info agile_info_shadow">
                <h3 class="w3_inner_tittle two">Availabe Donar List</h3>

                <table id="table-no-resize">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Height</th>
                        <th>Province</th>
                        <th>Sport</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Stone</td>
                        <td>30</td>
                        <td>Male</td>
                        <td>5'9</td>
                        <td>Ontario</td>
                        <td>Badminton</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



