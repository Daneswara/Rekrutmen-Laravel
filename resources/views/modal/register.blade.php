<div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body pl-30 pr-30 pt-50">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Job Application </p>
                    <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                    <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer. </p>
                </div>
                <form class="login-register text-start mt-20 pb-30" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="input-1">Username *</label>
                        <input class="form-control" id="input-1" type="text" required="" name="username" placeholder="stevenjob">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="input-1">Nama Lengkap *</label>
                        <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email *</label>
                        <input class="form-control" id="email" type="email" required="" name="email" placeholder="stevenjob@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="number">Contact Number *</label>
                        <input class="form-control" id="number" type="number" required="" name="phone" placeholder="081234567890">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password *</label>
                        <input class="form-control" id="password" type="password" required="" name="password" >
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Confirmation Password *</label>
                        <input class="form-control" id="password_confirmation" type="password" required="" name="password_confirmation" >
                    </div>
                    <!-- <div class="form-group">
                        <label class="form-label" for="des">Description</label>
                        <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="file">Upload Resume</label>
                        <input class="form-control" id="file" name="resume" type="file">
                    </div> -->
                    <div class="login_footer form-group d-flex justify-content-between">
                        <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                        </label><a class="text-muted" href="page-contact.html">Lean more</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default hover-up w-100" type="submit" name="login">Register</button>
                    </div>
                    <!-- <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div> -->
                </form>
            </div>
        </div>
    </div>
</div>