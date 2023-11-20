<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fa-solid fa-users"></i>
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
<i class="fa-solid fa-credit-card"></i>
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
<i class="fa-solid fa-money-bill"></i>
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
<i class="fa-solid fa-folder"></i>
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
    @include('Dashboard::user.sections.__income')
    @include('Dashboard::user.sections.__status')
</div>
