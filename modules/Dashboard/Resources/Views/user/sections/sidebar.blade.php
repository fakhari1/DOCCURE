<div class="sidebar" id="sidebar">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 507px;">
        <div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 507px;">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>پیشخوان بیمار</span>
                    </li>
                    <li class="@if(Route::is('dashboard.user.index')) active @endif">
                        <a href="{{ route('dashboard.user.index') }}">
                            <i class="fa-solid fa-home"></i>
                            <span>خانه</span>
                        </a>
                    </li>
                    <li class="@if(Route::is('user.bookings.index')) active @endif">
                        <a href="{{ route('user.bookings.index') }}" class="">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span>رزرو نوبت</span>
                        </a>
                    </li>
                    <li class="@if(Route::is('user.appointments.index')) active @endif">
                        <a href="{{ route('user.appointments.index') }}" class="">
                            <i class="fa-solid fa-calendar-times"></i>
                            <span>نوبت های رزرو شده</span>
                        </a>
                    </li>
                    {{--                    <li>--}}
                    {{--                        <a href=""><i--}}
                    {{--                                    class="fa-solid fa-chart-line"></i> <span>تراکنش‌ها</span></a>--}}
                    {{--                    </li>--}}
                    <li class="@if(Route::is('users.profile')) active @endif">
                        <a href=""><i class="fa-solid fa-user"></i> <span>پروفایل</span></a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('form_logout').submit()">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span>خروج</span>
                        </a>
                        <form action="{{ route('logout') }}" method="post" id="form_logout">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </div>
        <div class="slimScrollBar"
             style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; left: 1px; height: 299.287px;"></div>
        <div class="slimScrollRail"
             style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div>
    </div>
</div>
