@extends('Dashboard::layouts.master')


@section('content')

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/index.html" class="logo">
                    <img src="dashboard_files/logo.png" alt="Logo">
                </a>
                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/index.html" class="logo logo-small">
                    <img src="dashboard_files/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-right"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="جستجو">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="fe fe-bell"></i> <span class="badge rounded-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">‌اطلاعیه ها</span>
                            <a href="javascript:void(0)" class="clear-noti">‌ حذف همه </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="dashboard_files/doctor-thumb-01.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">پزشک. رابی پرین</span> زمانبندی <span class="noti-title">نوبت ها</span></p>
                                                <p class="noti-time"><span class="notification-time">4 دقیقه قبل</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="dashboard_files/patient1.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">مگان برد</span> نوبت گرفته است از <span class="noti-title">پزشک. رابی پرین</span></p>
                                                <p class="noti-time"><span class="notification-time">6 دقیقه قبل</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="dashboard_files/patient2.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">الوین بویکین</span> مبلغ 210 تومان پرداخت کرد <span class="noti-title">نوبت</span></p>
                                                <p class="noti-time"><span class="notification-time">8 دقیقه قبل</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="dashboard_files/patient3.jpg">
</span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">نیکلاس هیج</span> یک پیام ارسال کرد <span class="noti-title">به پزشک خود</span></p>
                                                <p class="noti-time"><span class="notification-time">12 دقیقه قبل</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">مشاهده اطلاعیه ها</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="dashboard_files/avatar-01.jpg" width="31" alt="Donald Niles"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="dashboard_files/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>دانلد نیلز</h6>
                                <p class="text-muted mb-0">ادمین</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پروفایل من</a>
                        <a class="dropdown-item" href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/settings.html">تنظیمات</a>
                        <a class="dropdown-item" href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/login.html">خروج</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 507px;"><div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 507px;">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>اصلی</span>
                            </li>
                            <li class="active">
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/index.html"><i class="fe fe-home"></i> <span>داشبرد</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/appointment-list.html"><i class="fe fe-layout"></i> <span>نوبت‌دهی</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/specialities.html"><i class="fe fe-users"></i> <span>تخصص</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/doctor-list.html"><i class="fe fe-user-plus"></i> <span>پزشکان</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/patient-list.html"><i class="fe fe-user"></i> <span>مراجعه‌کنندگان</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/reviews.html"><i class="fe fe-star-o"></i> <span>نظرات</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/transactions-list.html"><i class="fe fe-activity"></i> <span>تراکنش‌ها</span></a>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/settings.html"><i class="fe fe-vector"></i> <span>تنظیمات</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fe fe-document"></i> <span>گزارشات</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/invoice-report.html">گزارشات فاکتور</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>صفحات</span>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html"><i class="fe fe-user-plus"></i> <span>پروفایل</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fe fe-document"></i> <span>احراز هویت</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/login.html"> ورود </a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/register.html"> ثبت‌نام</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/forgot-password.html"> فراموشی رمز عبور </a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/lock-screen.html"> قفل صفحه </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fe fe-warning"></i> <span> صفحات خطا </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/error-404.html">404 خطا </a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/error-500.html">500 خطا </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/blank-page.html"><i class="fe fe-file"></i> <span>صفحه خالی</span></a>
                            </li>
                            <li class="menu-title">
                                <span>رابط کاربری</span>
                            </li>
                            <li>
                                <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/components.html"><i class="fe fe-vector"></i> <span>‌کامپوننت‌ها</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fe fe-layout"></i> <span>فرم‌ها</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-basic-inputs.html">ورودی پایه</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-input-groups.html">ورودی گروهی</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-horizontal.html">فرم افقی</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-vertical.html">فرم عمودی</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-mask.html"> ماسک فرم </a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/form-validation.html">اعتبارسنجی فرم </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fe fe-table"></i> <span>جدول ها</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/tables-basic.html">جدول پایه</a></li>
                                    <li><a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/data-tables.html">جدول داده</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>چند لایه</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span>لایه 1</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);"><span>لایه 2</span></a></li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);"> <span> لایه 2</span> <span class="menu-arrow"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:void(0);">لایه 3</a></li>
                                                    <li><a href="javascript:void(0);">لایه 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void(0);"> <span>لایه 2</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> <span>لایه 1</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px; height: 299.287px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div></div>
        </div>


        <div class="page-wrapper" style="min-height: 567px;">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">ادمین ، خوش آمدی.</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">داشبرد</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
<span class="dash-widget-icon text-primary border-primary">
<i class="fe fe-users"></i>
</span>
                                    <div class="dash-count">
                                        <h3>168</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">پزشکان</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
<span class="dash-widget-icon text-success">
<i class="fe fe-credit-card"></i>
</span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">مراجعه‌کنندگان</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
<span class="dash-widget-icon text-danger border-danger">
<i class="fe fe-money"></i>
</span>
                                    <div class="dash-count">
                                        <h3>485</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">نوبت</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
<span class="dash-widget-icon text-warning border-warning">
<i class="fe fe-folder"></i>
</span>
                                    <div class="dash-count">
                                        <h3> 62523 تومان</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted"> درآمد </h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title"> درآمد </h4>
                            </div>
                            <div class="card-body">
                                <div id="morrisArea" style="position: relative;"><svg height="342" version="1.1" width="452" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.466675px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="305.6666669845581" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.666687488555908">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,305.6666669845581H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="235.50000023841858" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666619777679443">75</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,235.50000023841858H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="165.33333349227905" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666669845581055">150</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,165.33333349227905H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="95.16666674613953" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666719913482666">225</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,95.16666674613953H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="25" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666674613952637">300</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,25H427" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="427" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1399</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="363.02921040620726" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1398</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="299.05842081241445" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1397</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="234.91236878137838" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1396</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="170.9415791875856" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1395</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="106.9707895937928" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1394</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="43" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1393</tspan></text><path style="fill-opacity: 0.5;" fill="#ec7d9a" stroke="none" d="M43,249.5333335876465C58.9926973984482,240.17777802149456,90.9780921953446,233.1611113468806,106.9707895937928,212.11111132303873C122.963486992241,191.06111129919685,154.9488817891374,83.4722222884496,170.9415791875856,81.13333339691161C186.9342765860338,78.79444450537363,218.91967138293018,174.7144856536872,234.91236878137838,193.40000019073486C250.9488817891374,212.13670791829497,283.0219078046554,228.48013398939761,299.05842081241445,230.82222245534263C315.0511182108627,233.15791177247357,347.036513007759,237.83888912995656,363.02921040620726,212.11111132303873C379.0219078046554,186.3833335161209,411.0073026015518,71.77777783075967,427,25L427,305.6666669845581L43,305.6666669845581Z" fill-opacity="0.5"></path><path style="" fill="none" stroke="#fe235b" d="M43,249.5333335876465C58.9926973984482,240.17777802149456,90.9780921953446,233.1611113468806,106.9707895937928,212.11111132303873C122.963486992241,191.06111129919685,154.9488817891374,83.4722222884496,170.9415791875856,81.13333339691161C186.9342765860338,78.79444450537363,218.91967138293018,174.7144856536872,234.91236878137838,193.40000019073486C250.9488817891374,212.13670791829497,283.0219078046554,228.48013398939761,299.05842081241445,230.82222245534263C315.0511182108627,233.15791177247357,347.036513007759,237.83888912995656,363.02921040620726,212.11111132303873C379.0219078046554,186.3833335161209,411.0073026015518,71.77777783075967,427,25" stroke-width="2"></path><circle cx="43" cy="249.5333335876465" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="106.9707895937928" cy="212.11111132303873" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="170.9415791875856" cy="81.13333339691161" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="234.91236878137838" cy="193.40000019073486" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="299.05842081241445" cy="230.82222245534263" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="363.02921040620726" cy="212.11111132303873" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="427" cy="25" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">وضعیت</h4>
                            </div>
                            <div class="card-body">
                                <div id="morrisLine" style="position: relative;"><svg height="342" version="1.1" width="452" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.666668px; top: -0.466675px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="305.6666669845581" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.666687488555908">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,305.6666669845581H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="235.50000023841858" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666619777679443">50</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,235.50000023841858H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="165.33333349227905" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666669845581055">100</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,165.33333349227905H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="95.16666674613953" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666719913482666">150</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,95.16666674613953H427" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="30.5" y="25" text-anchor="end" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="3.6666674613952637">200</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M43,25H427" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="427" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1399</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="331.0657084188912" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1398</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="235.13141683778235" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1397</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="138.93429158110882" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1396</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 10px; font-weight: normal;" x="43" y="318.1666669845581" text-anchor="middle" font-family="sans-serif" font-size="10px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,5.6667)"><tspan dy="3.666687488555908">1395</tspan></text><path style="" fill="none" stroke="#122852" d="M43,263.5666669368744C66.9835728952772,253.04166692495346,114.95071868583162,237.23256977982462,138.93429158110882,221.46666688919066C162.9835728952772,205.65756974406182,211.08213552361397,140.77979949274078,235.13141683778235,137.26666679382325C259.1149897330596,133.76313281812682,307.08213552361394,198.66250019669533,331.0657084188912,193.40000019073486C355.0492813141684,188.13750018477438,403.01642710472277,119.72500010728835,427,95.16666674613953" stroke-width="1"></path><path style="" fill="none" stroke="#fe235b" d="M43,165.33333349227905C66.9835728952772,193.40000019073486,114.95071868583162,275.84823329825406,138.93429158110882,277.6000002861023C162.9835728952772,279.356566635561,211.08213552361397,184.63636588988325,235.13141683778235,179.36666684150697C259.1149897330596,174.11136587796233,307.08213552361394,240.76250024437905,331.0657084188912,235.50000023841858C355.0492813141684,230.2375002324581,403.01642710472277,161.8250001549721,427,137.26666679382325" stroke-width="1"></path><circle cx="43" cy="263.5666669368744" r="4" fill="#122852" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="138.93429158110882" cy="221.46666688919066" r="4" fill="#122852" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="235.13141683778235" cy="137.26666679382325" r="4" fill="#122852" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="331.0657084188912" cy="193.40000019073486" r="4" fill="#122852" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="427" cy="95.16666674613953" r="4" fill="#122852" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="43" cy="165.33333349227905" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="138.93429158110882" cy="277.6000002861023" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="235.13141683778235" cy="179.36666684150697" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="331.0657084188912" cy="235.50000023841858" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="427" cy="137.26666679382325" r="4" fill="#fe235b" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">لیست پزشکان</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>نام دکتر</th>
                                            <th>تخصص</th>
                                            <th>درآمد</th>
                                            <th>نظرات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-01.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. رابی پرین</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td> 320000 تومان </td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-02.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. فرد اورتگو</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>31000 تومان</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-03.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. دبورا انجل</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>40000 تومان</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-04.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. سوفیا برینت</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td> 320000 تومان </td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-05.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. ماروین کامگل</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>35000 تومان</td>
                                            <td>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star text-warning"></i>
                                                <i class="fe fe-star-o text-secondary"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex">

                        <div class="card  card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">لیست بیماران</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>نام بیمار</th>
                                            <th>شماره</th>
                                            <th>آخرین ویزیت</th>
                                            <th>پرداخت شده</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient1.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">مگان برد</a>
                                                </h2>
                                            </td>
                                            <td>8286329170</td>
                                            <td>20 مهر 1401</td>
                                            <td class="text-end">10000 تومان </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient2.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">آلوین بوکسن </a>
                                                </h2>
                                            </td>
                                            <td>2077299974</td>
                                            <td>22 مهر 1401</td>
                                            <td class="text-end">200 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient3.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">نیکلاس هیج</a>
                                                </h2>
                                            </td>
                                            <td>2607247769</td>
                                            <td>21 مهر 1401</td>
                                            <td class="text-end">250 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient4.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">شری مک کورتنی</a>
                                                </h2>
                                            </td>
                                            <td>5043686874</td>
                                            <td>21 آبان 1401</td>
                                            <td class="text-end">150 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient5.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">راجر لوید</a>
                                                </h2>
                                            </td>
                                            <td>9548207887</td>
                                            <td>18 آبان 1401</td>
                                            <td class="text-end"> 350000 تومان </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">لیست رزروها</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>نام دکتر</th>
                                            <th>تخصص</th>
                                            <th>نام بیمار</th>
                                            <th>زمان نوبت</th>
                                            <th>وضعیت</th>
                                            <th class="text-end">مقدار </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-01.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. رابی پرین</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient1.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">مگان برد</a>
                                                </h2>
                                            </td>
                                            <td>9 خرداد 1401 <span class="text-primary d-block">11.00 صبح - 11.15 صبح</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_1" class="check" checked="checked">
                                                    <label for="status_1" class="checktoggle">چک‌باکس</label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                200 تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-02.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. فرد اورتگو</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient2.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">آلوین بوکسن </a>
                                                </h2>
                                            </td>
                                            <td>5 خرداد 1401 <span class="text-primary d-block">11.00 صبح - 11.35 صبح</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_2" class="check" checked="checked">
                                                    <label for="status_2" class="checktoggle">چک‌باکس</label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                300 تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-03.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. دبورا انجل</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient3.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">نیکلاس هیج</a>
                                                </h2>
                                            </td>
                                            <td>11 خرداد 1401 <span class="text-primary d-block">12.00 عصر - 12.15 عصر</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_3" class="check" checked="checked">
                                                    <label for="status_3" class="checktoggle">چک‌باکس</label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                150 تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-04.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. سوفیا برینت</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient4.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">شری مک کورتنی</a>
                                                </h2>
                                            </td>
                                            <td>7 خرداد 1401<span class="text-primary d-block">1.00 عصر - 1.20 عصر</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_4" class="check" checked="checked">
                                                    <label for="status_4" class="checktoggle">چک‌باکس</label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                150 تومان
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/doctor-thumb-05.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">پزشک. ماروین کامگل</a>
                                                </h2>
                                            </td>
                                            <td>متخصص قلب</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="dashboard_files/patient5.jpg" alt="User Image"></a>
                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/admin/profile.html">راجر لوید</a>
                                                </h2>
                                            </td>
                                            <td>15 خرداد 1401 <span class="text-primary d-block">1.00 عصر - 1.15 عصر</span></td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="status_5" class="check" checked="checked">
                                                    <label for="status_5" class="checktoggle">چک‌باکس</label>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                200 تومان
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
