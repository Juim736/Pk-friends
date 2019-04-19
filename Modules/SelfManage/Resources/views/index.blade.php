@extends('layouts.master')
@section('content')

    <div class="clearfix"></div>
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="">

    <div class="agile_top_w3_grids">
        <ul class="ca-menu">
            <li>
                <a href="{{route('daily.set')}}">
                    <i class="fa fa-glass" aria-hidden="true"></i>
                    <div class="ca-content">
                        <h4 class="ca-main">0001</h4>
                        <h3 class="ca-sub">Daily Target</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('weekly.set')}}">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <div class="ca-content">
                        <h4 class="ca-main one">0001</h4>
                        <h3 class="ca-sub one">Weekly Target</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('monthly.set')}}">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <div class="ca-content">
                        <h4 class="ca-main two">29,105</h4>
                        <h3 class="ca-sub two">Monthly Target</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('yearly.set')}}">
                    <i class="fa  fa-home" aria-hidden="true"></i>
                    <div class="ca-content">
                        <h4 class="ca-main three">4109</h4>
                        <h3 class="ca-sub three">Yearly Target</h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('package.set')}}">
                    <i class="fa fa-fire" aria-hidden="true"></i>
                    <div class="ca-content">
                        <h4 class="ca-main four">69</h4>
                        <h3 class="ca-sub four">Package Target</h3>
                    </div>
                </a>
            </li>
            <div class="clearfix"></div>
        </ul>
    </div>
        </div>
    </div>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
                {{--<!-- /inner_content_w3_agile_info-->--}}
                {{--<div class="">--}}
                    {{--<div class="agile_top_w3_grids">--}}
                        {{--<ul class="ca-menu">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('daily.set')}}">--}}
                                    {{--<i class="fa fa-glass" aria-hidden="true"></i>--}}
                                    {{--<div class="ca-content">--}}
                                        {{--<h4 class="ca-main">0001</h4>--}}
                                        {{--<h3 class="ca-sub">Daily Target</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('weekly.set')}}">--}}
                                    {{--<i class="fa fa-tasks" aria-hidden="true"></i>--}}
                                    {{--<div class="ca-content">--}}
                                        {{--<h4 class="ca-main one">0001</h4>--}}
                                        {{--<h3 class="ca-sub one">Weekly Target</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('monthly.set')}}">--}}
                                    {{--<i class="fa fa-database" aria-hidden="true"></i>--}}
                                    {{--<div class="ca-content">--}}
                                        {{--<h4 class="ca-main two">29,105</h4>--}}
                                        {{--<h3 class="ca-sub two">Monthly Target</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('yearly.set')}}">--}}
                                    {{--<i class="fa  fa-home" aria-hidden="true"></i>--}}
                                    {{--<div class="ca-content">--}}
                                        {{--<h4 class="ca-main three">4109</h4>--}}
                                        {{--<h3 class="ca-sub three">Yearly Target</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('package.set')}}">--}}
                                    {{--<i class="fa fa-fire" aria-hidden="true"></i>--}}
                                    {{--<div class="ca-content">--}}
                                        {{--<h4 class="ca-main four">69</h4>--}}
                                        {{--<h3 class="ca-sub four">Package Target</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="prograc-blocks_agileits">--}}
                        {{--<div class="col-md-6 bars_agileits agile_info_shadow">--}}
                            {{--<h3 class="w3_inner_tittle two">Target Table Chart</h3>--}}
                            {{--<div class='bar_group'>--}}
                            {{--<div class='bar_group__bar thin' label='Daily' show_values='true' tooltip='true'--}}
                            {{--value='{{$fdresult}}'></div>--}}
                            {{--<div class='bar_group__bar thin' label='Weekly' show_values='true' tooltip='true'--}}
                            {{--value='{{$fwresult}}'></div>--}}
                            {{--<div class='bar_group__bar thin' label='Mounthly' show_values='true' tooltip='true'--}}
                            {{--value='{{$fmresult}}'></div>--}}
                            {{--<div class='bar_group__bar thin' label='Yearly' show_values='true' tooltip='true'--}}
                            {{--value='{{$fyresult}}'></div>--}}
                            {{--<div class='bar_group__bar thin' label='Package' show_values='true' tooltip='true'--}}
                            {{--value='{{$fpresult}}'></div>--}}
                            {{--<input class='bar_group__bar thin' label='' show_values='true' type="hidden" tooltip='true'--}}
                            {{--value='100'></input>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 fallowers_agile agile_info_shadow">--}}
                            {{--<h3 class="w3_inner_tittle two">Details Progress</h3>--}}
                            {{--<div class="work-progres">--}}
                                {{--<div class="table-responsive">--}}
                                    {{--<table class="table table-hover">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                    {{--<th>#</th>--}}
                                    {{--<th>Total</th>--}}
                                    {{--<th>Below</th>--}}
                                    {{--<th>Average</th>--}}
                                    {{--<th>Success</th>--}}
                                    {{--<th>Progress</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<tr>--}}
                                    {{--<td style="color:red; font-size: 15px;text-transform: uppercase;">Daily T</td>--}}
                                    {{--<td>{{$alldinfo['allrow']}}</td>--}}
                                    {{--<td><span class="label label-danger">{{$alldinfo['belowav']}}</span></td>--}}
                                    {{--<td><span class="label label-info">{{$alldinfo['average']}}</span></td>--}}
                                    {{--<td><span class="badge badge-success">{{$alldinfo['success']}}</span></td>--}}
                                    {{--<td><span class="badge badge-danger">--}}
                                    {{--@if($fdresult < 65)--}}
                                    {{--<strong>Try More</strong>--}}
                                    {{--@elseif(  $fdresult < 85)--}}
                                    {{--<strong>In progress</strong>--}}
                                    {{--@else--}}
                                    {{--<strong>Success</strong>--}}
                                    {{--@endif--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td style="color:red; font-size: 15px;text-transform: uppercase;">Weekly T</td>--}}
                                    {{--<td>{{$allwinfo['allrow']}}</td>--}}
                                    {{--<td><span class="label label-danger">{{$allwinfo['belowav']}}</span></td>--}}
                                    {{--<td><span class="label label-info">{{$allwinfo['average']}}</span></td>--}}
                                    {{--<td><span class="badge badge-success">{{$allwinfo['success']}}</span></td>--}}
                                    {{--<td><span class="badge badge-danger">--}}
                                    {{--@if($fwresult < 65)--}}
                                    {{--<strong>Try More</strong>--}}
                                    {{--@elseif(  $fwresult < 85)--}}
                                    {{--<strong>In progress</strong>--}}
                                    {{--@else--}}
                                    {{--<strong>Success</strong>--}}
                                    {{--@endif--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td style="color:red; font-size: 15px;text-transform: uppercase;">Mounthly T</td>--}}
                                    {{--<td>{{$allminfo['allrow']}}</td>--}}
                                    {{--<td><span class="label label-danger">{{$allminfo['belowav']}}</span></td>--}}
                                    {{--<td><span class="label label-info">{{$allminfo['average']}}</span></td>--}}
                                    {{--<td><span class="badge badge-success">{{$allminfo['success']}}</span></td>--}}
                                    {{--<td><span class="badge badge-danger">--}}
                                    {{--@if($fmresult < 65)--}}
                                    {{--<strong>Try More</strong>--}}
                                    {{--@elseif(  $fmresult < 85)--}}
                                    {{--<strong>In progress</strong>--}}
                                    {{--@else--}}
                                    {{--<strong>Success</strong>--}}
                                    {{--@endif--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td style="color:red; font-size: 15px;text-transform: uppercase;">Yearly T</td>--}}
                                    {{--<td>{{$allyinfo['allrow']}}</td>--}}
                                    {{--<td><span class="label label-danger">{{$allyinfo['belowav']}}</span></td>--}}
                                    {{--<td><span class="label label-info">{{$allyinfo['average']}}</span></td>--}}
                                    {{--<td><span class="badge badge-success">{{$allyinfo['success']}}</span></td>--}}
                                    {{--<td><span class="badge badge-danger">--}}
                                    {{--@if($fyresult < 65)--}}
                                    {{--<strong>Try More</strong>--}}
                                    {{--@elseif(  $fyresult < 85)--}}
                                    {{--<strong>In progress</strong>--}}
                                    {{--@else--}}
                                    {{--<strong>Success</strong>--}}
                                    {{--@endif--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<td class="" style="color:red; font-size: 15px;text-transform: uppercase;">Package T</td>--}}
                                    {{--<td>{{$allpinfo['allrow']}}</td>--}}
                                    {{--<td><span class="label label-danger">{{$allpinfo['belowav']}}</span></td>--}}
                                    {{--<td><span class="label label-info">{{$allpinfo['average']}}</span></td>--}}
                                    {{--<td><span class="badge badge-success">{{$allpinfo['success']}}</span></td>--}}
                                    {{--<td><span class="badge badge-danger">--}}
                                    {{--@if($fpresult < 65)--}}
                                    {{--<strong>Try More</strong>--}}
                                    {{--@elseif(  $fpresult < 85)--}}
                                    {{--<strong>In progress</strong>--}}
                                    {{--@else--}}
                                    {{--<strong>Success</strong>--}}
                                    {{--@endif--}}
                                    {{--</span>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tbody>--}}
                                    {{--</table>--}}
                                    {{--<h4 style="color:green"><strong style="color:red;">Note: </strong> Try Your Best, Success Must Be--}}
                                        {{--Come .--}}
                                    {{--</h4>--}}
                                    {{--<br>--}}
                                    {{--<a href="#" class="btn btn-danger">Back To Before Page</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}


            {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection