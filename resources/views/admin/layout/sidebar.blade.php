<!-- Page Wrapper -->
@php
use Stichoza\GoogleTranslate\GoogleTranslate;
@endphp
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">{{ GoogleTranslate::trans(config( 'app.name' ,'Azad'), session()->get('lang_code'), 'en'); }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ GoogleTranslate::trans('Dashboard', session()->get('lang_code'), 'en'); }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Interface
    </div> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>{{ GoogleTranslate::trans('Donation', session()->get('lang_code'), 'en'); }}</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                <a class="collapse-item" href="{{ route('admin.add_donation') }}">{{ GoogleTranslate::trans('Add Donation', session()->get('lang_code'), 'en'); }}</a>
                <a class="collapse-item" href="{{ route('admin.donation_list') }}">{{ GoogleTranslate::trans('Manage Donation', session()->get('lang_code'), 'en'); }}</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ GoogleTranslate::trans('Social Event', session()->get('lang_code'), 'en'); }}</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Add cources</h6> -->
                <a class="collapse-item" href="{{ route('admin.add_event') }}">{{ GoogleTranslate::trans('Add Social Event', session()->get('lang_code'), 'en'); }}</a>
                <a class="collapse-item" href="{{ route('admin.event_list') }}">{{ GoogleTranslate::trans('Manage Social Event', session()->get('lang_code'), 'en'); }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ GoogleTranslate::trans('Latest Works', session()->get('lang_code'), 'en'); }}</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Add cources</h6> -->
                <a class="collapse-item" href="{{ route('admin.add_work') }}">{{ GoogleTranslate::trans('Add Latest Works', session()->get('lang_code'), 'en'); }}</a>
                <a class="collapse-item" href="{{ route('admin.work_list') }}">{{ GoogleTranslate::trans('Manage Latest Works', session()->get('lang_code'), 'en'); }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ GoogleTranslate::trans('Gallery', session()->get('lang_code'), 'en'); }}</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Add cources</h6> -->
                <a class="collapse-item" href="{{ route('admin.add_gallery') }}">{{ GoogleTranslate::trans('Add Gallery', session()->get('lang_code'), 'en'); }}</a>
                <a class="collapse-item" href="{{ route('admin.gallery_list') }}">{{ GoogleTranslate::trans('Manage Gallery', session()->get('lang_code'), 'en'); }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree1"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ GoogleTranslate::trans('Request', session()->get('lang_code'), 'en'); }}</span>
        </a>
        <div id="collapsethree1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Add cources</h6> -->
                <a class="collapse-item" href="{{ route('admin.request_list') }}">{{ GoogleTranslate::trans('Manage Request', session()->get('lang_code'), 'en'); }}</a>
            </div>
        </div>
    </li>
    

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Addons
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">