@extends('layout_admin/page')
@section('content')
    
<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Post a Job</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="index.html">Admin</a></li>
                    <li><span>Post New Job</span></li>
                </ul>
            </div>
        </div>
    </div>
    @foreach ($job as $item)
    @endforeach
    <div class="row">
        <div class="col-lg-12">
            <div class="section-box">
                <div class="container">
                    <div class="panel-white mb-30">
                        <div class="box-padding bg-postjob">
                            <h5 class="icon-edu">Tell us about your role</h5>
                            <div class="row mt-30">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Judul Pekerjaan *</label>
                                                <input class="form-control" type="text" placeholder="Judul" name="judul" id="judul">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Deskripsi/Syarat *</label>
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="8"> </textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Job location</label>
                                                <input class="form-control" type="text" placeholder="e.g. &quot;New York City&quot; or &quot;San Francisco”">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Lokasi Kerja *</label>
                                                <select name="lokasi" id="lokasi" class="form-control"></select>
                                                {{-- <select class="form-control">
                                                    <option value="1">Remote</option>
                                                    <option value="1">Office</option>
                                                </select> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Salary</label>
                                                <input class="form-control" type="text" placeholder="$2200 - $2500">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Tags (optional) </label>
                                                <input class="form-control" type="text" placeholder="Figma, UI/UX, Sketch...">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-6 col-md-6">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Upload Icon</label>
                                                    <input type="file" name="file_icon" id="file_icon" class="form-control" accept="image/*">
                                                    <input type="hidden" name="file_icon_current" id="file_icon_current" value="{{$item->url_icon}}">
                                                </div>
                                            </div>
                                            {{-- <div class="form-group mb-30">
                                                <div class="mt-35 mb-40 box-info-profie">
                                                    <div class="add-file-upload">
                                                        <input id="icon_job" class="fileupload" type="file" hidden />
                                                    </div>
                                                    <div class="image-profile"><img id="avatar" src="{{$item->url_icon}}" alt="jobbox"></div><label style="padding-right: 20px;" id="avatar_name_label"></label><a class="btn btn-apply" onclick="uploadAvatar()">Upload Avatar</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><span>Job_required.pdf</span><a class="btn btn-delete">Delete</a></div>
                                        </div> --}}
                                        <div class="col-lg-12">
                                            <div class="form-group mt-10">
                                                <button class="btn btn-warning btn-brand icon-book" onclick="save_job(0)">Draft New Job</button>
                                                <button class="btn btn-default btn-brand icon-tick" onclick="save_job(1)">Post New Job</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="section-box">
            <div class="container">
                <div class="panel-white pt-30 pb-30 pl-15 pr-15">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-10">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/microsoft.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/acer.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/nokia.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/asus.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/casio.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/dell.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/panasonic.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/vaio.svg" alt="jobBox"></div>
                                <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-20">
        <div class="container">
            <div class="box-footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                        <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/jobbox-job-portal-html-bootstrap-5-template/39217891" target="_blank">JobBox </a>Dashboard <span> Made by </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                        <ul class="menu-footer">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

@section('modal')
    @include('/modal/register')
    @include('/modal/login')
@endsection

@section('js')

    <script>
        $(document).ready(function () {
            selectLokasi();
        });
        function save_job(id) {
            var into = 1;
            var fd = new FormData();
            $('#deskripsi').val() ? fd.append('deskripsi', $('#deskripsi').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Deskripsi", "info"));
            $('#judul').val() ? fd.append('judul', $('#judul').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Judul", "info"));
            $('#lokasi').val() ? fd.append('lokasi', $('#lokasi').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Lokasi", "info"));
            fd.append('is_publish', id);
            fd.append('file_icon', $("#file_icon")[0].files[0])
            if (into >= 1){
                $.ajax({
                    type: "POST",
                    headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                    url: "{{url('/')}}" + "/admin/save_job",
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // console.log('response :>> ', response);
                        data = JSON.parse(response).result;
                        if (data.includes("Sukses")) {
                            Swal.fire("Good job!", data, "success").then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = window.location.href;
                                }
                            });
                        } else {
                            Swal.fire("Gagal", data, "error");
                        }
                    }
                });
            }
            
        }
        function selectLokasi(lokasi) {
            $.ajax({
                type: "POST",
                headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                url: "{{url('/')}}" + "/select/lokasi",
                success: function (data) {
                    // console.log('data :>> ', data);
                    var select = $('[name="lokasi"]')
                        .empty()
                        .append('<option value="">-- Please select --</option>');
                    $.each(JSON.parse(data), function (i, item) {
                        select.append(
                            '<option value="' +
                                item.id +
                                '">' +
                                item.lokasi +
                                "</option>"
                        );
                    });
                },
                complete: function () {
                    if (area_id != "") {
                        $('[name="issue_area"] option[value=' + lokasi + "]").attr(
                            "selected",
                            "selected"
                        );
                    }
                },
            });
            $("#lokasi").select2({
                theme: "bootstrap4",
            });
        }
        // function uploadAvatar(param) {
        //     var fd = new FormData();
        //     var into = 1;
        //     $('#icon_job').val() ? fd.append('icon_job', $("#icon_job")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan Avatar", "info"));
        //     if (into >= 1) {
        //         $.ajax({
        //             type: "POST",
        //             headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
        //             url: "{{url('/')}}" + "/admin/save_icon",
        //             data: fd,
        //             processData: false,
        //             contentType: false,
        //             success: function(response) {
        //                 // console.log('response :>> ', response);
        //                 data = JSON.parse(response).result;
        //                 if (data.includes("Sukses")) {
        //                     Swal.fire("Good job!", data, "success").then((result) => {
        //                         if (result.isConfirmed) {
        //                             window.location.href = window.location.href;
        //                         }
        //                     });
        //                 } else {
        //                     Swal.fire("Gagal", data, "error");
        //                 }
        //             }
        //         });
        //     }
        // }
    </script>
    
@endsection