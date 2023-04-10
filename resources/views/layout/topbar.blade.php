<div class="container">
    <div class="main-header">
        <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="index.html"><img alt="jobBox" src="{{asset('vendor/assets/imgs/ptkba/logo_tkka.svg')}}"></a></div>
        </div>
        <div class="header-nav">
            <nav class="nav-main-menu">
                <ul class="main-menu">
                    @include('/layout/list_nav')
                </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        </div>
        <div class="header-right">
            <div class="block-signin"><a class="text-link-bd-btom hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Register</a><a class="btn btn-default btn-shadow ml-40 hover-up" data-bs-toggle="modal" data-bs-target="#ModalLogin">Sign in</a></div>
        </div>
    </div>
</div>