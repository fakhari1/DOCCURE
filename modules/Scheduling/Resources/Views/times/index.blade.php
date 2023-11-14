@extends('Dashboard::admin.layouts.master')

@section('breadcrumb')
    @include('Dashboard::admin.sections.breadcrumb', ['data' => ['زمان بندی ها']])
@endsection

@section('content')

    <h3 class="mb-4">زمان بندی ها</h3>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>ماه</th>
            <th>تاریخ</th>
            <th>تعداد قرار ملاقات</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>آبان</td>
            <td>1402/08</td>
            <td>45</td>
            <td>

                <div class="btn-group dropup">
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        کلیک کنید
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
