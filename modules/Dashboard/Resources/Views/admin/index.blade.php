@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card dash-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="dash-widget dct-border-rht text-center">
                                <div class="dash-widget-info text-center w-100">
                                    <h6> مراجعان کلی </h6>
                                    <h3>1500</h3>
                                    <p class="text-muted">تا امروز</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="dash-widget dct-border-rht text-center">
                                <div class="dash-widget-info text-center w-100">
                                    <h6> مراجعان امروز </h6>
                                    <h3>160</h3>
                                    <p class="text-muted">06, خرداد 1401</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="dash-widget text-center">
                                <div class="dash-widget-info text-center w-100">
                                    <h6>نوبت ها</h6>
                                    <h3>85</h3>
                                    <p class="text-muted">6 تیر 1401</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
{{--        <div class="col-md-12">--}}
{{--            <h4 class="mb-4">نوبت مراجعان</h4>--}}
{{--            <div class="appointment-tab">--}}

{{--                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="#upcoming-appointments" data-bs-toggle="tab">پیش--}}
{{--                            رو</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#today-appointments" data-bs-toggle="tab">امروز</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <div class="tab-content">--}}

{{--                    <div class="tab-pane show active" id="upcoming-appointments">--}}
{{--                        <div class="card card-table mb-0">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-hover table-center mb-0">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>نام بیمار</th>--}}
{{--                                            <th>تاریخ نوبت</th>--}}
{{--                                            <th>هدف</th>--}}
{{--                                            <th>نوع</th>--}}
{{--                                            <th class="text-center">مقدار پرداختی</th>--}}
{{--                                            <th></th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">لیمور--}}
{{--                                                        پیترز <span>#PT0016</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>11 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">10.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center"> 150 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient1.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">کیسی--}}
{{--                                                        باتلر <span>#PT0001</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>3 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">11.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">200 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient2.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">مانیو--}}
{{--                                                        ارنولد <span>#PT0002</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>1 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">1.00 عصر</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center"> 75 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient3.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">ساکسون--}}
{{--                                                        فور <span>#PT0003</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>30 مهر 1401 <span--}}
{{--                                                    class="d-block text-info">9.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">100 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient4.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">نری--}}
{{--                                                        سایدر<span>#PT0004</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>28 مهر 1401 <span--}}
{{--                                                    class="d-block text-info">6.00 عصر</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center">350 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient5.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">آناستا--}}
{{--                                                        ائنیل <span>#PT0005</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>27 مهر 1401 <span--}}
{{--                                                    class="d-block text-info">8.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">250 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="tab-pane" id="today-appointments">--}}
{{--                        <div class="card card-table mb-0">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-hover table-center mb-0">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>نام بیمار</th>--}}
{{--                                            <th>تاریخ نوبت</th>--}}
{{--                                            <th>هدف</th>--}}
{{--                                            <th>نوع</th>--}}
{{--                                            <th class="text-center">مقدار پرداختی</th>--}}
{{--                                            <th></th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient6.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">پرورشا--}}
{{--                                                        لامیکی <span>#PT0006</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">6.00 عصر</span></td>--}}
{{--                                            <td>تب</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">300 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient7.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">لنین--}}
{{--                                                        اودر <span>#PT0006</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">5.00 عصر</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">100 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient8.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">شانون--}}
{{--                                                        فلو <span>#PT0007</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">3.00 عصر</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center"> 75 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient9.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">فری--}}
{{--                                                        دیمرز <span>#PT0008</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">1.00 عصر</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع قدیمی</td>--}}
{{--                                            <td class="text-center">350 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient10.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">گری--}}
{{--                                                        منگوم <span>#PT0010</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">10.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center">175 تومان</td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>--}}
{{--                                                <h2 class="table-avatar">--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html"--}}
{{--                                                       class="avatar avatar-sm me-2"><img--}}
{{--                                                            class="avatar-img rounded-circle"--}}
{{--                                                            src="dashboard_files/patient11.jpg"--}}
{{--                                                            alt="User Image"></a>--}}
{{--                                                    <a href="https://atiyehahmadi.ir/doccure/pediatric-rtl/patient-profile.html">ساری--}}
{{--                                                        مایوس <span>#PT0011</span></a>--}}
{{--                                                </h2>--}}
{{--                                            </td>--}}
{{--                                            <td>14 خرداد 1401 <span--}}
{{--                                                    class="d-block text-info">11.00 صبح</span></td>--}}
{{--                                            <td>کلی</td>--}}
{{--                                            <td>مراجع جدید</td>--}}
{{--                                            <td class="text-center">--}}

{{--                                            </td>--}}
{{--                                            <td class="text-end">--}}
{{--                                                <div class="table-action">--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-info-light">--}}
{{--                                                        <i class="far fa-eye"></i> مشاهده--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-success-light">--}}
{{--                                                        <i class="fas fa-check"></i> قبول--}}
{{--                                                    </a>--}}
{{--                                                    <a href="javascript:void(0);"--}}
{{--                                                       class="btn btn-sm bg-danger-light">--}}
{{--                                                        <i class="fas fa-times"></i> حذف--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
