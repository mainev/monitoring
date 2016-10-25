/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table;
var items = {};
var item_category_cd;
var item_category;
$(document).ready(function () {

    item_category_cd = $('#item_category_cd').val();
    item_category = $('#item_category_cd').find(":selected").text();
    document.getElementById('issuance_item_category').innerText = item_category;

    initItemsTable();
    $('#item_category_cd').on('change', function (d) {
        table.api().ajax.reload();
    });


});


function initItemsTable() {

    table = $("#items_table").dataTable({
        "bStateSave": false,
        "bLengthChange": false,
        "filter": false,
        "responsive": true,
        "ordering": false,
        "orderClasses": false,
        "pageLength": 10,
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
        "sAjaxSource": "api/Item/items",
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
        "fnServerData": function (sSource, aoData, fnCallback) {

            $.ajax({
                "dataType": 'json',
                "contentType": "application/json; charset=utf-8",
                "type": "GET",
                "url": sSource,
                "data": {
                    "item_category_cd": $('#item_category_cd').val(),
                    'search_value': '%' + $("#search").val() + '%'
                            // 'trx_type': $('#trx_type').val(),
                            // 'status':$('#status').val()
                },
                "success": function (msg) {
                    items = msg;
                    var data = {"aaData": items};
                    fnCallback(data);


                    item_category = $('#item_category_cd').find(":selected").text();
                    document.getElementById('issuance_item_category').innerText = item_category;
                    document.getElementById('number_of_rows').innerText = items.length;

                },
                "error": function (msg) {
                    console.log(msg);
                }});
        },
        "aoColumns": [{
                "mDataProp": "item_cd", "sTitle": "Item Code"
            },
            {
                "mDataProp": "item_descs", "sTitle": "Name"
            },
            {
                "mDataProp": "item_uom", "sTitle": "UOM"
            },
            {
                "mDataProp": "item_type_descs", "sTitle": "Type"
            },
            {
                "mDataProp": "item_category_descs", "sTitle": "Category"
            },
            {
                "mDataProp": "item_class_descs", "sTitle": "Class"
            },
            {
                "mDataProp": "remarks", "sTitle": "Remarks"
            }],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel'
        ]


    });


}
function resetTable() {
    table.api().ajax.reload();
};