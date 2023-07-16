var Index = (function () {
    const csrf_token = $('meta[name="_token"]').attr("content");
    var table;

    var handleMasterItem = function () {
        table = $("#tabelMasterItem").DataTable({
            responsive: true,
            autoWidth: true,
            pageLength: 10,
            searching: true,
            paging: true,
            lengthMenu: [
                [10, 25, 50],
                [10, 25, 50],
            ],
            language: {
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                infoEmpty: "Menampilkan 0 - 0 dari 0 data",
                infoFiltered: "",
                zeroRecords: "Data tidak di temukan",
                loadingRecords: "Loading...",
                processing: "Processing...",
            },
            columnsDefs: [
                { searchable: false, target: [0, 1] },
                { orderable: false, target: 0 },
            ],
            processing: true,
            serverSide: true,
            ajax: {
                url: url + "/admin/master-items",
                type: "POST",
                data: {
                    _token: csrf_token,
                },
            },
            columns: [
                { data: "rnum", orderable: false },
                { data: "nama", orderable: false },
                { data: "keterangan", orderable: false },
                { data: "harga", orderable: false },
                { data: "action", orderable: false },
            ],
            // rowCallback: function (row, data) {
            //   console.log(row);
            //   console.log(data);
            // },
        });
        $("#tabelMasterItem tbody").on("click", "tr", function () {
            // console.log(table.row(this).data());
            handleShowInModal(table.row(this).data());
        });
    };

    var handleShowInModal = function (param) {
        console.log(param);
    };

    //function add data master item
    var handleAddData = function () {
        $("#masterItemForm").submit(function (e) {
            e.preventDefault();

            const form = $(this);
            let formData = new FormData(form[0]);

            $.ajax({
                type: "POST",
                url: url + "/admin/master-item",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    toastr.success("Data Berhasil Disimpan", "Success");
                    setTimeout(function () {
                        location.reload();
                    }, 5000);
                },
                error: function (response) {
                    $.each(response.responseJSON, function (key, value) {
                        toastr.error(value);
                    });
                },
            });
        });
    };

    return {
        init: function () {
            handleMasterItem();
            handleAddData();
        },
    };
})();

$(document).ready(function () {
    Index.init();
});
