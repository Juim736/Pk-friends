@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="w3l-table-info agile_info_shadow">
                <h3 class="w3_inner_tittle two">Available Group Wise Donor List</h3>

                <table id="table-no-resize">
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
                    @if(count($availableDonor) > 0)
                        @foreach($availableDonor as $donor)
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





{{--@extends('layouts.master')--}}
{{--@section('header_link')--}}
    {{--<link rel="stylesheet" href="{{ asset('/assets/DataTable/dataTable.bootstrap.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('/assets/DataTable/dataTable.responsive.bootstrap.css') }}">--}}
{{--@endsection--}}
{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="w3l-table-info agile_info_shadow">--}}
                {{--<h3 class="w3_inner_tittle two">Availabe Group Wise Donar List</h3>--}}

                {{--<table id="donor_table" class="table table-striped table-bordered dt-responsive nowrap">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Blood Group</th>--}}
                        {{--<th>Current Zone</th>--}}
                        {{--<th>Mobile</th>--}}
                        {{--<th>Union</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}

                    {{--@if(count($availableDonor) > 0)--}}

                        {{--@foreach($availableDonor as $donor)--}}
                            {{--<tr>--}}
                                {{--<td>{{ ucfirst($donor->first_name.' - '.$donor->last_name )  }}</td>--}}
                                {{--<td>{{ $donor->blood }}</td>--}}
                                {{--@if($donor->current_zone)--}}
                                    {{--<td>{{ $donor->current_zone }}</td>--}}
                                {{--@else--}}
                                    {{--<td>{{ $donor->union }}</td>--}}
                                {{--@endif--}}
                                {{--<td>{{ $donor->mobile }}</td>--}}
                                {{--<td>{{ $donor->union }}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}

                    {{--@else--}}
                        {{--<tr>--}}
                            {{--No Result Found ....--}}
                        {{--</tr>--}}
                    {{--@endif--}}

                    {{--</tbody>--}}
                {{--</table>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

{{--@section('footer_script')--}}

    {{--<script src="{{ asset('/assets/DataTable/jquery.dataTable.js') }}"></script>--}}
    {{--<script src="{{ asset('/assets/DataTable/dataTable.bootstrap.js') }}"></script>--}}
    {{--<script src="{{ asset('/assets/DataTable/dataTable.responsive.js') }}"></script>--}}
    {{--<script src="{{ asset('/assets/DataTable/dataTable.responsive.bootstrap.js') }}"></script>--}}

    {{--<!-- Bootstrap JavaScript -->--}}
    {{--<script>--}}


        {{--$(function () {--}}
            {{--$('#donor_table').DataTable({--}}
            {{--});--}}
        {{--});--}}

    {{--</script>--}}

{{--@endsection--}}