<!-- Nav -->
<div class="text-center">
    <ul class="nav nav-segment nav-pills mb-7" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ (Illuminate\Support\Facades\Route::currentRouteName() == "dashboard") ? "active" : "" }}" href="{{ route('dashboard') }}">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Illuminate\Support\Facades\Route::currentRouteName() == "devicesWorking") ? "active" : "" }}" href="{{ route('devicesWorking') }}">Working</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Illuminate\Support\Facades\Route::currentRouteName() == "devicesRefurbishing") ? "active" : "" }}" href="{{ route('devicesRefurbishing') }}">Refurbishing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Illuminate\Support\Facades\Route::currentRouteName() == "devicesmotherboard") ? "active" : "" }}" href="{{ route('devicesmotherboard') }}">Refurbishing</a>
        </li>
    </ul>
</div>
<!-- End Nav -->
