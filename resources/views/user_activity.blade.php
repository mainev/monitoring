@extends('layouts.admin_template')

@section('content')

<section class="content-header">
    <h1>
        {{ $page_title or "User Activity" }}
        <!--<small>{{ $page_description or null }}</small>-->
        <small>User's stockcard activity</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Activity</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-12" >
            
            <div class="box box-default transparent">
                <div class="box-header with-border ">
                    <h3 class="box-title" ><span id="selected_user"></span></h3>
                    <div class="box-tools pull-right">
<!--                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>-->
                        
                        <div class='' style='width: 250px;'>
                            <select id="user" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        </select>
                        </div>
                        
                    </div>
                </div>
                <div class="box-body" >

                    <div class="chart">
                        <canvas id="areaChart" style="height:300px"></canvas>

                    </div>



                </div>

            </div>

        </div>

    </div>

</section>


<!-- JAVASCRIPTS -->
<script src="{{ asset ("/app/js/activity_tracker.js") }}" type="text/javascript"></script>

@endsection
