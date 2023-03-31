<div class="modal fade" id="ModalLogin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body pl-30 pr-30 pt-50">
                <div class="text-center">
                    <p class="font-sm text-brand-2">Job Application </p>
                    <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                    <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer. </p>
                </div>
                <form class="login-register text-start mt-20 pb-30" method="post" action="{{ route('actionlogin') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="input-1">Username *</label>
                        <input class="form-control" id="input-1" type="text" required="" name="username" placeholder="stevenjob">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password *</label>
                        <input class="form-control" id="password" type="password" required="" name="password" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default hover-up w-100" type="submit" name="login">Login</button>
                    </div>
                    <!-- <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div> -->
                </form>
            </div>
        </div>
    </div>
</div>