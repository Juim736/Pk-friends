@extends('layouts.master')
@section('header_link')

<style>
    /* USER PROFILE PAGE */
    .card {
        margin-top: 10px;
        padding: 30px;
        background-color: rgba(214, 224, 226, 0.2);
        -webkit-border-top-left-radius: 5px;
        -moz-border-top-left-radius: 5px;
        border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-top-right-radius: 5px;
        border-top-right-radius: 5px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: #fff;
        background-color: rgba(255, 255, 255, 1);
    }

    .card.hovercard .card-background {
        height: 130px;
    }

    .card-background img {
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);
        margin-left: -100px;
        margin-top: -200px;
        min-width: 130%;
    }

    .card.hovercard .useravatar {
        position: absolute;
        top: 15px;
        left: 0;
        right: 0;
    }

    .card.hovercard .useravatar img {
        width: 100px;
        height: 100px;
        max-width: 100px;
        max-height: 100px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, 0.5);
    }

    .card.hovercard .card-info {
        position: absolute;
        bottom: 14px;
        left: 0;
        right: 0;
    }

    .card.hovercard .card-info .card-title {
        padding: 0 5px;
        font-size: 20px;
        line-height: 1;
        color: #262626;
        background-color: rgba(255, 255, 255, 0.1);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .card.hovercard .card-info {
        overflow: hidden;
        font-size: 12px;
        line-height: 20px;
        color: #737373;
        text-overflow: ellipsis;
    }

    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }

    .btn-pref .btn {
        -webkit-border-radius: 0 !important;
    }
    .profile_star{
        /*box-shadow:;*/
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                        <!-- http://lorempixel.com/850/280/people/9/ -->
                    </div>
                    <div class="useravatar">
                        <img alt="" src="http://lorempixel.com/100/100/people/9/">
                        {{--<img src="{{asset('/pk/')}}/images/pk-bg.jpg" class="img-cercle" alt="Image">--}}
                    </div>
                    <div class="card-info"> <span class="card-title">{{  ucfirst(Sentinel::getUser()->first_name) }}-{{  ucfirst(Sentinel::getUser()->last_name) }}</span>

                    </div>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <div class="hidden-xs">Stars</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <div class="hidden-xs">Favorites</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <div class="hidden-xs">Following</div>
                        </button>
                    </div>
                </div>

                {!! Session::has('success') ? '<div class="alert alert-success alert-dismissible"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("success") .'</div>' : '' !!}
                {!! Session::has('error') ? '<div class="alert alert-danger alert-dismissible"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("error") .'</div>' : '' !!}

                <div class=" profile_star ">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="well" id="home">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">First Name :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->first_name }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Last Name :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->last_name }} </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Contact Number :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->mobile }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Gender :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->gender }} </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Blood Group:</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->blood }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Union :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->union }} </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Email :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->email }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Current Zone :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->current_zone }} </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <a href="{{ url('user/profile-update') }}"><button class="btn btn-lg btn-success" type=""><i
                                                        class="glyphicon glyphicon-edit"></i> Edit
                                            </button></a>

                                    </div>
                                </div>


                                <hr>
                                <hr>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
                            <hr>
                            <div class="well" id="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Occupation :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->occupation }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Date of Birth :</label>
                                                <div class="col-md-6"> {{  \Carbon\Carbon::parse(Sentinel::getUser()->dob)->format('l jS \\of F Y ') }}</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Marital Status :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->marital_status }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Designation :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->designation }} </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Height :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->height }} </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="name" class="col-md-6">Designation :</label>
                                                <div class="col-md-6"> {{ Sentinel::getUser()->weight }} </div>
                                            </div>
                                        </div>
                                        <br>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <a href="{{ url('user/profile-update') }}"><button class="btn btn-lg btn-success" type=""><i
                                                            class="glyphicon glyphicon-edit"></i> Edit
                                                </button></a>
                                            {{--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>--}}
                                            {{--Reset--}}
                                            {{--</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab3">
                            {{ Form::open(['url' => 'user/profile-update', 'method' => 'post', 'id' => '', 'class' => 'form-horizontal update-profile', 'enctype' => 'multipart/form-data'])}}
                            <div class="well" id="">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        {{ csrf_field()}}

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('first_name'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">First Name:</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="first_name" class="form-control" id="" value="{{ Sentinel::getUser()->first_name }}">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('last_name'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="email">Last Name:</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="last_name" class="form-control" id="" value="{{ Sentinel::getUser()->last_name }}">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('union'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('union') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Union :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="union" class="form-control" id="" value="{{ Sentinel::getUser()->union }}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('blood'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('blood') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Blood Group:</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="blood"  class="form-control" id="" value="{{ Sentinel::getUser()->blood }}" readonly>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            @if ($errors->has('mobile'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Mobile :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="number" name="mobile" class="form-control" id="" value="{{ Sentinel::getUser()->mobile }}" >
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Email :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="email" class="form-control" name="email" id="name" value="{{ Sentinel::getUser()->email }}" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            @if ($errors->has('gender'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Gender :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <select name="gender" id="" class="">
                                                    <option value="">Select One</option>
                                                    @if(Sentinel::getUser()->gender == 'Male')
                                                    <option value="Male" selected="selected">Male</option>
                                                    <option value="Female">Female</option>
                                                    @else
                                                        <option value="Male" >Male</option>
                                                        <option value="Female" selected="selected">Female</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('dob'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Date of Birth :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' name="dob" class="form-control" value="{{  \Carbon\Carbon::parse(Sentinel::getUser()->dob)->format('Y-m-d') }}"/>
                                                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            @if ($errors->has('current_zone'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('current_zone') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Current Zone :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="current_zone" class="form-control" id="" value="{{ Sentinel::getUser()->current_zone }}" >
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('occupation'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('occupation') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Occupation :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="occupation" class="form-control" id="" value="{{ Sentinel::getUser()->occupation }}" >
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            @if ($errors->has('designation'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('designation') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Designation :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="designation" class="form-control" id="" value="{{ Sentinel::getUser()->designation }}" >
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('marital_status'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('marital_status') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Marital Status :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="marital_status" class="form-control" id="" value="{{ Sentinel::getUser()->marital_status }}" placeholder="Single, Married,Divorced">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-6">
                                            @if ($errors->has('height'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('height') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Height :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="height" class="form-control" id="" value="{{ Sentinel::getUser()->height }}" >
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            @if ($errors->has('weight'))
                                                <span class="invalid-feedback" style="color: red;display:block">
                                            <strong>{{ $errors->first('weight') }}</strong>
                                         </span>
                                            @endif
                                            <label class="control-label col-sm-4" for="name">Weight :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" name="weight" class="form-control" id="dob" value="{{ Sentinel::getUser()->weight }}" >
                                            </div>
                                        </div>
                                        <br>


                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="col-md-2 col-md-offset-5 text-center">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Update
                                        </button>

                                    </div>
                                </div>


                                <hr>
                                <hr>
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection




@section('footer_script')
<script>
    $(document).ready(function () {
        $(".btn-pref .btn").click(function () {
            $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
            $(".tab").addClass("active"); // instead of this do the below
            $(this).removeClass("btn-default").addClass("btn-primary");
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>

@endsection
<!-- </body>
</html>
 -->


