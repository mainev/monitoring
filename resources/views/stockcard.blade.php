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
            <div class="box-body table-responsive no-padding" style="overflow: auto; width: inherit !important; height: 380px;">
                @if (count($stockcards) > 0)
                <table class="table  table-bordered" >
                    <thead>
                    <th></th>
                    <th>Audit Date</th>
                    <th>Audit User</th>
                    <th>Department</th>
                    <th>Company</th>
                    <th >Warehouse</th>
                    <th>Doc No.</th>
                    <th>Status</th>
                    <th>Ref No.</th>
                    <th>Item Cd</th>
                    <th>Item Name</th>
                    <th>Qty</th>
                    <th>UOM</th>
                    <th>Control No.</th>
                    <th>PO No.</th>
                    <th>RR No.</th>
                    <th>Created by</th>
                    <th>Date Created</th>
                    <th>Approved by</th>
                    <th>Date Approved</th>
                    <th>Remarks</th>
                    </thead>
                    <tbody>
                        @foreach ($stockcards as $stockcard)
                        <tr>
                            <td><input type="checkbox"/></td>
                            <td class="table-text"><div>  {{ date('m/d/Y', strtotime($stockcard->audit_date)) }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->audit_user }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->department }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->company_descs }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->warehouse }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->doc_no }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->status }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->ref_no }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->item_cd }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->item_descs }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->qty }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->uom }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->control_no }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->po_no }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->receiving_receipt }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->created_by }}</div></td>
                            <td class="table-text"><div>{{ date('m/d/Y', strtotime( $stockcard->created_date)) }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->approved_by }}</div></td>
                            <td class="table-text"><div>{{ date('m/d/Y', strtotime( $stockcard->approved_date)) }}</div></td>
                            <td class="table-text"><div>{{ $stockcard->remarks }}</div></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

        </div>

    </div>
</div>







@endsection
