@extends('layouts.admin_template')

@section('content')

<section class="content-header">
    <h1>
        {{ $page_title or "Issuance Entries" }}
        <small>{{ $page_description or null }}</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Issuance Entries</li>
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
        <div class="col-lg-9" >
            <div class="box box-primary transparent">
                <div class="box-header with-border">
                    <h3 class="box-title" id="issuance_item_category"></h3>
                    <!--                    <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                    
                                        </div>-->
                </div>
                <div class="box-body" >
                    <table id="table_drafts" class="table table-hover table-striped" ></table>
                </div>

            </div>

        </div>
        <div class="col-lg-3" >
            <div class="box box-solid transparent">
                <div class="box-header with-border">
                    <h3 class="box-title">Options</h3>
                    <!--                    <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                    
                                        </div>-->
                </div>
                <div class="box-body" >
                    <div class="form-group has-success">
                        <label>Number of Records:</label> <label id="number_of_rows" class="control-label"></label>
                    </div>
                    <div class="form-group">
                        <label>Item Category:</label>
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-cog"></i>
                            </span>
                            <select id="item_category_cd" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected" value="RM">Raw Materials</option>
                                <option value="PM">Packaging Materials</option>
                                <option value="OS">Office Supplies</option>
                                <option value="MS">Motorpool Supplies</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Transaction Type:</label>
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-cog"></i>
                            </span>
                            <select id="trx_type" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected" value="IS">Issuance Stock</option>
                                <option value="IT">Stock Transfer</option>
                                <option value="IA">Stock Adjustment</option>
                                <option value="IQ">Stock Quarantine</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-cog"></i>
                            </span>
                            <select id="status" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option  value="Approved">Approved</option>
                                <option selected="selected" value="Draft">Draft</option>
                                <option value="Disapprove">Disapproved</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>


<!-- JAVASCRIPTS -->
<script src="{{ asset ("/app/js/issuance_entries.js") }}" type="text/javascript"></script>


@endsection
