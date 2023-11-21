<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <div class="theiaStickySidebar" style="padding-bottom: 1px; padding-top: 0px; position: relative; transform: none;">
        <div class="profile-sidebar">
            <div class="widget-profile pro-widget-content">
                <div class="profile-info-widget">
                    <a href="#" class="booking-doc-img">
                        <img src="{{ asset('assets/images/doctor/doctor-thumb.jpg') }}" alt="User Image">
                    </a>
                    <div class="profile-det-info">
                        <h3> {{ $settings->doctor_name }}</h3>
                        <div class="patient-details">
                            <h5 class="mb-0"> {{ $settings->specialization }} </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-widget">
                <nav class="dashboard-menu">
                    <ul>
                        <li class="{{ Illuminate\Support\Facades\Route::is('dashboard.admin.index') ? 'active' : '' }}">
                            <a href="{{ route('dashboard.admin.index') }}">
                                <i class="fas fa-columns"></i>
                                <span>پیشخوان</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/appointments.html">--}}
{{--                                <i class="fas fa-calendar-check"></i>--}}
{{--                                <span>نوبت ‌دهی</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/my-patients.html">--}}
{{--                                <i class="fas fa-user-injured"></i>--}}
{{--                                <span>مراجعه‌کنندگان من</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="{{ $Route::is('admin.open-dates.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.open-dates.index') }}">
                                <i class="fas fa-hourglass-start"></i>
                                <span>زمان بندی ها</span>
                            </a>
                        </li>
                        <li class="{{ $Route::is('admin.open-dates.times.appointments.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.open-dates.times.appointments.index') }}">
                                <i class="fa-solid fa-calendar"></i>
                                <span>نوبت ها</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/invoices.html">--}}
{{--                                <i class="fas fa-file-invoice"></i>--}}
{{--                                <span>صورت‌حساب</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/reviews.html">--}}
{{--                                <i class="fas fa-star"></i>--}}
{{--                                <span>نظرات</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/chat-doctor.html">--}}
{{--                                <i class="fas fa-comments"></i>--}}
{{--                                <span>پیام‌ها</span>--}}
{{--                                <small class="unread-msg">23</small>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="">
                                <i class="fas fa-user-cog"></i>
                                <span>تنظیمات پروفایل</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.settings.general.index') }}">
                                <i class="fas fa-cog"></i>
                                <span>تنظیمات سایت</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/social-media.html">--}}
{{--                                <i class="fas fa-share-alt"></i>--}}
{{--                                <span>شبکه‌های اجتماعی</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/doctor-change-password.html">--}}
{{--                                <i class="fas fa-lock"></i>--}}
{{--                                <span>‌تغییر رمز عبور</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/index-2.html">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>خروج</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="resize-sensor"
             style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
            <div class="resize-sensor-expand"
                 style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div
                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 293px; height: 831px;"></div>
            </div>
            <div class="resize-sensor-shrink"
                 style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div
                    style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
            </div>
        </div>
    </div>
</div>
