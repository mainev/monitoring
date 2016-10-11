/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var table;
$(document).ready(function () {
    initTable();

//     $('#date_filter').datepicker({
//        autoclose: true,
//        inline: true,
//        
//        onSelect: function (dateText, inst) {
//            console.log("hello");
//            alert('hello');
//        }
//    });
//    



});
function initTable() {


  


    table = $("#table_stockcards").dataTable({
        "bStateSave": false,
        "bLengthChange": false,
        "filter": false,
        "responsive": true,
        "ordering": false,
        "orderClasses": false,
        "pageLength": 6,
        "info": false,
        //  "scrollY": "400px",
        // "scrollY": "300px",
        "scrollX": true,
        // "scrollCollapse": false,
        "scrollCollapse": false,
        "bProcessing": true,
        "bPaginate": true,
        "bDestroy": true,
        "bServerSide": false,
        "bAutoWidth": false,
        "sAjaxSource": "api/stockcards",
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
        "fnServerData": function (sSource, aoData, fnCallback) {

            $.ajax({
                "dataType": 'json',
                "contentType": "application/json; charset=utf-8",
                "type": "GET",
                "url": sSource,
                "data": {},
                "success": function (msg) {
                    drafts = msg;
                    var data = {"aaData": drafts};
                    fnCallback(data);


                },
                "error": function (msg) {
                    console.log(msg);
                }});
        },
        "aoColumns": [{
                "mDataProp": "audit_date", "sTitle": "Audit Date"
            },
            {
                "mDataProp": "audit_user", "sTitle": "User"
            },
            {
                "mDataProp": "department", "sTitle": "Department"
            },
            {
                "mDataProp": "warehouse", "sTitle": "Warehouse"
            },
            {
                "mDataProp": "company_descs", "sTitle": "Company"
            },
            {
                "mDataProp": "doc_no", "sTitle": "Doc No."
            },
            {
                "mDataProp": "status", "sTitle": "Status"
            },
            {
                "mDataProp": "ref_no", "sTitle": "Reference"
            },
            {
                "mDataProp": "item_cd", "sTitle": "Item Cd"
            },
            {
                "mDataProp": "item_descs", "sTitle": "Item Name"
            },
            {
                "mDataProp": "qty", "sTitle": "Qty"
            },
            {
                "mDataProp": "uom", "sTitle": "UOM"
            },
            {
                "mDataProp": "control_no", "sTitle": "Control No."
            },
            {
                "mDataProp": "po_no", "sTitle": "PO No."
            },
            {
                "mDataProp": "receiving_receipt", "sTitle": "RR No."
            },
            {
                "mDataProp": "created_by", "sTitle": "Created By"
            },
            {
                "mDataProp": "created_date", "sTitle": "Date Created"
            },
            {
                "mDataProp": "approved_date", "sTitle": "Date Approved"
            },
            {
                "mDataProp": "approved_by", "sTitle": "Approved By"
            },
            {
                "mDataProp": "item_remarks", "sTitle": "Item Remarks"
            }]


    });

}
;
