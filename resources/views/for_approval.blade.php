@extends('layouts.admin_template')

@section('content')

<section class="content-header">
    <h1>
        {{ $page_title or "For Approval" }}
        <small>{{ $page_description or null }}</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">For Approval</li>
    </ol>
</section>
<!--<div class="row">
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
</div>-->

<section class="content">
    <div class="row">
        <div class="col-lg-8" >
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title" id="item_category"></h3>
                    <!--                    <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                    
                                        </div>-->
                </div>
                 <div class="box-body" >
                    <table id="table_drafts" class="table  table-bordered table-hover table-striped" ></table>
                </div>

            </div>

        </div>
        <div class="col-lg-4" >
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Details</h3>
                    <!--                    <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                    
                                        </div>-->
                </div>
                <div class="box-body" >
                    
                     <div class="form-group has-success">
                         <label>Number of Records:</label> <label id="number_of_rows" class="control-label"></label>
                        
                    </div>
                    <div class="form-group-sm">
                        <label>Item Category:</label>
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="fa fa-sitemap"></i>
                            </span>
                            <select id="item_category_cd" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected" value="RM">Raw Materials</option>
                                <option value="PM">Packaging Materials</option>
                                <option value="OS">Office Supplies</option>
                                <option value="MS">Motorpool Supplies</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


<!-- JAVASCRIPTS -->
<script src="{{ asset ("/app/js/for_approval.js") }}" type="text/javascript"></script>


@endsection
