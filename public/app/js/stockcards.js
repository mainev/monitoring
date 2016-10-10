/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {

    var stockcards = {};
    $.ajax({
        "dataType": 'json',
        "contentType": "application/json; charset=utf-8",
        "type": "GET",
        "url": "api/stockcards",
        "data": "",
        "success": function (msg) {
            stockcards = msg;
            $("#table_stockcards").DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "pageLength": 6,
                "aaData": stockcards,
                "scrollX": true,
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
    });

//    $("#table_stockcards").DataTable({
//        "paging": true,
//        "lengthChange": true,
//        "searching": true,
//        "ordering": true,
//        "info": false,
//        "responsive": true,
//        "autoWidth": false,
//        "pageLength": 10,
//        "aaData": stockcards,
//        "aoColumns": [{
//                "mDataProp": "audit_date"
//            }]
//
//
//    });
});
