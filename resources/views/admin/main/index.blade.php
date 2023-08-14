@extends('admin.layout.master')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">داشبورد</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> تنظیمات
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">عملیات</a>
                                        <a class="dropdown-item" href="#">اقدام دیگر</a>
                                        <a class="dropdown-item" href="#">چیز های دیگر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">پیوند جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">سفارشات</h6>
                            <h4 class="mb-3 mt-0 float-right">1,587</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">از دوره قبلی</span>
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">آخر : 1447</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">درآمد</h6>
                            <h4 class="mb-3 mt-0 float-right">46,785 تومان</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">از دوره قبلی</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                        </div>
                        <p class="font-14 m-0">آخر : 46,785 تومان</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">قیمت میانگین</h6>
                            <h4 class="mb-3 mt-0 float-right">15.9</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">از دوره قبلی</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">آخر : 15.8</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">محصولات فروخته شده</h6>
                            <h4 class="mb-3 mt-0 float-right">1890</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">از دوره قبلی</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">آخر : 1776</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">گزارش فروش ها</h4>
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="morris-line-example" class="morris-chart" style="height: 300px"></div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <h5 class="font-14 mb-5">گزارش فروش سالانه</h5>

                                    <div>
                                        <h5 class="mb-3">2018 : 19523 تومان</h5>
                                        <p class="text-muted mb-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                        <a href="#" class="btn btn-primary btn-sm">ادامه مطلب <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">تجزیه و تحلیل فروش</h4>
                        <div id="morris-donut-example" class="morris-chart" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">آخرین پیام ها</h4>
                        <div class="latest-massage">
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-primary text-center rounded-circle text-white mt-0">v</h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">هم اکنون</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">کاربر وردپرس</h5>
                                        <p class="text-muted">سلام، من اومدم به پنل مدیریت...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-success text-center rounded-circle text-white mt-0">p</h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">2 دقیقه. پیش</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">مجتبی خان</h5>
                                        <p class="text-muted">دوستان، من پروژه ها رو حل کردم!</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <img src="admin/images/users/avatar-3.jpg" alt="" class="rounded-circle mb-3">
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">6 دقیقه. پیش</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">رضا</h5>
                                        <p class="text-muted">یک قالب بسیار حرفه ای و زیبا!</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-pink text-center rounded-circle text-white mt-0">b</h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">01:34 بعد ظهر</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">کاربر وردپرس</h5>
                                        <p class="text-muted">یک قالب مدیریتی چند منظوره ریسپانسیو</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <img src="admin/images/users/avatar-4.jpg" alt="" class="rounded-circle mb-3">
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">02:05 بعد از ظهر</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">فرشید خان</h5>
                                        <p class="text-muted">این یک دیدگاه تستی است...</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">فعالیت اخیر</h4>
                        <ol class="activity-feed mb-0">
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date text-white-50">خرداد 10</span>
                                    <span class="activity-text text-white">پاسخ به نیاز "فعالیت های داوطلبانه"</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date text-white-50">خرداد 09</span>
                                    <span class="activity-text text-white">اضافه شده علاقه "فعالیت های داوطلبانه"</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date text-white-50">خرداد 08</span>
                                    <span class="activity-text text-white">در گروه انجمن "تخته سیاه" شرکت کرد</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date text-white-50">خرداد 07</span>
                                    <span class="activity-text text-white">پاسخ به نیاز "فرصت در نوع"</span>
                                </div>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">منبع اجتماعی</h4>
                        <div class="text-center">
                            <div class="social-source-icon lg-icon mb-3">
                                <i class="mdi mdi-facebook h2 bg-primary text-white"></i>
                            </div>
                            <h5 class="font-16"><a href="#" class="text-dark">فیسبوک - <span class="text-muted">125 فروش</span> </a></h5>
                            <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</p>
                            <a href="#" class="text-primary font-14">مطالعه بیشتر <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div class="social-source text-center mt-3">
                                    <div class="social-source-icon mb-2">
                                        <i class="mdi mdi-facebook h5 bg-primary text-white"></i>
                                    </div>
                                    <p class="font-14 text-muted mb-2">125 فروش</p>
                                    <h6>فیسبوک</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social-source text-center mt-3">
                                    <div class="social-source-icon mb-2">
                                        <i class="mdi mdi-twitter h5 bg-info text-white"></i>
                                    </div>
                                    <p class="font-14 text-muted mb-2">112 فروش</p>
                                    <h6>توییتر</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social-source text-center mt-3">
                                    <div class="social-source-icon mb-2">
                                        <i class="mdi mdi-instagram h5 bg-pink text-white"></i>
                                    </div>
                                    <p class="font-14 text-muted mb-2">104 فروش</p>
                                    <h6>اینستاگرام</h6>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">آخرین معامله</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">آی دی.</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">تارخ</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">تعداد</th>
                                        <th scope="col">وضعیت</th>
                                        <th scope="col">میزان</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#14567</th>
                                        <td>کاربر وردپرس</td>
                                        <td>14 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14568</th>
                                        <td>نبی عبدی</td>
                                        <td>15 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14569</th>
                                        <td>نبی عبدی</td>
                                        <td>16 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14570</th>
                                        <td>نبی عبدی</td>
                                        <td>17 خرداد</td>
                                        <td>111 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14571</th>
                                        <td>کاربر وردپرس</td>
                                        <td>18 خرداد</td>
                                        <td>111 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">فایل های سند</h4>
                        <table class="table table-striped mb-0">
                            <tbody>
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">2015</h6>
                                        <p class="text-muted mb-0">عنوان سند</p></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">2016</h6>
                                        <p class="text-muted mb-0">عنوان سند</p></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">2017</h6>
                                        <p class="text-muted mb-0">عنوان سند</p></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-file-pdf text-primary h2"></i></td>
                                    <td>
                                        <h6 class="mt-0">2018</h6>
                                        <p class="text-muted mb-0">عنوان سند</p></td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
       <!-- end row -->

    </div><!-- container fluid -->

</div>
@endsection
