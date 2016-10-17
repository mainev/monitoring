@extends('layouts.admin_template')

@section('content')

<section class="content-header">
    <h1>
        {{ $page_title or "Latest Entries" }}
        <small>{{ $page_description or null }}</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Latest Entries</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12" >
            <div class="box box-default">
                <div class="box-header with-border">

                    <!--<h3 class="box-title">Showing top <span id="displayed_item_limit"></span></h3>-->
                    <span>No. of items:</span>
                    <input id="no_of_records" type="number" class="box-input" placeholder="" style="width: 100px;" onchange="resetTable()">

                    <div class="box-tools pull-right">
<!--                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" ><i class="fa fa-gear"></i>
                        </button>-->
                        <!--                        <div class="col-lg-3 pull-right">
                                                    <div class="form-group">
                        
                        
                                                        <div class="input-group">
                                                            
                                                            <input type="text" class="form-control pull-right" >
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-search"></i>
                                                            </div>
                                                        </div>
                        
                        
                                                    </div>
                        
                                                </div>-->


<!--                        <span>Date Filter:</span>
                        <input id="date" type="text" class="box-input" >
                        <input id="search" type="button" class="btn btn-info" value="Search">-->
                        <input id="search" type="text" class="box-input" placeholder="Search..." >

                    </div>
                </div>
                <div class="box-body " >
                    <table id="table_stockcards" class="table   table-hover table-striped" ></table>
                </div>

            </div>

        </div>
    </div>


</section>

<!-- JAVASCRIPTS -->
<script src="{{ asset ("/app/js/stockcards.js") }}" type="text/javascript"></script>





@endsection
