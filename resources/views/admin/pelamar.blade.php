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
</div>
@endsection

@section('modal')
    @include('/modal/register')
    @include('/modal/login')
@endsection

@section('js')

    <script>
    </script>
    
@endsection