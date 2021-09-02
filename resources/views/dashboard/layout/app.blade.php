<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Asan Webs Development">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <title>@yield('title') - {{ env('APP_NAME') }} {{ env('APP_SHORT_DESC') }}
    </title>
    <link rel="shortcut icon" href="/favi.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chart.js/dist/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
</head>

<body class="bg-light">
    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
        <form class="input-group input-group-merge input-group-borderless">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="tio-search"></i>
                </div>
            </div>

            <input class="form-control rounded-0" type="search" placeholder="Search in {{ env('APP_NAME') }}"
                aria-label="Search in {{ env('APP_NAME') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                            <i class="tio-clear tio-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Search Form -->
    <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
        <div class="navbar-dark w-100">
            <div class="container">
                <div class="navbar-nav-wrap">
                    <div class="navbar-brand-wrapper">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                            <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo-light.svg') }}"
                                alt="Logo">
                        </a>
                        <!-- End Logo -->
                    </div>

                    <div class="navbar-nav-wrap-content-left">
                        <!-- Search Form -->
                        <div class="d-none d-lg-block">
                            <form class="position-relative">
                                <!-- Input Group -->
                                <div
                                    class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tio-search"></i>
                                        </div>
                                    </div>
                                    <input type="search" class="js-form-search form-control"
                                        placeholder="Search in {{ env('APP_NAME') }}"
                                        aria-label="Search in {{ env('APP_NAME') }}" data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                                    <a class="input-group-append" href="javascript:;">
                                        <span class="input-group-text">
                                            <i id="clearSearchResultsIcon" class="tio-clear"
                                                style="display: none;"></i>
                                        </span>
                                    </a>
                                </div>
                                <!-- End Input Group -->

                                <!-- Card Search Content -->
                                <div id="searchDropdownMenu"
                                    class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                                    <!-- Body -->
                                    <div class="card-body-height py-3">
                                        <small class="dropdown-header mb-n2">Recent searches</small>

                                        <div class="dropdown-item bg-transparent text-wrap my-2">
                                            <span class="h4 mr-1">
                                                <a class="btn btn-xs btn-soft-dark btn-pill" href="../index.html">
                                                    Gulp <i class="tio-search ml-1"></i>
                                                </a>
                                            </span>
                                            <span class="h4">
                                                <a class="btn btn-xs btn-soft-dark btn-pill" href="../index.html">
                                                    Notification panel <i class="tio-search ml-1"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Body -->
                                </div>
                                <!-- End Card Search Content -->
                            </form>
                        </div>
                        <!-- End Search Form -->
                    </div>

                    <!-- Secondary Content -->
                    <div class="navbar-nav-wrap-content-right">
                        <!-- Navbar -->
                        <ul class="navbar-nav align-items-center flex-row">
                            <li class="nav-item d-lg-none">
                                <!-- Search Trigger -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle"
                                        href="javascript:;" data-hs-unfold-options='{
                                        "target": "#searchDropdown",
                                        "type": "css-animation",
                                        "animationIn": "fadeIn",
                                        "hasOverlay": "rgba(46, 52, 81, 0.1)",
                                        "closeBreakpoint": "md"
                                        }'>
                                        <i class="tio-search"></i>
                                    </a>
                                </div>
                                <!-- End Search Trigger -->
                            </li>

                            <li class="nav-item d-none d-sm-inline-block">
                                <!-- Notification -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                        href="javascript:;" data-hs-unfold-options='{
                                        "target": "#notificationDropdown",
                                        "type": "css-animation"
                                        }'>
                                        <i class="tio-notifications-on-outlined"></i>
                                    </a>

                                    <div id="notificationDropdown"
                                        class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu"
                                        style="width: 25rem;">
                                        <!-- Header -->
                                        <div class="card-header">
                                            <span class="card-title h4">Notifications</span>
                                        </div>
                                        <!-- End Header -->
                                        <!-- Body -->
                                        <div class="card-body-height">
                                            <!-- Tab Content -->
                                            <div class="tab-content" id="notificationTabContent">
                                                <div class="tab-pane fade show active" id="notificationNavOne"
                                                    role="tabpanel" aria-labelledby="notificationNavOne-tab">
                                                    <ul class="list-group list-group-flush navbar-card-list-group">
                                                        <li class="list-group-item custom-checkbox-list-wrapper">
                                                            <div class="row">
                                                                <div class="col-auto position-static">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="tio-lg">
                                                                            <i class="tio">filter_list</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col ml-n3">
                                                                    <p class="card-text font-size-sm">There are no new
                                                                        messages.
                                                                        You're all caught up!</p>
                                                                </div>
                                                            </div>
                                                            <a class="stretched-link" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Tab Content -->
                                        </div>
                                        <!-- End Body -->
                                        <!-- Card Footer -->
                                        <a class="card-footer text-center" href="#">
                                            View all notifications
                                            <i class="tio-chevron-right"></i>
                                        </a>
                                        <!-- End Card Footer -->
                                    </div>
                                </div>
                                <!-- End Notification -->
                            </li>

                            <li class="nav-item d-none d-sm-inline-block">
                                <!-- Apps -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle"
                                        href="javascript:;" data-hs-unfold-options='{
                                        "target": "#appsNavbarDropdown",
                                        "type": "css-animation"
                                        }'>
                                        <i class="tio-menu-vs-outlined"></i>
                                    </a>

                                    <div id="appsNavbarDropdown"
                                        class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu"
                                        style="width: 25rem;">
                                        <!-- Header -->
                                        <div class="card-header">
                                            <span class="card-title h4">Web services</span>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Body -->
                                        <div class="card-body card-body-height">
                                            <!-- Nav -->
                                            <div class="nav nav-pills flex-column">
                                                <a class="nav-link" href="{{ route('draftsOrders') }}">
                                                    <div class="media align-items-center">
                                                        <span class="mr-3">
                                                            <img class="avatar avatar-xs"
                                                                src="{{ asset('assets/svg/brands/atlassian.svg') }}"
                                                                alt="Image Description">
                                                        </span>
                                                        <div class="media-body text-truncate">
                                                            <span class="h5 mb-0">Orders</span>
                                                            <span class="d-block font-size-sm text-body">Check all
                                                                Orders in your Account</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Nav -->
                                        </div>
                                        <!-- End Body -->

                                    </div>
                                </div>
                                <!-- End Apps -->
                            </li>

                            <li class="nav-item">
                                <!-- Account -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                                        data-hs-unfold-options='{
                                            "target": "#accountNavbarDropdown",
                                            "type": "css-animation"
                                            }'>
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img"
                                                src="{{ asset('assets/svg/components/placeholder-avatar.svg') }}"
                                                alt="Profile">
                                            <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                        </div>
                                    </a>

                                    <div id="accountNavbarDropdown"
                                        class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                        style="width: 16rem;">
                                        <div class="dropdown-item-text">
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-sm avatar-circle mr-2">
                                                    <img class="avatar-img"
                                                        src="{{ asset('assets/svg/components/placeholder-avatar.svg') }}"
                                                        alt="Image Description">
                                                </div>
                                                <div class="media-body">
                                                    <span
                                                        class="card-title h5">{{ mb_strimwidth(session('user')[0]->fname . ' ' . session('user')[0]->lname, 0, 20, '...') }}</span>
                                                    <span
                                                        class="card-text">{{ mb_strimwidth(session('user')[0]->email, 0, 20, '...') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            <span class="text-truncate pr-2" title="Profile &amp; account">Profile
                                                &amp;
                                                account</span>
                                        </a>

                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            <span class="text-truncate pr-2" title="Settings">Settings</span>
                                        </a>

                                        <a class="dropdown-item" href="{{ route('address.index') }}">
                                            <span class="text-truncate pr-2" title="Settings">Shipping Address</span>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Account -->
                            </li>

                            <li class="nav-item">
                                <!-- Toggle -->
                                <button type="button" class="navbar-toggler btn btn-ghost-light rounded-circle"
                                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu"
                                    data-toggle="collapse" data-target="#navbarNavMenu">
                                    <i class="tio-menu-hamburger"></i>
                                </button>
                                <!-- End Toggle -->
                            </li>
                        </ul>
                        <!-- End Navbar -->
                    </div>
                    <!-- End Secondary Content -->
                </div>
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row justify-content-lg-center pt-lg-5 pt-xl-10">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">@yield('title')</h1>
                    </div>

                    <div class="col-sm-auto">
                        <div class="d-flex">
                            <a href="{{ route('draftsOrders') }}" class="btn btn-primary m-3">Check Drafts Orders</a>
                            <a href="{{ route('draftsOrders') }}" class="btn btn-primary  m-3">Checkout Orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <x-alert />
            <!-- End Page Header -->
            @yield('content')
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0 mt-4">&copy; {{ env('APP_NAME') }}. <span
                            class="d-none d-sm-inline-block">{{ date('Y') }}
                            {{ env('APP_SHORT_DESC') }}.</span></p>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js.extensions/chartjs-extensions.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/datatables.net.extensions/select/select.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/hs.flatpickr.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF FLATPICKR
            // =======================================================
            $('.js-flatpickr').each(function() {
                $.HSCore.components.HSFlatpickr.init($(this));
            });
        });
    </script>
    <script>
        $(document).on('ready', function() {
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });
            var sidebar = $('.js-navbar-vertical-aside').hsSideNav();
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });
            $('.js-form-search').each(function() {
                new HSFormSearch($(this)).init()
            });
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });
            Chart.plugins.unregister(ChartDataLabels);

            var start = moment();
            var end = moment();

            function cb(start, end) {
                $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format(
                    'MMM D') + ' - ' + end.format('MMM D, YYYY'));
            }
        });
    </script>
    @yield('footer')
</body>

</html>
