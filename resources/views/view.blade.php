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


            <div class="card-body table-responsive p-0"><div class="content-wrapper" style="min-height: 804.406px;">
                    <!-- Main content -->

                    <div class="content-wrapper" style="min-height: 804.406px;">
                        <!-- Content Header (Page header) -->
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{route("access.index")}}">User Reviews</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div>
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-10">
                                <form method="post" action="">

                                    <section class="content">
                                        <div class="container-fluid">

                                            <div class="row">
                                                <div class="col-md-12">




                                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="btn btn-outline-success float-right" href="{{route("home")}}">
                                                        <i class="fa fa-backward"></i> Back
                                                    </a>

                                                    <h2 class="title">User Review</h2>

                                                </div>

                                                    <div class="card-body">

                                                        <div class="row">


                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="staff_no">Man Number</label>
                                                                    <input class="form-control" id="staff_no" type="text" value="{{$user_review->staff_no ?? "-" }}" name="staff_no" readonly="">

                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control" id="username" value="{{$user_review->username ?? "-" }}" name="username" readonly="">
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="full_name">Full Name</label>
                                                                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{$user_review->full_name ?? "-" }}" readonly="">

                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="employyee_designation">Employee Designation</label>
                                                                    <input type="text" class="form-control" id="employee_designation" name="employee_designation"value="{{$user_review->employee_designation ?? "-" }}"readonly="">



                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="area">Area</label>
                                                                    <input type="text" id="area" name="area" class="form-control"value="{{$user_review->area ?? "-" }}" readonly="">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="review_access">Review access</label>
                                                                    <input type="text" id="review_access" name="review_access" class="form-control"value="{{$user_review->review_access ?? "-" }}" readonly>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="review_action">Review Action</label>
                                                                    <select class="form-control" name="review_action" id="review_action" aria-label="Default select example"value="{{$user_review->review_action ?? "-" }}"readonly>

                                                                        <option selected>review_action</option>
                                                                        <option value="1">Pending</option>
                                                                        <option value="2">Accept</option>
                                                                        <option value="3">Remove</option>
                                                                        <option value="4">Terminate</option>
                                                                        <option value="5">Modify</option>
                                                                    </select>
                                                                     </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="system">System</label>
                                                                    <select class="form-control" name="system_id" id="system_id" aria-label="Default select example"value="{{$user_review->name ?? "-" }}">

                                                                        <option selected>Select System</option>
                                                                        <option value="1">Fleet Masters</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                        <option value="4">Three</option>


                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="Role">Role</label>
                                                                    <select class="form-control" name="role_id" id="role_id" aria-label="Default select example"value="{{$user_review->Role ?? "-" }}">

                                                                        <option selected>Select Role</option>
                                                                        <option value="1">Fuel Requisition</option>
                                                                        <option value="2">Manager</option>
                                                                        <option value="3">Three</option>
                                                                        <option value="4">Four</option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="comments">Comments</label>
                                                                    <input type="text" class="form-control" name="comments" id="comments"value="{{$user_review->comments ?? "-" }}" readonly>

                                                                </div>
                                                            </div>
                                                            <a class="btn btn-outline-success float-right" href="-">
                                                                <i class="fa fa-"></i> Approve
                                                            </a>

                                                                    </div>
                                                                </div>


                                                                </div>


                                                                <div style="padding: 120px">
                                                                </div>

                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>

                                                    <!-- /.card -->
                                                </div>
                                            </div>

                                        </div><!-- /.container-fluid -->
                                    </section>

                                </form>

                            </div>

                        </section>

                    </div>

                    </div>

                </div>
            </section>

        </div>
        <div>

        @include('layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

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
