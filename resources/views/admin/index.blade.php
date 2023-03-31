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
                                                <label class="font-sm color-text-mutted mb-10">Job title *</label>
                                                <input class="form-control" type="text" placeholder="e.g. Senior Product Designer">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Add your job description *</label>
                                                <textarea class="form-control" name="message" rows="8"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam.</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Job location</label>
                                                <input class="form-control" type="text" placeholder="e.g. &quot;New York City&quot; or &quot;San Francisco”">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                                                <select class="form-control">
                                                    <option value="1">Remote</option>
                                                    <option value="1">Office</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Salary</label>
                                                <input class="form-control" type="text" placeholder="$2200 - $2500">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Tags (optional) </label>
                                                <input class="form-control" type="text" placeholder="Figma, UI/UX, Sketch...">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <div class="box-upload">
                                                    <div class="add-file-upload">
                                                        <input class="fileupload" type="file" name="file">
                                                    </div><a class="btn btn-default">Upload File</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><span>Job_required.pdf</span><a class="btn btn-delete">Delete</a></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-10">
                                                <button class="btn btn-default btn-brand icon-tick">Post New Job</button>
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