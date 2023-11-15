@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها']])
@endsection

@section('content')

    <h3 class="mb-4">زمان بندی ها</h3>

    <div class="row justify-content-start mb-4">
        <div>
            <a href="{{ route('admin.open-dates.create') }}" class="btn btn-sm btn-success">
                <i class="fa-solid fa-plus"></i>
                جدید</a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>تاریخ</th>
            <th> قرار ملاقات</th>
            <th>قرار ملاقات خالی</th>
            <th>مدت قرار های ملاقات</th>
            <th>ساعت کاری صبح</th>
            <th>ساعت کاری عصر</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center">1</td>
            <td class="text-center">1402/08</td>
            <td class="text-center">45</td>
            <td class="text-center">15</td>
            <td class="text-center">30 دقیقه</td>
            <td class="text-center dir-ltr">08:00 - 13:00</td>
            <td class="text-center dir-ltr">16:00 - 21:00</td>
            <td class="text-center">
                <div class="badge bg-success">
                    فعال
                </div>
            </td>
            <td>

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        انتخاب...
                    </button>
                    <ul class="dropdown-menu m-0 p-0">
                        <li class="dir-rtl text-right px-1 border-bottom">
                            <a href="" class="text-primary py-2 d-block">
                                <i class="fa-solid fa-eye">
                                </i>
                                قرار های ملاقات
                            </a>
                        </li>
                        <li class="dir-rtl text-right px-1 border-bottom">
                            <a href="" class="text-warning py-2 d-block">
                                <i class="fa-solid fa-pen"></i>
                                ویرایش
                            </a>
                        </li>
                        <li class="dir-rtl text-right px-1 border-bottom">
                            <a href="" class="text-danger py-2 d-block">
                                <i class="fa-solid fa-trash"></i>
                                حذف
                            </a>
                        </li>
                    </ul>
                </div>


            </td>
        </tr>
        </tbody>
    </table>

@endsection
