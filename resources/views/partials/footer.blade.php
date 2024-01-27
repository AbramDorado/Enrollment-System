<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <!-- <a href="index.html"> <img src="{{ asset('img/upm_logo.png') }}" alt=""> </a> -->
                    <a href="/home"> <img src="{{ asset('img/cas.png') }}" alt=""> </a>
                    <p>The University of the Philippines Manila College of Arts and Sciences is 
                        one of the nine-degree granting units of the University of the Philippines Manila. 
                        It is the largest college by population of UP Manila.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest courses offered by our different institutions.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> Taft Avenue, Ermita, Manila, Philippines </p>
                        <p><span> Phone :</span> 0995-9153914 (GLOBE) and 0929-3031640 (SMART)</p>
                        <p><span> Email : </span>upm-our@up.edu.ph </p>
                    </div>
                    <hr class="footer-separator">
                    <h6>Admin Page</h6>
                    <p class="admin-link"><a href="{{ route('admin.home') }}">Visit admin page</a></p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>