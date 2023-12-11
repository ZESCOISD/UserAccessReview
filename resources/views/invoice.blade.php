<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZESCO USER ACCESS REVIEW  | Dashboard</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
          href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
    <script nonce="1215ee1b-49de-4eec-8e01-d5f5765a1708">(function (w, d) {
            !function (bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {deferred: [], listeners: []};
                bb.zaraz.q = [];
                bb.zaraz._f = function (bf) {
                    return async function () {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({m: bf, a: bg})
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0], bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer) for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({...bp[1], ...bq[1]})), {}))) zaraz.set(bo[0], bo[1], {scope: "page"});
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu.startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    @include('layouts.nav')


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        @include('layouts.sidebar')

    </aside>


            <div class="card-body table-responsive p-0"><div class="content-wrapper" style="min-height: 810.406px;">
                    <!-- Main content -->

                    <div class="content-wrapper" style="min-height: 804.406px;">
                        <!-- Content Header (Page header) -->
                        <div wire:id="3YUOoOSXqqOdTPkrzpZ5" class="container-fluid">
                            <div wire:id="AU0hxckkka9tYbgvHKl6" class="content-header p-3">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0 text-green "> User Reviews</h1>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                                            <li class="breadcrumb-item active"> Supervisor Approval </li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>


                        <!-- Livewire Component wire-end:AU0hxckkka9tYbgvHKl6 -->    <!-- Main row -->
                            <div class="row m-3">
                                <div class="col-sm-12 col-sm-6 col-md-2">
                                    <div class="info-box mb-3">
                                        <a class="info-box-icon bg-gray elevation-1" href="{{route("access.index")}}">
                                            <span><i class="fa fa-file"></i></span>
                                        </a>
                                        <div class="info-box-content">
                                            <span class="info-box-text"> New User Reviews</span>
                                            <span class="info-box-number">67</span>

                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                </div>
                            </div>
                            <div class="row">

                                <!-- Left col -->
                                <div class="col-md-12">
                                    <!-- TABLE: LATEST ORDERS -->
                                    <div class="card">
                                        <div class="card-header border-transparent  bg-gradient-orange " style="opacity: .9">
                                            <h3 class="card-title">Approvals </h3> <span class="badge badge-success right ml-2"></span>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-2">
                                            <div class="table-responsive mt-10 ">
                                                <table id="example1" class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th>Reviewed By</th>
                                                            <th>Date Given/Received</th>
                                                            <th>Man No.</th>
                                                            <th>Action </th>
                                                            <th>Approval Date</th>
                                                            <th>Description</th>
                                                            <th>System Adminstrator</th>
                                                            <th>Status</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>.
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
            </section>

        </div>
        <div>

        @include('layouts.footer')

       
        </div>
    </div>



<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('adminlte/dist/js/adminlte.js?v=3.2.0')}}"></script>

<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>

<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
