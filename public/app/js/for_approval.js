/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table;
var drafts = {};
var item_category_cd;
var item_category;
$(document).ready(function () {

    item_category_cd = $('#item_category_cd').val();
    item_category = $(this).find(":selected").text();
    document.getElementById('item_category').innerText = item_category;

    initDraftsTable(item_category_cd);
    $('#item_category_cd').on('change', function (d) {
        item_category_cd = $(this).find(":selected").val();
        item_category = $(this).find(":selected").text();
        document.getElementById('item_category').innerText = item_category;
        // initDraftsTable(item_category_cd);
        table.api().ajax.reload();
    });
});


function initDraftsTable() {

    table = $("#table_drafts").dataTable({
        "bStateSave": false,
        "bLengthChange": false,
        "filter": false,
        "responsive": true,
        "ordering": false,
        "orderClasses": false,
        "pageLength": 5,
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
        "sAjaxSource": "api/get_drafts",
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
        "fnServerData": function (sSource, aoData, fnCallback) {

            $.ajax({
                "dataType": 'json',
                "contentType": "application/json; charset=utf-8",
                "type": "GET",
                "url": sSource,
                "data": {"item_category_cd": item_category_cd},
                "success": function (msg) {
                    drafts = msg;
                    var data = {"aaData": drafts};
                    fnCallback(data);
                    document.getElementById('number_of_rows').innerText = drafts.length;

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
                "mDataProp": "company_descs", "sTitle": "Company"
            },
            {
                "mDataProp": "warehouse", "sTitle": "Warehouse"
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
                "mDataProp": "item_remarks", "sTitle": "Item Remarks"
            }]


    });


}