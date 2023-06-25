<div class="container">
    <div class="main-header">
        <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="index.html"><img alt="jobBox" src="{{ asset('vendor/admin/assets/imgs/template/jobhub-logo.svg')}}"></a></div>
        </div>
        <div class="header-search"> 
            <div class="box-search"> 
              <form action="">
                <input class="form-control input-search" type="text" name="keyword" placeholder="Search">
              </form>
            </div>
          </div>
          <div class="header-menu d-none d-md-block">
            <ul> 
              <li>        <a href="http://wp.alithemes.com/html/jobbox/demos/index.html">Home </a></li>
              <li> <a href="http://wp.alithemes.com/html/jobbox/demos/page-about.html">About us </a></li>
              <li> <a href="http://wp.alithemes.com/html/jobbox/demos/page-contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header-right">
            <div class="block-signin"><a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a>
              <div class="dropdown d-inline-block"><a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownNotify">
                  <li><a class="dropdown-item active" href="#">10 notifications</a></li>
                  <li><a class="dropdown-item" href="#">12 messages</a></li>
                  <li><a class="dropdown-item" href="#">20 replies</a></li>
                </ul>
              </div>
              <div class="member-login"><img alt="" src="{{ asset('vendor/admin/assets/imgs/page/dashboard/profile.png')}}">
                <div class="info-member"> <strong class="color-brand-1">Steven Jobs</strong>
                  <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">Super Admin</a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                      <li><a class="dropdown-item" href="profile.html">Profiles</a></li>
                      <li><a class="dropdown-item" href="my-resume.html">CV Manager</a></li>
                      <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>