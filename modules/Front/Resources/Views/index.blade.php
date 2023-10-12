@extends('Front::layouts.index')

@section('title','صفحه اصلی')

@section('content')
    <section class="section-search">
        <div class="container">
            <div class="banner-wrapper">
                <div class="banner-header">
                    <p>خوش آمدید</p>
                    <h1 class="sahel_black">دکتر احمد احمدی</h1>
                    <h3 class="bold text-white">متخصص قلب و عروق</h3>
                    <p class="small-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </p>
                    <a href="javascript:void(0)" class="btn-pink">
                        <span>رزرو نوبت</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-treatment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="placeholder-dv">
                        <div class="inner-placeholder">
                            <div class="inner-text">
                                <h2 class="sahel_black">15+ سال</h2>
                                <p>تجربه</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <p> ما از شما و فرزندانتان مراقبت می کنیم </p>
                        <h2 class="sahel_black"> مؤثرترین درمان </h2>
                    </div>
                    <div class="about-content">
                        <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        <div class="row child-care">
                            <div class="col-md-6">
                                <ul class="left">
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="left">
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                    <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-section">
        <div class="container">
            <div class="section-header">
                <p> طیف گسترده ای از خدمات </p>
                <h2 class="sahel_black"> مؤثرترین درمان </h2>
            </div>
            <div class="row service-grid">
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img1.jpg')}}" alt="Post Image">
                            <div class="service-content text-center">
                                <h3 class="service-title mb-0">مادر/کودک</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img2.jpg')}}" alt="Post Image">
                        </div>
                        <div class="service-content text-center">
                            <h3 class="service-title mb-0">واکسناسیون/ایمنی سازی</h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img3.jpg')}}" alt="Post Image">
                        </div>
                        <div class="service-content text-center">
                            <h3 class="service-title mb-0">خدمات تغدیه</h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img4.jpg')}}" alt="Post Image">
                        </div>
                        <div class="service-content text-center">
                            <h3 class="service-title mb-0">توسعه </h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img5.jpg')}}" alt="Post Image">
                        </div>
                        <div class="service-content text-center">
                            <h3 class="service-title mb-0">تست آلرژی</h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-sm-12">

                    <div class="service-blog">
                        <div class="service-image">
                            <img class="img-fluid" src="{{asset('images/index/services/ser-img6.jpg')}}" alt="Post Image">
                        </div>
                        <div class="service-content text-center">
                            <h3 class="service-title mb-0">کاهش وزن</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="why-section">
        <div class="left-section">
            <div class="why-content">
                <div class="section-header">
                    <h2 class="sahel_black">چرا ما را انتخاب کنید</h2>
                </div>
                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                <div class="child-care">
                    <ul class="left">
                        <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                        <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                        <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                        <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                        <li><i class="fas fa-chevron-left"></i>لورم ایپسوم</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-section">
        </div>
    </section>
@endsection
