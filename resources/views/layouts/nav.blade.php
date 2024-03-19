<!-- Topbar Start -->
<header class="app-header">
    <div class="flex items-center px-6 gap-3">
        <!-- Brand Logo -->
        <a href="index.html" class="logo-box">
            <!-- Light Brand Logo -->
            <div class="logo-light">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="logo-lg" alt="Light logo">
                <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="Small logo">
            </div>

            <!-- Dark Brand Logo -->
            <div class="logo-dark">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="logo-lg" alt="Dark logo">
                <img src="{{ asset('assets/images/logo-sm.png') }}" class="logo-sm" alt="Small logo">
            </div>
        </a>

        <!-- Sidenav Menu Toggle Button -->
        <button id="button-toggle-menu" class="nav-link p-2">
            <span class="sr-only">Menu Toggle Button</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i data-lucide="menu" class="w-6 h-6 text-xl"></i>
            </span>
        </button>

        <!-- Page Title -->
        <div class="me-auto">
            <div class="md:flex hidden">
                <h4 class="page-title text-lg">Dashboard</h4>
            </div>
        </div>

        <div class="md:flex hidden items-center relative">
            <div class="absolute inset-y-0 end-0 flex items-center pe-3 pointer-events-none">
                <i class="mdi mdi-magnify text-base opacity-60 -z-10"></i>
            </div>
            <input type="search"
                class="form-input pe-8 ps-4 rounded-full bg-gray-500/10 border-transparent focus:border-transparent placeholder:opacity-60"
                placeholder="Search...">
        </div>

        <!-- Light/Dark Toggle Button -->
        <div class="flex">
            <button id="light-dark-mode" type="button" class="nav-link p-2">
                <span class="sr-only">Light/Dark Mode</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i data-lucide="moon" class="block dark:hidden"></i>
                    <i data-lucide="sun" class="hidden dark:block"></i>
                </span>
            </button>
        </div>

        <!-- Notification Bell Button -->
        <div class="relative md:flex hidden">
            <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
                <span class="sr-only">View notifications</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i data-lucide="bell"></i>
                    <span
                        class="absolute top-3 end-1.5 w-4 h-4 flex items-center justify-center rounded-full bg-danger text-white  font-medium text-[10px]">9</span>
                </span>
            </button>
            <div
                class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

                <div class="p-4">
                    <div class="flex items-center justify-between">
                        <h6 class="text-sm"> Notification</h6>
                        <a href="javascript: void(0);" class="text-gray-500">
                            <small>Clear All</small>
                        </a>
                    </div>
                </div>

                <div class="p-4 h-80" data-simplebar>
                    <h5 class="text-xs text-gray-500 dark:text-gray-300 mb-2">Today</h5>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                        <i class="mdi mdi-comment-account-outline text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Datacorp <small
                                            class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented
                                        on Admin</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                        <i class="mdi mdi-heart text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Admin <small
                                            class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                    <small class="noti-item-subtitle text-muted">New user
                                        registered</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                        class="rounded-full h-9 w-9" alt="">
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Cristina Pride <small
                                            class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What
                                        about our next meeting</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                    <a href="javascript:void(0);" class="block mb-4">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <div
                                        class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                        <i class="mdi mdi-account-plus text-lg"></i>
                                    </div>
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented
                                        on Admin</small>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="javascript:void(0);" class="block">
                        <div class="card-body">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                        class="rounded-full h-9 w-9" alt="">
                                </div>
                                <div class="flex-grow truncate ms-2">
                                    <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks
                                        good and awesome design</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <a href="javascript:void(0);"
                    class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                    View All
                </a>
            </div>
        </div>

        <!-- Profile Dropdown Button -->
        <div class="relative">
            <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button"
                class="nav-link flex items-center">
                <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image"
                    class="rounded-full h-8 w-8">
                <span class="text-sm mx-2">Nowak</span>
                <i class="mdi mdi-chevron-down"></i>
            </button>
            <div
                class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 bg-white shadow-lg border rounded py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                <h6 class="py-2 px-5">Welcome !</h6>

                <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="pages-gallery.html">
                    <i data-lucide="user" class="w-4 h-4 me-2"></i>
                    <span>My Account</span>
                </a>
                <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="apps-kanban.html">
                    <i data-lucide="settings" class="w-4 h-4 me-2"></i>
                    <span>Settings</span>
                </a>
                <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="auth-login.html">
                    <i data-lucide="lock" class="w-4 h-4 me-2"></i>
                    <span>Lock Screen</span>
                </a>
                <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
                <a class="flex items-center py-2 px-5 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="{{ route('admin.logout') }}">
                    <i data-lucide="log-out" class="w-4 h-4 me-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>

        <!-- Customization Button -->
        <div class="flex">
            <button type="button" class="nav-link p-2" data-fc-type="offcanvas"
                data-fc-target="theme-customization" data-fc-scroll="true">
                <span class="sr-only">Customization Button</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i data-lucide="settings"></i>
                </span>
            </button>
        </div>
    </div>
</header>
<!-- Topbar End -->
<!-- Theme Settings -->
<div>
    <!-- Theme Settings Offcanvas -->
    <div id="theme-customization"
        class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0
         transition-all duration-300 transform max-w-[260px] w-full z-50 bg-white dark:bg-gray-800"
        tabindex="-1">
        <div class="h-16 bg-primary text-white flex items-center px-6 gap-3">
            <h5 class="text-base grow">Theme Customizer</h5>
            <button type="button" class="h-6 w-6 flex items-center justify-center rounded-full bg-dark text-white"
                data-fc-dismiss><i class="mdi mdi-close text-sm"></i></button>
        </div>

        <div class="h-[calc(100vh-64px)]" data-simplebar>
            <div class="p-6">
                <div class="py-3 px-5 border border-warning/25 bg-warning/20 text-warning rounded mb-6"
                    role="alert">
                    <span class="font-medium">Customize </span> the overall color scheme, Layout, etc.
                </div>

                <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-3">Color Scheme</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode"
                                id="layout-color-light" value="light">
                            <label class="ms-2" for="layout-color-light">Light</label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox" name="data-mode"
                                id="layout-color-dark" value="dark">
                            <label class="ms-2" for="layout-color-dark"> Dark </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-3">Direction</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                                id="direction-ltr" value="ltr">
                            <label class="ms-2" for="direction-ltr"> LTR </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox" name="dir"
                                id="direction-rtl" value="rtl">
                            <label class="ms-2" for="direction-rtl"> RTL </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-3">Layout Position (Menu and Topbar)</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="ms-2" for="layout-position-fixed"> Fixed </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="ms-2" for="layout-position-scrollable"> Scrollable </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4 2xl:block hidden">
                    <h5 class="font-semibold text-sm mb-3">Width</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-layout-width" id="layout-mode-default" value="default">
                            <label class="ms-2" for="layout-mode-default"> Fluid </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-layout-width" id="layout-mode-boxed" value="boxed">
                            <label class="ms-2" for="layout-mode-boxed"> Boxed </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4" id="leftSidebarSize">
                    <h5 class="font-semibold text-sm mb-3">Left Sidebar Size</h5>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-sidenav-view" id="sidenav-view-default" value="default">
                            <label class="ms-2" for="sidenav-view-default"> Default </label>
                        </div>


                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-sidenav-view" id="sidenav-view-condensed" value="condensed">
                            <label class="ms-2" for="sidenav-view-condensed"> Condensed (Small) </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-sidenav-view" id="sidenav-view-compact" value="compact">
                            <label class="ms-2" for="sidenav-view-compact"> Compact </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                            <label class="ms-2" for="sidenav-view-mobile"> Mobile </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                            <label class="ms-2" for="sidenav-view-hidden">Hidden </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-menu-color" id="menu-color-light" value="light">
                            <label class="ms-2" for="menu-color-light"> Light </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-menu-color" id="menu-color-dark" value="dark">
                            <label class="ms-2" for="menu-color-dark"> Dark </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-menu-color" id="menu-color-brand" value="brand">
                            <label class="ms-2" for="menu-color-brand"> Brand </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-menu-color" id="menu-color-gradient" value="gradient">
                            <label class="ms-2" for="menu-color-gradient"> Gradient </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="ms-2" for="topbar-color-light"> Light </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm text-primary" type="checkbox"
                                name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="ms-2" for="topbar-color-dark"> Dark </label>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="btn bg-primary text-white w-full" id="reset-layout">Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>
