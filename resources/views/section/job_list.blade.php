<section class="section-box mt-50">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Lowongan Terbaru</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Temukan Pekerjaan Impian Anda di PG Trangkil! </p>
            <div class="list-tabs mt-40">
                <ul class="nav nav-tabs" role="tablist">
                    @php
                        $b = 0;
                    @endphp
                    @foreach ($fungsi as $item)
                        @php
                            $b++
                        @endphp
                        @if ($b==1)
                        <li><a class="active" id="nav-tab-job-{{$item->id}}" href="#tab-job-{{$item->id}}" data-bs-toggle="tab" role="tab" aria-controls="tab-job-{{$item->id}}" aria-selected="true"><img src="{{$item->icon?$item->icon:asset('vendor/assets/imgs/page/homepage1/retail.svg')}}" alt="jobBox">{{$item->fungsi}}</a></li>
                        @else
                        <li><a id="nav-tab-job-{{$item->id}}" href="#tab-job-{{$item->id}}" data-bs-toggle="tab" role="tab" aria-controls="tab-job-{{$item->id}}" aria-selected="false"><img src="{{$item->icon?$item->icon:asset('vendor/assets/imgs/page/homepage1/marketing.svg')}}" alt="jobBox"> {{$item->fungsi}} </a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
                @php
                //     $search = array(
                //     'nip'=>$value->nip,
                //     'int_tanggal'=>$value_tanggal['tanggal'],
                // );
                // $result_key = array_filter($cek_absen,function ($v) use ($search) { return $v['nip'] == $search['nip'] && $v['int_tanggal'] == $search['int_tanggal']; })
                @endphp
                @php
                    $c = 0;
                @endphp
                @foreach ($fungsi as $item)
                    @php
                        $c++;
                    @endphp
                    <div class="tab-pane fade show {{$c==1?'active':''}}" id="tab-job-{{$item->id}}" role="tabpanel" aria-labelledby="tab-job-{{$item->id}}">
                        <div class="row">
                            @php
                                $search = array(
                                    'fungsi_id'=>$item->id,
                                );
                                $result_key = array_filter($job,function ($v) use ($search) { return $v['fungsi_id'] == $search['fungsi_id']; });
                            @endphp
                            <?php foreach (json_decode(json_encode($result_key)) as $item) : ?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left"><span class="flash"></span>
                                            <div class="image-box"><img src="{{$item->url_icon_ori ? $item->url_icon  : asset('vendor/assets/imgs/brands/brand-1.png') }}" alt="jobBox"></div>
                                            <div class="right-info"><a class="name-job" href="company-details.html"><?=$item->judul ?></a><span class="location-small"><?=$item->lokasi?></span></div>
                                        </div>
                                        <div class="card-block-info">
                                            {{-- <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6> --}}
                                            <div class="mt-5"></div>
                                            <p class="font-sm color-text-paragraph mt-15"><?= $item->deskripsi ?></p>
                                            <div class="mt-30">
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price"></span><span class="text-muted"></span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
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
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<script>
    console.log('object :>> tesssssss');
</script>