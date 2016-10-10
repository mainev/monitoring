@extends('layouts.admin_template')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="form-group-sm">
            <label>Date:</label>
            <div class="input-group date">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="text" class="form-control pull-right" id="datepicker">
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-12" >
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest entries...</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                     <button type="button" class="btn btn-box-tool" ><i class="fa fa-gear"></i>
                    </button>
                </div>
            </div>
            <div class="box-body no-padding" >
                <table id="table_stockcards" class="table  table-bordered table-hover" ></table>
            </div>

        </div>

    </div>
</div>


<!-- JAVASCRIPTS -->
 <script src="{{ asset ("/app/js/stockcards.js") }}" type="text/javascript"></script>





@endsection
