@extends('Dashboard::admin.layouts.master')

@section('page-header')
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">درود و خسته نباشید دکتر! خوش آمدی :)</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item active">پیشخوان</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    @include('Dashboard::admin.sections.cards')
    @include('Dashboard::admin.sections.lists')

@endsection
