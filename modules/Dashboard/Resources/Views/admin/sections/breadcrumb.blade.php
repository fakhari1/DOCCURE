<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb text-white">
                        <li>
                            <a href="{{ route('dashboard.admin.index') }}">
                                پیشخوان
                            </a>
                        </li>
                        <li class="mx-1">
                            /
                        </li>
                        <li class="" aria-current="page">
                            پزشک
                        </li>
                        @if(!empty($data))
                            @foreach($data as $key => $val)
                                <li class="mx-1">
                                    /
                                </li>
                                <li aria-current="page">
                                    {{ $val }}
                                </li>
                            @endforeach
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
