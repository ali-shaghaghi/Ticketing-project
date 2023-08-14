<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:42:14 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>صفحه مدیریت سایت</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="/admin/images/favicon.ico">
        <!-- DataTables -->
        <link href="/admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="/admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- morris css -->
        <link rel="stylesheet" href="/admin/plugins/morris/morris.css">

        <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/admin/css/style.css" rel="stylesheet" type="text/css">

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">اصلی</li>

                            <li>
                                <a href="administrator" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> داشبورد <span class="badge badge-success badge-pill float-right">3</span></span>
                                </a>
                            </li>

                            <!-- ========== دسته بندی محصولات ========== -->
                            <li class="has_sub">
                                <a href="javascript:void(0)" class="waves-effect">
                                    <i class="mdi mdi-database"></i>
                                    <span> تیکت ها</span>
                                    <span class="menu-arrow float-right">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{Route('tickets.index')}}"> لیست تیکت ها </a>
                                    </li>
                                </ul>
                            </li>



                            {{-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> المنت ها </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-alerts.html">هشدار ها</a></li>
                                    <li><a href="ui-badge.html">نشان ها</a></li>
                                    <li><a href="ui-buttons.html">دکمه ها</a></li>
                                    <li><a href="ui-cards.html">کارت ها</a></li>
                                    <li><a href="ui-dropdowns.html">رها کردن</a></li>
                                    <li><a href="ui-navs.html">منو ها</a></li>
                                    <li><a href="ui-tabs-accordions.html">زبانه ها و آکاردئون ها</a></li>
                                    <li><a href="ui-modals.html">مدال ها</a></li>
                                    <li><a href="ui-images.html">تصاویر</a></li>
                                    <li><a href="ui-progressbars.html">میله پیشرفت</a></li>
                                    <li><a href="ui-pagination.html">صفحه بندی</a></li>
                                    <li><a href="ui-popover-tooltips.html">راهنمایی ها و ابزار ها</a></li>
                                    <li><a href="ui-spinner.html">اسپینر</a></li>
                                    <li><a href="ui-carousel.html">چرخ فلک</a></li>
                                    <li><a href="ui-video.html">ویدیو</a></li>
                                    <li><a href="ui-typography.html">تایپوگرافی</a></li>
                                    <li><a href="ui-grid.html">گرید</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> UI پیشرفته </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="advanced-alertify.html">هشدار</a></li>
                                    <li><a href="advanced-rating.html">رتبه بندی</a></li>
                                    <li><a href="advanced-nestable.html">غیر قابل انعطاف</a></li>
                                    <li><a href="advanced-rangeslider.html">محدوده کشویی</a></li>
                                    <li><a href="advanced-sweet-alert.html">شیرین هشدار</a></li>
                                    <li><a href="advanced-lightbox.html">جعبه نور</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> آیکن ها </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-material.html">طراحی متریال</a></li>
                                    <li><a href="icons-ion.html">یونیکون ها</a></li>
                                    <li><a href="icons-fontawesome.html">فونت عالی</a></li>
                                    <li><a href="icons-themify.html">Themify آیکن ها</a></li>
                                    <li><a href="icons-dripicons.html">قطره چکان</a></li>
                                    <li><a href="icons-typicons.html">آیکون تایپیکون</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> تقویم </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> فرم ها </span> <span class="badge badge-warning badge-pill float-right">8</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">عناصر فرم</a></li>
                                    <li><a href="form-validation.html">اعتبار سنجی فرم</a></li>
                                    <li><a href="form-advanced.html">فرم پیشرفته</a></li>
                                    <li><a href="form-editors.html">ویرایشگران فرم</a></li>
                                    <li><a href="form-uploads.html">آپلود فایل فرم</a></li>
                                    <li><a href="form-mask.html">ماسک فرم</a></li>
                                    <li><a href="form-summernote.html">یادداشت</a></li>
                                    <li><a href="form-xeditable.html">فرم X قابل ویرایش</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> نمودار </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="charts-morris.html">نمودار موریس</a></li>
                                    <li><a href="charts-chartist.html">نمودار چارتیست</a></li>
                                    <li><a href="charts-chartjs.html">نمودار چارت</a></li>
                                    <li><a href="charts-flot.html">نمونه فلوت</a></li>
                                    <li><a href="charts-c3.html">نمودار C3</a></li>
                                    <li><a href="charts-other.html">نمودار تهیه جی کوئری</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> جداول ها </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">جداول پایه</a></li>
                                    <li><a href="tables-datatable.html">جدول داده ها</a></li>
                                    <li><a href="tables-responsive.html">جدول پاسخگو</a></li>
                                    <li><a href="tables-editable.html">میز قابل ویرایش</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">خارجی</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> نقشه ها </span> <span class="badge badge-danger badge-pill float-right">2</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="maps-google.html"> کاربر وردپرس مپ</a></li>
                                    <li><a href="maps-vector.html"> نقشه برداری</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> صفحات </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-blank.html">صفحه خالی</a></li>
                                    <li><a href="pages-login.html">ورود</a></li>
                                    <li><a href="pages-register.html">ثبت نام</a></li>
                                    <li><a href="pages-recoverpw.html">باز یابی رمز عبور</a></li>
                                    <li><a href="pages-lock-screen.html">قفل صفحه</a></li>
                                    <li><a href="pages-404.html">خطای 404</a></li>
                                    <li><a href="pages-500.html">خطای 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-medical"></i><span> صفحات اضافی </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-pricing.html">قیمت ها</a></li>
                                    <li><a href="extras-invoice.html">صورتحساب</a></li>
                                    <li><a href="extras-timeline.html">خط زمان</a></li>
                                    <li><a href="extras-faqs.html">سوالات متداول</a></li>
                                    <li><a href="extras-maintenance.html">نگهداری</a></li>
                                    <li><a href="extras-comingsoon.html">به زودی</a></li>
                                </ul>
                            </li> --}}

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">


                    <!-- Top Bar Start -->
                    <div class="topbar">


                        <nav class="navbar-custom">

                            <!-- Search input -->

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>

                                @guest
                                @if (Route::has('login'))
                                    <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="{{ route('login') }}" role="button" aria-haspopup="false" aria-expanded="false"> ورود </a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                        <a href="{{ route('register') }}" class="nav-link waves-effect">ثبت نام</a>
                                    </li>
                                @endif
                            @else
                                <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                    <a id="navbarDropdown" class="list-inline-item notification-list d-none d-sm-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest



                            </ul>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- Page content Wrapper -->
                    @yield('content')
                    <!-- Page content Wrapper End -->

                </div> <!-- content -->

                <footer class="footer">
                     © 1398 زینزر <span class="d-none d-md-inline-block"> - طراحی با <i class="mdi mdi-heart text-danger"></i> فارسی سازی توسط کاربر وردپرس.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="/admin/js/jquery.min.js"></script>
        <script src="/admin/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/js/modernizr.min.js"></script>
        <script src="/admin/js/detect.js"></script>
        <script src="/admin/js/fastclick.js"></script>
        <script src="/admin/js/jquery.slimscroll.js"></script>
        <script src="/admin/js/jquery.blockUI.js"></script>
        <script src="/admin/js/waves.js"></script>
        <script src="/admin/js/jquery.nicescroll.js"></script>
        <script src="/admin/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Buttons examples -->
        <script src="/admin/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="/admin/plugins/datatables/jszip.min.js"></script>
        <script src="/admin/plugins/datatables/pdfmake.min.js"></script>
        <script src="/admin/plugins/datatables/vfs_fonts.js"></script>
        <script src="/admin/plugins/datatables/buttons.html5.min.js"></script>
        <script src="/admin/plugins/datatables/buttons.print.min.js"></script>
        <script src="/admin/plugins/datatables/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="/admin/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!--Morris Chart-->
        <script src="/admin/plugins/morris/morris.min.js"></script>
        <script src="/admin/plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="/admin/pages/dashboard.int.js"></script>

        <!-- Datatable init js -->
        <script src="/admin/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="/admin/js/app.js"></script>

    </body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:42:42 GMT -->
</html>
