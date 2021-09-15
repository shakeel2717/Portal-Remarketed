<!-- Nav -->
<div class="text-center">
    <ul class="nav nav-segment nav-pills mb-7" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ Illuminate\Support\Facades\Route::currentRouteName() == 'draftsOrders' ? 'active' : '' }}"
                href="{{ route('draftsOrders') }}">Drafts <span class="badge badge-primary">{{$draft}}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Illuminate\Support\Facades\Route::currentRouteName() == 'quoteOrders' ? 'active' : '' }}"
                href="{{ route('quoteOrders') }}">Under Review <span class="badge badge-primary">{{$quote}}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Illuminate\Support\Facades\Route::currentRouteName() == 'reservedOrders' ? 'active' : '' }}"
                href="{{ route('reservedOrders') }}">Open Offers <span class="badge badge-primary">{{$reserved}}</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Illuminate\Support\Facades\Route::currentRouteName() == 'invoicedOrders' ? 'active' : '' }}"
                href="{{ route('invoicedOrders') }}">Shipped <span class="badge badge-primary">{{$shipped}}</span></a>
        </li>
    </ul>
</div>
<!-- End Nav -->
