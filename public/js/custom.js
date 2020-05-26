/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

$('.success', function() {
    swal('This modal will disappear soon!', {
        buttons: false,
        timer: 3000,
    });
});

$("#table-1").dataTable({
    "columnDefs": [
        { "sortable": false, "targets": [2,3] }
    ]
});
$("#table-2").dataTable({
    "columnDefs": [
        { "sortable": false, "targets": [0,2,3] }
    ]
});