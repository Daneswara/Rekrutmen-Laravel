// console.log('object :>> ges');
// let "{{url('/')}}"= "<?php echo base_url()?>";
// console.log('"{{url('/')}}":>> ', base_url);

function area(area_id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/area",
        success: function (data) {
			// console.log('data :>> ', data);
            var select = $('[name="issue_area"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.area_id +
                        '">' +
                        item.area_name +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (area_id != "") {
                $('[name="issue_area"] option[value=' + area_id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $("#issue_area").select2({
        theme: "bootstrap4",
    });
}
function kategori(area_id, kategori_id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/kategori/" + area_id,
        success: function (data) {
            var select = $('[name="issue_kategori"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.kategori_id +
                        '">' +
                        item.kategori_name +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (kategori_id != "") {
                $(
                    '[name="issue_kategori"] option[value=' + kategori_id + "]"
                ).attr("selected", "selected");
            }
        },
    });
    $("#issue_kategori").select2({
        theme: "bootstrap4",
    });
}
function subkategori(kategori_id, subkategori_id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/subkategori/" + kategori_id,
        success: function (data) {
            var select = $('[name="issue_subkategori"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.subkategori_id +
                        '">' +
                        item.subkategori_name +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (subkategori_id != "") {
                $(
                    '[name="issue_subkategori"] option[value=' +
                        subkategori_id +
                        "]"
                ).attr("selected", "selected");
            }
        },
    });
    $("#issue_subkategori").select2({
        theme: "bootstrap4",
    });
}
function dampakkual(id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/dampakkual",
        success: function (data) {
            var select = $('[name="issue_likehood"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.id +
                        '">' +
                        item.likehood +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="issue_likehood"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $("#issue_likehood").select2({
        theme: "bootstrap4",
    });
}
function dampakprofit(id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/dampakprofit",
        success: function (data) {
            var select = $('[name="issue_profit"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.id +
                        '">' +
                        item.prob_pendapatan +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="issue_profit"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $("#issue_profit").select2({
        theme: "bootstrap4",
    });
}
function dampakwaktu(id) {
    $.ajax({
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        url: "{{url('/')}}" + "/select/dampakwaktu",
        success: function (data) {
            var select = $('[name="issue_waktu"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.id +
                        '">' +
                        item.schedule_proyek +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="issue_waktu"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $("#issue_waktu").select2({
        theme: "bootstrap4",
    });
}
function selectstatus(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/status",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="issue_status"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.id +
                        '">' +
                        item.status +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="issue_status"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".issue_status").select2({
        theme: "bootstrap4",
    });
}
function pic(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/pic",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="issue_pic"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' + item.id + '">' + item.pic + "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="issue_pic"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".issue_pic").select2({
        theme: "bootstrap4",
    });
}
function selectstatusMonit(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/status",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="monit_status"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' +
                        item.id +
                        '">' +
                        item.status +
                        "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="monit_status"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".issue_status").select2({
        theme: "bootstrap4",
    });
}
function pic_div(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/pic_div",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="pic_div"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' + item.id + '">' + item.pic + "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="pic_div"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".pic_div").select2({
        theme: "bootstrap4",
    });
}
function pic_div_cross(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/pic_div_cross",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="pic_div_cross"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' + item.id + '">' + item.pic + "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="pic_div_cross"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".pic_div_cross").select2({
        theme: "bootstrap4",
    });
}
function pic_korporat(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/pic_korporat",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="pic_korporat"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' + item.id + '">' + item.pic + "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="pic_korporat"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".pic_korporat").select2({
        theme: "bootstrap4",
    });
}
function pic_korporat_cross(id = "") {
    $.ajax({
        url: "{{url('/')}}" + "/select/pic_korporat_cross",
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        success: function (data) {
            var select = $('[name="pic_korporat_cross"]')
                .empty()
                .append('<option value="">-- Please select --</option>');
            $.each(JSON.parse(data), function (i, item) {
                select.append(
                    '<option value="' + item.id + '">' + item.pic + "</option>"
                );
            });
        },
        complete: function () {
            if (id != "") {
                $('[name="pic_korporat_cross"] option[value=' + id + "]").attr(
                    "selected",
                    "selected"
                );
            }
        },
    });
    $(".pic_korporat_cross").select2({
        theme: "bootstrap4",
    });
}
