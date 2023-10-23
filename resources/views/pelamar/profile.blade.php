@extends('layout/page')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    
<section class="section-box-2">
    <div class="container">
        <div class="banner-hero banner-image-single"><img src="{{ asset('vendor/assets/imgs/page/candidates/img.png')}}" alt="jobbox"><a class="btn-editor" href="#"></a></div>
        <div class="box-company-profile">
            <div class="image-compay" style="width: 100px !important; height: 100px !important;"><img src="{{$tempat_lahir == "" ? url("vendor/assets/imgs/page/candidates/candidate-profile.png") : $url_photo }}" alt="jobbox"></div>
            <div class="row mt-10">
                <div class="col-lg-8 col-md-12">
                    <h5 class="f-18">{{$fullname}} <span class="card-location font-regular ml-20">{{$kab_dom}}</span></h5>
                    <p class="mt-0 font-md color-text-paragraph-2 mb-15">UI/UX Designer. Front end Developer</p>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-preview-icon btn-apply btn-apply-big" href="page-contact.html">Preview</a></div>
            </div>
        </div>
        <div class="border-bottom pt-10 pb-10"></div>
    </div>
</section>
<section class="section-box mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="box-nav-tabs nav-tavs-profile mb-5">
                    <ul class="nav" role="tablist">
                        <li><a class="btn btn-border aboutus-icon mb-20 active" href="#tab-my-profile" data-bs-toggle="tab" role="tab" aria-controls="tab-my-profile" aria-selected="true">My Profile</a></li>
                        <li><a class="btn btn-border recruitment-icon mb-20" href="#tab-my-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-my-jobs" aria-selected="false">My Jobs</a></li>
                        <li><a class="btn btn-border people-icon mb-20" href="#tab-saved-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-saved-jobs" aria-selected="false">Saved Jobs</a></li>
                    </ul>
                    <div class="border-bottom pt-10 pb-10"></div>
                    <div class="mt-20 mb-20"><a class="link-red" href="#">Delete Account</a></div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                <div class="content-single">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-my-profile" role="tabpanel" aria-labelledby="tab-my-profile">
                            <h3 class="mt-0 mb-15 color-brand-1">My Account</h3><a class="font-md color-text-paragraph-2" href="#">Update your profile</a>
                            <div class="mt-35 mb-40 box-info-profie">
                                <div class="add-file-upload">
                                    <input id="avatar_file" class="fileupload" type="file" hidden />
                                </div>
                                <div class="image-profile"><img id="avatar" src="{{$tempat_lahir == "" ? url("vendor/assets/imgs/page/candidates/candidate-profile.png") : $url_photo }}" alt="jobbox"></div><label style="padding-right: 20px;" id="avatar_name_label"></label><a class="btn btn-apply" onclick="uploadAvatar()">Upload Avatar</a>
                                <!-- <a class="btn btn-link">Delete</a> -->
                            </div>
                            <div class="row form-contact">
                                <div class="col-lg-9 col-md-12">
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                                        <input class="form-control" type="text" name="fullname" id="fullname" value="{{$fullname}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Email *</label>
                                        <input class="form-control" type="text" name="email" id="email" value="{{$email}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Contact number</label>
                                        <input class="form-control" type="text" name="phone" id="phone" value="+{{$phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="{{$tempat_lahir}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$tanggal_lahir}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Bio</label>
                                        <textarea class="form-control" name="bio" id="bio" rows="4">{{$bio}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Propinsi</label>
                                                <select name="prov_dom" id="prov_dom" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Kabupaten</label>
                                                <select name="kab_dom" id="kab_dom" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Kecamatan</label>
                                                <select name="kecamatan_dom" id="kecamatan_dom" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Kelurahan</label>
                                                <select name="kelurahan_dom" id="kelurahan_dom" class="form-control"></select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Zip code</label>
                                                <input class="form-control" type="text" value="82356">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Jenis Kelamin</label>
                                                <select name="kelamin" id="kelamin" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Status Perkawinan</label>
                                                <select name="status_perkawinan" id="status_perkawinan" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Agama</label>
                                                <select name="agama" id="agama" class="form-control"></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel-white mb-30">
                                            <div class="box-padding">
                                                <h5 class="icon-edu">Pendidikan</h5>
                                                <div class="row mt-30">
                                                    <div class="col-lg-9">
                                                        <div class="row">

                                                            <div class="col-lg-12 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Sekolah</label>
                                                                    <select name="id_sekolah" id="id_sekolah" class="form-control"></select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-16 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Nama Pendidikan</label>
                                                                    <input type="text" class="form-control" name="sekolah" id="sekolah">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-16 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Upload Ijazah</label>
                                                                    <input type="file" class="form-control" name="file_ijazah" id="file_ijazah">
                                                                </div>
                                                            </div>
                                                            <div class=" col-md-6" id="jurusan_id" style="display: none;">
                                                            </div>
                                                            <div class=" col-md-6" id="nilai_id" style="display: none;">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">From</label>
                                                                    <input class="form-control" type="date" name="from_pendidikan" id="from_pendidikan" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">To</label>
                                                                    <input class="form-control" type="date" name="to_pendidikan" id="to_pendidikan" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group mt-10">
                                                                    <button onclick="pendidikanAdd()" class="btn btn-default btn-brand icon-tick">Tambah Pendidikan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-timeline mt-50" id="pendidikan_list">
                                                            @foreach($pendidikan as $item)
                                                                <div class="item-timeline">
                                                                    <div class="timeline-year"> <span><?= date('Y', strtotime($item->masuk)) ?> - <?= date('Y', strtotime($item->keluar)) ?></span></div>
                                                                    <div class="timeline-info">
                                                                        <h5 class="color-brand-1 mb-20"><?= $item->sekolah ?></h5>
                                                                        <p class="color-text-paragraph-2 mb-15"><?= $item->jurusan ?></p>
                                                                    </div>
                                                                    <div class="timeline-actions"> <a class="btn btn-edit2"></a><a class="btn btn-remove"></a></div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-white mb-30">
                                            <div class="box-padding">
                                                <h5 class="icon-edu">Pengalaman Kerja</h5>
                                                <div class="row mt-30">
                                                    <div class="col-lg-9">
                                                        <div class="row">
                                                            <div class="col-lg-16 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Nama Perusahaan</label>
                                                                    <input type="text" class="form-control" name="nama_pekerjaan" id="nama_pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-16 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Jabatan</label>
                                                                    <input type="text" class="form-control" name="jabatan" id="jabatan">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-16 col-md-12">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Pengalaman Pekerjaan</label>
                                                                    <textarea type="text" class="form-control" name="pengalaman" id="pengalaman" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">From</label>
                                                                    <input class="form-control" type="date" name="from_pekerjaan" id="from_pekerjaan" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">To</label>
                                                                    <input class="form-control" type="date" name="to_pekerjaan" id="to_pekerjaan" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group mt-10">
                                                                    <button onclick="pekerjaanAdd()" class="btn btn-default btn-brand icon-tick">Tambah Pekerjaan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-timeline mt-50" id="kerja_list">
                                                            <?php foreach ($pekerjaan as $item) : ?>
                                                                <div class="item-timeline">
                                                                    <div class="timeline-year"> <span><?= date('Y', strtotime($item->masuk)) ?> - <?= date('Y', strtotime($item->keluar)) ?></span></div>
                                                                    <div class="timeline-info">
                                                                        <h5 class="color-brand-1 mb-20"><?= $item->nama_pekerjaan ?></h5>
                                                                        <p class="color-text-paragraph-2 mb-15"><?= $item->pengalaman ?></p>
                                                                    </div>
                                                                    <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                                                                </div>

                                                            <?php endforeach ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="panel-white mb-30">
                                            <div class="box-padding">
                                                <h5 class="icon-edu">Work & Experience</h5>
                                                <div class="row mt-30">
                                                    <div class="col-lg-9">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">From</label>
                                                                    <input class="form-control" type="date" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">To</label>
                                                                    <input class="form-control" type="date" data-date-format="DD MMMM YYYY" data-date="17 September 2022" value="2022-09-20" placeholder="12 September 2008">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-30">
                                                                    <label class="font-sm color-text-mutted mb-10">Description</label>
                                                                    <textarea class="form-control" name="message" rows="5"> ass</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group mt-10">
                                                                    <button class="btn btn-default btn-brand icon-tick">Add Timeline</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-timeline mt-50">
                                                            <div class="item-timeline">
                                                                <div class="timeline-year"> <span>2008 - 2012</span></div>
                                                                <div class="timeline-info">
                                                                    <h5 class="color-brand-1 mb-20">Samoo Architects &amp; Engineers</h5>
                                                                    <p class="color-text-paragraph-2 mb-15">Lorem ipsum dolor sit amet, consectetur dipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                                </div>
                                                                <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                                                            </div>
                                                            <div class="item-timeline">
                                                                <div class="timeline-year"> <span>2012 - 2014</span></div>
                                                                <div class="timeline-info">
                                                                    <h5 class="color-brand-1 mb-20">Foster &amp; Partners</h5>
                                                                    <p class="color-text-paragraph-2 mb-15">Lorem ipsum dolor sit amet, consectetur dipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                                </div>
                                                                <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                                                            </div>
                                                            <div class="item-timeline">
                                                                <div class="timeline-year"> <span>2014 - 2016</span></div>
                                                                <div class="timeline-info">
                                                                    <h5 class="color-brand-1 mb-20">Skidmore Owings &amp; Merrill</h5>
                                                                    <p class="color-text-paragraph-2 mb-15">Lorem ipsum dolor sit amet, consectetur dipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                                                </div>
                                                                <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="panel-white mb-30">
                                            <div class="box-padding">
                                                <!-- <h5>Update your CV</h5> -->
                                                <div class="row mt-30">
                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="form-group mb-30">
                                                            <div class="box-upload">
                                                                <div class="add-file-upload">
                                                                    <input class="fileupload" type="file" name="file">
                                                                </div><a class="btn btn-default">Upload File</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group mb-30 d-flex align-items-center box-file-uploaded"><span>Job_required.pdf</span><a class="btn btn-delete">Delete</a></div>
                                                    </div> -->
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group mb-30">
                                                            <label class="font-sm color-text-mutted mb-10">Upload KTP</label>
                                                            <input type="file" name="file_ktp" id="file_ktp" class="form-control">
                                                            <input type="hidden" name="file_ktp_current" id="file_ktp_current" value="{{$file_ktp}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group mb-30">
                                                            <label class="font-sm color-text-mutted mb-10">Upload SKCK</label>
                                                            <input type="file" name="file_skck" id="file_skck" class="form-control">
                                                            <input type="hidden" name="file_skck_current" id="file_skck_current" value="{{$file_skck}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group mb-30">
                                                            <label class="font-sm color-text-mutted mb-10">Upload Resume</label>
                                                            <input type="file" name="file_resume" id="file_resume" class="form-control">
                                                            <input type="hidden" name="file_resume_current" id="file_resume_current" value="{{$file_resume}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom pt-10 pb-10 mb-30"></div>
                                        <h6 class="color-orange mb-20">Change your password</h6>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Password</label>
                                                    <input class="form-control" type="password" name="password" id="password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Re-Password *</label>
                                                    <input class="form-control" type="password" name="confirm_password" id="confirm_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="message_pwd"></div>
                                        <div class="border-bottom pt-10 pb-10"></div>
                                        <div class="box-button mt-15">
                                            <button onclick="saveBiodata()" class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-my-jobs" role="tabpanel" aria-labelledby="tab-my-jobs">
                            <h3 class="mt-0 color-brand-1 mb-50">My Jobs</h3>
                            <div class="row display-list">
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-5.png')}}" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Linkedin</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">React Native Web Developer</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time"><span>4</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-6.png')}}" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Quora JSC</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Senior System Engineer</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time"><span>5</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-7.png')}}" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Nintendo</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Products Manager</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-12">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-8.png')}}" alt="jobBox"></div>
                                                    <div class="right-info"><a class="name-job" href="">Periscope</a><span class="location-small">New York, US</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h4><a href="job-details.html">Lead Quality Control QA</a></h4>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time"><span>6</span><span> mins ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
                                <ul class="pager">
                                    <li><a class="pager-prev" href="#"></a></li>
                                    <li><a class="pager-number" href="#">1</a></li>
                                    <li><a class="pager-number" href="#">2</a></li>
                                    <li><a class="pager-number" href="#">3</a></li>
                                    <li><a class="pager-number" href="#">4</a></li>
                                    <li><a class="pager-number" href="#">5</a></li>
                                    <li><a class="pager-number active" href="#">6</a></li>
                                    <li><a class="pager-number" href="#">7</a></li>
                                    <li><a class="pager-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-saved-jobs" role="tabpanel" aria-labelledby="tab-saved-jobs">
                            <h3 class="mt-0 color-brand-1 mb-50">Saved Jobs</h3>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-1.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-2.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-3.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-4.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-5.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-6.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-7.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Products Manager</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-8.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{asset('vendor/assets/imgs/brands/brand-8.png')}}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
                                <ul class="pager">
                                    <li><a class="pager-prev" href="#"></a></li>
                                    <li><a class="pager-number" href="#">1</a></li>
                                    <li><a class="pager-number" href="#">2</a></li>
                                    <li><a class="pager-number" href="#">3</a></li>
                                    <li><a class="pager-number" href="#">4</a></li>
                                    <li><a class="pager-number" href="#">5</a></li>
                                    <li><a class="pager-number active" href="#">6</a></li>
                                    <li><a class="pager-number" href="#">7</a></li>
                                    <li><a class="pager-next" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modal')
    
@endsection
@section('js')
    
<script>
    let id_prov = "{{$prov_dom}}";
    let id_kab = "{{$kab_dom}}";
    let id_kecamatan = "{{$kecamatan_dom}}";
    let id_kelurahan = "{{$kelurahan_dom}}";
    let agama_ = "{{$agama}}";
    let status_perkawinan = "{{$status_perkawinan}}";
    let jenis_kelamin = "{{$jenis_kelamin}}";
    let id_sekolah = 0;
    let cof_pwd = 1;
    let incr = 0;
    // console.log('id_prov :>> ', agama_);
    $(document).ready(function() {
        if (id_prov) {
            prov(id_prov);
            kab(id_prov, id_kab);
            kec(id_kab, id_kecamatan);
            kel(id_kecamatan, id_kelurahan);
            agama(agama_);
            kawin(status_perkawinan);
            kelamin(jenis_kelamin);
            sekolah();
        } else {
            prov();
            agama();
            kawin();
            kelamin();
            sekolah();
        }
    });
    $('#avatar').click(function() {
        $("#avatar_file").trigger("click");
        // getnameloop();
    });

    function readURL() {
        var myimg = document.getElementById("avatar");
        var input = document.getElementById("avatar_file");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                // console.log("changed");
                myimg.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.querySelector('#avatar_file').addEventListener('change', function() {
        readURL()
        $('#avatar_name_label').html($('#avatar_file').val().replace(/C:\\fakepath\\/i, ''));
    });

    // function getnameloop() {
    //     setTimeout(function() {
    //         $('#avatar_name_label').html($('#avatar_file').val().replace(/C:\\fakepath\\/i, ''));
    //         incr++;
    //         if (incr < 50) {
    //             getnameloop();
    //         }
    //     }, 3000)
    // }
    $('[name="prov_dom"]').change(function() {
        kab(this.value);
    });

    $('[name="kab_dom"]').change(function() {
        kec(this.value);
    });
    $('[name="kecamatan_dom"]').change(function() {
        kel(this.value);
    });
    $('[name="id_sekolah"]').change(function() {
        // kel(this.value);
        id_sekolah = this.value;
        htmlString = `<div class="form-group mb-30">
                        <label class="font-sm color-text-mutted mb-10">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="from-control">
                    </div>`;
        htmlString2 = `<div class="form-group mb-30">
                        <label class="font-sm color-text-mutted mb-10">Nilai IPK</label>
                        <input type="text" name="nilai" id="nilai" class="from-control">
                    </div>`;
        if (this.value >= 4) {
            if (this.value == 4) {
                $('#jurusan_id').addClass('col-lg-12');
                $("#jurusan_id").html(htmlString);
                $("#jurusan_id").css('display', 'block');
                $('#nilai_id').empty();
                $("#nilai_id").css('display', 'none');
            } else {
                $('#jurusan_id').empty();
                $('#jurusan_id').removeClass('col-lg-12');
                $('#jurusan_id').addClass('col-lg-6');
                $("#jurusan_id").html(htmlString);
                $("#jurusan_id").css('display', 'block');
                $('#nilai_id').addClass('col-lg-6');
                $("#nilai_id").html(htmlString2);
                $("#nilai_id").css('display', 'block');
            }

        } else {
            $('#nilai_id').empty();
            $("#nilai_id").css('display', 'none');
            $('#jurusan_id').empty();
            $("#jurusan_id").css('display', 'none');

        }
    });

    function uploadAvatar(param) {
        var fd = new FormData();
        var into = 1;
        $('#avatar_file').val() ? fd.append('avatar_file', $("#avatar_file")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan Avatar", "info"));
        if (into >= 1) {
            $.ajax({
                
        type: "POST",
        headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                url: "{{url('/')}}" + "/profile/save_avatar",
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

    function pendidikanAdd() {
        var fd = new FormData();
        var into = 1;
        var html = '';
        $('#file_ijazah').val() ? fd.append('file_ijazah', $("#file_ijazah")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan File Izajah", "info"));
        id_sekolah ? fd.append('id_sekolah', id_sekolah) : (into = into * 0, Swal.fire("Info", "Masukan Jenis Pendidikan", "info"));
        $('#sekolah').val() ? fd.append('sekolah', $('#sekolah').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Nama Pendidikan", "info"));
        $('#from_pendidikan').val() ? fd.append('from_pendidikan', $('#from_pendidikan').val()) : (into = into * 0, Swal.fire("Info", "Masukan Mulai Masuk", "info"));
        $('#to_pendidikan').val() ? fd.append('to_pendidikan', $('#to_pendidikan').val()) : (into = into * 0, Swal.fire("Info", "Masukan Mulai Masuk", "info"));
        if (into >= 1) {
            $('#jurusan').val() ? fd.append('jurusan', $('#jurusan').val()) : fd.append('jurusan', "-");
            $('#nilai').val() ? fd.append('nilai', $('#nilai').val()) : fd.append('nilai', 0);
            // fd.append('jurusan', $('#jurusan').val());
            // fd.append('nilai', $('#nilai').val());
            // for (var pair of fd.entries()) {
            //     console.log(pair[0] + ', ' + pair[1]);
            // }
            // console.log('object :>> ', "{{url('/')}}" + "/profile/add_pendidikan");
            $.ajax({
                type: "POST",
                headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                url: "{{url('/')}}" + "/profile/add_pendidikan",
                data: fd,
                processData: false,
                contentType: false,
                success: function(response) {
                    // console.log('response :>> ', response);
                    data = JSON.parse(response).result;
                    pendidikan = JSON.parse(response).data;
                    if (data.includes("Sukses")) {
                        Swal.fire("Good job!", data, "success").then((result) => {
                            if (result.isConfirmed) {
                                $.each(pendidikan, function (i, item) { 
                                    html +='<div class="item-timeline">'
                                    html +='    <div class="timeline-year"> <span>'+item.masuk+' - '+item.keluar+'</span></div>'
                                    html +='    <div class="timeline-info">'
                                    html +='        <h5 class="color-brand-1 mb-20">'+item.sekolah+'</h5>'
                                    html +='        <p class="color-text-paragraph-2 mb-15">'+item.jurusan+'</p>'
                                    html +='    </div>'
                                    html +='    <div class="timeline-actions"> <a class="btn btn-edit2"></a><a class="btn btn-remove"></a></div>'
                                    html +='</div>'
                                     
                                });
                                $('#pendidikan_list').html(html);
                                // window.location.href = window.location.href;
                            }
                        });
                    } else {
                        Swal.fire("Gagal", data, "error");
                    }
                }
            });
        }
    }

    function pekerjaanAdd() {
        var fd = new FormData();
        var into = 1;
        var html="";
        // console.log('$(', $('#pengalaman').val());
        $('#nama_pekerjaan').val() ? fd.append('nama_pekerjaan', $('#nama_pekerjaan').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Nama Pekerjaan", "info"));
        $('#jabatan').val() ? fd.append('jabatan', $('#jabatan').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Jabatan", "info"));
        $('#pengalaman').val() ? fd.append('pengalaman', $('#pengalaman').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Pengalaman Kerja", "info"));
        $('#from_pekerjaan').val() ? fd.append('from_pekerjaan', $('#from_pekerjaan').val()) : (into = into * 0, Swal.fire("Info", "Masukan Mulai Masuk", "info"));
        $('#to_pekerjaan').val() ? fd.append('to_pekerjaan', $('#to_pekerjaan').val()) : (into = into * 0, Swal.fire("Info", "Masukan Mulai Masuk", "info"));
        if (into >= 1) {
            $.ajax({
                type: "POST",
                headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                url: "{{url('/')}}" + "/profile/add_pekerjaan",
                data: fd,
                processData: false,
                contentType: false,
                success: function(response) {
                    // console.log('response :>> ', response);
                    data = JSON.parse(response).result;
                    kerja = JSON.parse(response).data;
                    if (data.includes("Sukses")) {
                        Swal.fire("Good job!", data, "success").then((result) => {
                            if (result.isConfirmed) {
                                $.each(kerja, function (i, item) { 
                                    html +='<div class="item-timeline">'
                                    html +='    <div class="timeline-year"> <span>'+item.masuk+' - '+item.keluar+'</span></div>'
                                    html +='    <div class="timeline-info">'
                                    html +='        <h5 class="color-brand-1 mb-20">'+item.nama_pekerjaan+'</h5>'
                                    html +='        <p class="color-text-paragraph-2 mb-15">'+item.jabatan+'</p>'
                                    html +='    </div>'
                                    html +='    <div class="timeline-actions"> <a class="btn btn-edit2"></a><a class="btn btn-remove"></a></div>'
                                    html +='</div>'
                                     
                                });
                                $('#kerja_list').html(html);
                                // window.location.href = window.location.href;
                            }
                        });
                    } else {
                        Swal.fire("Gagal", data, "error");
                    }
                }
            });
        }
    }

    function prov(id_prov) {
        
        $.ajax({
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/prov",
            success: function(data) {
                var select = $('[name="prov_dom"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' + item.id_prov + '">' + item.nama + "</option>"
                    );
                });
            },
            complete: function() {
                if (id_prov != "") {
                    $('[name="prov_dom"] option[value=' + id_prov + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#prov_dom").select2({
            theme: "bootstrap4",
        });
    }

    function kab(id_prov, id_kab) {
        $.ajax({
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/kab/" + id_prov,
            success: function(data) {
                var select = $('[name="kab_dom"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' +
                        item.id_kab +
                        '">' +
                        item.nama +
                        "</option>"
                    );
                });
            },
            complete: function() {
                if (id_kab != "") {
                    $('[name="kab_dom"] option[value=' + id_kab + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#kab_dom").select2({
            theme: "bootstrap4",
        });
    }

    function kec(id_kab, id_kec) {
        $.ajax({
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/kec/" + id_kab,
            success: function(data) {
                var select = $('[name="kecamatan_dom"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' +
                        item.id_kec +
                        '">' +
                        item.nama +
                        "</option>"
                    );
                });
            },
            complete: function() {
                if (id_kec != "") {
                    $(
                        '[name="kecamatan_dom"] option[value=' + id_kec + "]"
                    ).attr("selected", "selected");
                }
            },
        });
        $("#kecamatan_dom").select2({
            theme: "bootstrap4",
        });
    }

    function kel(id_kec, id_kel) {
        $.ajax({
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/kel/" + id_kec,
            success: function(data) {
                var select = $('[name="kelurahan_dom"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' +
                        item.id_kel +
                        '">' +
                        item.nama +
                        "</option>"
                    );
                });
            },
            complete: function() {
                if (id_kel != "") {
                    $(
                        '[name="kelurahan_dom"] option[value=' + id_kel + "]"
                    ).attr("selected", "selected");
                }
            },
        });
        $("#kelurahan_dom").select2({
            theme: "bootstrap4",
        });
    }

    function kawin(id_prov) {
        $.ajax({ 
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/kawin",
            success: function(data) {
                // console.log('data :>> ', data);
                var select = $('[name="status_perkawinan"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' + item.id + '">' + item.status_kawin + "</option>"
                    );
                });
            },
            complete: function() {
                if (id_prov != "") {
                    $('[name="status_perkawinan"] option[value=' + id_prov + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#status_perkawinan").select2({
            theme: "bootstrap4",
        });
    }

    function sekolah(id_prov) {
        $.ajax({ 
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/sekolah",
            success: function(data) {
                var select = $('[name="id_sekolah"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' + item.id + '">' + item.sekolah + "</option>"
                    );
                });
            },
            complete: function() {
                if (id_prov != "") {
                    $('[name="id_sekolah"] option[value=' + id_prov + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#id_sekolah").select2({
            theme: "bootstrap4",
        });
    }

    function kelamin(id_prov) {
        $.ajax({ 
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/kelamin",
            success: function(data) {
                var select = $('[name="kelamin"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' + item.id + '">' + item.kelamin + "</option>"
                    );
                });
            },
            complete: function() {
                if (id_prov != "") {
                    $('[name="kelamin"] option[value=' + id_prov + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#kelamin").select2({
            theme: "bootstrap4",
        });
    }

    function agama(id_prov) {
        $.ajax({ 
            type: "POST",
            headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
            url: "{{url('/')}}" + "/select/agama",
            success: function(data) {
                var select = $('[name="agama"]')
                    .empty()
                    .append('<option value="">-- Please select --</option>');
                $.each(JSON.parse(data), function(i, item) {
                    select.append(
                        '<option value="' + item.id + '">' + item.agama + "</option>"
                    );
                });
            },
            complete: function() {
                if (id_prov != "") {
                    agama
                    $('[name="agama"] option[value=' + id_prov + "]").attr(
                        "selected",
                        "selected"
                    );
                }
            },
        });
        $("#agama").select2({
            theme: "bootstrap4",
        });
    }
    var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    $('#password, #confirm_password').on('keyup', function() {
        if ($('#password').val() == $('#confirm_password').val()) {
            value = $('#password').val();
            $('#message_pwd').html('Matching').css('color', 'green');
            const isNonWhiteSpace = /^\S*$/;
            if (!isNonWhiteSpace.test(value)) {
                cof_pwd * 0;
                $('#message_pwd').html('Password must not contain Whitespaces.').css('color', 'red');
            }

            const isContainsUppercase = /^(?=.*[A-Z]).*$/;
            if (!isContainsUppercase.test(value)) {
                cof_pwd * 0;
                $('#message_pwd').html('Password must have at least one Uppercase Character').css('color', 'red');
            }

            const isContainsLowercase = /^(?=.*[a-z]).*$/;
            if (!isContainsLowercase.test(value)) {
                cof_pwd * 0;
                $('#message_pwd').html('Password must have at least one Lowercase Character.').css('color', 'red');
            }

            const isContainsNumber = /^(?=.*[0-9]).*$/;
            if (!isContainsNumber.test(value)) {
                cof_pwd * 0;
                $('#message_pwd').html('Password must contain at least one Digit.').css('color', 'red');
            }

            const isContainsSymbol = /^(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]).*$/;
            if (!isContainsSymbol.test(value)) {
                $('#message_pwd').html('Password must contain at least one Special Symbol.').css('color', 'red');
            }

            const isValidLength = /^.{8,16}$/;
            if (!isValidLength.test(value)) {
                cof_pwd * 0;
                $('#message_pwd').html('Password must be 8-16 Characters Long.').css('color', 'red');
            }
        } else
            cof_pwd * 0;
        $('#message_pwd').html('Not Matching').css('color', 'red');
    });

    function saveBiodata(param) {
        var fd = new FormData();
        var into = 1;
        if ($('#file_ktp_current').val().length == 0) {
            $('#file_ktp').val() ? fd.append('file_ktp', $("#file_ktp")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan File KTP", "info"));
            $('#file_ktp_current').val().length == 0 ? fd.append('file_ktp_current', "ada") : (into = into * 0, Swal.fire("   Info", "Masukan File KTP", "info"));
        }else{
            fd.append('file_ktp_current',"Tidak Ada");
        }
        if ($('#file_resume_current').val().length == 0) {
            $('#file_resume').val() ? fd.append('file_resume', $("#file_resume")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan File Resume", "info"));
            $('#file_resume_current').val().length == 0 ? fd.append('file_resume_current', "ada") : (into = into * 0, Swal.fire("   Info", "Masukan File Resume", "info"));
        }else{
            fd.append('file_resume_current',"Tidak Ada");
        }
        if ($('#file_skck_current').val().length == 0) {
            $('#file_skck').val() ? fd.append('file_skck', $("#file_skck")[0].files[0]) : (into = into * 0, Swal.fire("Info", "Masukan File SKCK", "info"));
            $('#file_skck_current').val().length == 0 ? fd.append('file_skck_current', "ada") : (into = into * 0, Swal.fire("   Info", "Masukan File SKCK", "info"));
        }else{
            fd.append('file_skck_current',"Tidak Ada");
        }
        $('#fullname').val() ? fd.append('fullname', $('#fullname').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Nama Lengkap", "info"));
        $('#email').val() ? fd.append('email', $('#email').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Email", "info"));
        $('#phone').val() ? fd.append('phone', $('#phone').val()) : (into = into * 0, Swal.fire("   Info", "Masukan Nomor Telephone", "info"));
        $('#agama').val() ? fd.append('agama', $('#agama').val()) : (into = into * 0, Swal.fire('info', "Masukkan Agama", 'info'))
        $('#status_perkawinan').val() ? fd.append('status_perkawinan', $('#status_perkawinan').val()) : (into = into * 0, Swal.fire('info', "Masukkan Status Perkawinan", 'info'));
        $('#kelamin').val() ? fd.append('jenis_kelamin', $('#kelamin').val()) : (into = into * 0, Swal.fire('info', "Masukkan Jenis Kelamin", 'info'));
        $('#prov_dom').val() ? fd.append('prov_dom', $('#prov_dom').val()) : (into = into * 0, Swal.fire('info', "Masukkan Propinsi", 'info'));
        $('#kab_dom').val() ? fd.append('kab_dom', $('#kab_dom').val()) : (into = into * 0, Swal.fire('info', "Masukkan Kabupaten", 'info'));
        $('#kecamatan_dom').val() ? fd.append('kecamatan_dom', $('#kecamatan_dom').val()) : (into = into * 0, Swal.fire('info', "Masukkan Kecamatan", 'info'));
        $('#kelurahan_dom').val() ? fd.append('kelurahan_dom', $('#kelurahan_dom').val()) : (into = into * 0, Swal.fire('info', "Masukkan Kelurahan/Desa", 'info'));
        $('#tempat_lahir').val() ? fd.append('tempat_lahir', $('#tempat_lahir').val()) : (into = into * 0, Swal.fire('info', "Masukkan Tempat Lahir", 'info'));
        $('#tanggal_lahir').val() ? fd.append('tanggal_lahir', $('#tanggal_lahir').val()) : (into = into * 0, Swal.fire('info', "Masukkan Tempat Lahir", 'info'));
        if (into >= 1) {
            pwd = $('#password').val();
            if (pwd.length >= 1) {
                $('#cof_pwd').val() == 1 ? fd.append('cof_pwd', $('#cof_pwd').val()) : (Swal.fire("   Info", "Masukan Pasword dengan Benar", "info"));
            }
            pwd ? fd.append('password', pwd) : fd.append('password', "-");
            // fd.append('jurusan', $('#jurusan').val());
            // fd.append('nilai', $('#nilai').val());
            // for (var pair of fd.entries()) {
            //     console.log(pair[0] + ', ' + pair[1]);
            // }
            // console.log('object :>> ', "{{url('/')}}" + "/profile/save_biodata");
            $.ajax({
                type: "POST",
                headers: { "X-CSRF-Token": "{{{ csrf_token() }}}" },
                url: "{{url('/')}}" + "/profile/save_biodata",
                data: fd,
                processData: false,
                contentType: false,
                success: function(response) {
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
</script>
<script src="{{asset('vendor/js/select.js')}}"></script>
@endsection