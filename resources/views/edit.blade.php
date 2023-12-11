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

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Review</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>




                <div class="row">

                    <section class="col-lg-12 connectedSortable">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-bold text-orange text-capitalize">
                                    User Access Review Form
                                </h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <form method="POST" action="{{route('access.store')}}">
                                @csrf
                                <div class="card-body">
                                    <table border="1" width="100%" cellspacing="0" cellpadding="0" align="Centre" class="mt-2 mb-4">
                                        <thead>
                                        <tr class="border-success">
                                            <th width="33%" colspan="1" class="text-center"><a href="#"><img src="https://eforms.zesco.co.zm/dashboard/dist/img/zesco1.png" title="ZESCO" alt="ZESCO" width="25%"></a></th>
                                            <th width="33%" colspan="4" class="text-center">USER ACCESS REVIEW FORM</th>
                                            <th width="34%" colspan="1" class="p-3">Doc Number:<br>SC.15100.FORM.00867<br>Version: 3
                                            </th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="staff_no">Staff No</label>
                                                <input type="text" class="form-control" name="staff_no" id="staff_no"
                                                       placeholder="" value="{{$user_review_detail->staff_no}}"required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username"
                                                       placeholder="" value="{{$user_review_detail->staff_no}}required>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="full_name">Full Name</label>
                                                <input type="text" class="form-control" name="full_name" id="full_name"
                                                       placeholder=""value="{{$user_review_detail->staff_no}} required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="employee_designation">Employee Designation</label>
                                                <input type="text" class="form-control" name="employee_designation" id="employee_designation"
                                                       placeholder=""value="{{$user_review_detail->staff_no}}required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="area">Area</label>
                                                <input type="text" class="form-control" name="area" id="area"
                                                       placeholder=""value="{{$user_review_detail->staff_no}}>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="review_access">Review access</label>
                                                <input type="text" class="form-control" name="review_access" id="review_access"value="{{$user_review_detail->staff_no}}>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="review_action">Review Action</label>
                                                <select class="form-control" name="review_action" id="review_action" aria-label="Default select example">
                                                    <option selected>review_action</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Accept</option>
                                                    <option value="3">Remove</option>
                                                    <option value="4">Terminate</option>
                                                    <option value="5">Modify</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="system">System</label>
                                                <select class="form-control" name="system_id" id="system_id" aria-label="Default select example">
                                                    <option selected>Select System</option>
                                                    <option value="1">Fleet Masters</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    <option value="4">Three</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="Role">Role</label>
                                                <select class="form-control" name="role_id" id="role_id" aria-label="Default select example">
                                                    <option selected>Select Role</option>
                                                    <option value="1">Fuel Requisition</option>
                                                    <option value="2">Manager</option>
                                                    <option value="3">Three</option>
                                                    <option value="4">Four</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="comments">Comments</label>
                                                <input type="text" class="form-control" name="comments" id="comments"value="{{$user_review_detail->staff_no}}>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                   <button type="submit" class="btn btn-success" style="float: right " >Submit</button>
                                </div>
                            </form>
                        </div>

                    </section>

                </div>

                <div class="row">

                    <section class="col-lg-12 connectedSortable">

                            <form role="form">
                                <div class="card ">

                                    <div class="card-header">
                                        <h4 class="card-title text-bold text-orange text-capitalize">Approvals</h4> <span class="badge badge-secondary right ml-2"></span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-lg-12 ">
                                            <table id="dataTable" class="table" aria-describedby="">
                                                <thead>
                                                <tr class="text-white text-bold text-uppercase bg-gradient-green">
                                                    <th>Reviewed By</th>
                                                    <th>Man No</th>
                                                    <th>Designation</th>
                                                    <th>Action</th>
                                                    <th>Approval Date</th>
                                                    <th>System Adminstrator</th>
                                                    <th>Data Location</th>
                                                    <th>Date</th>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">


                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                                <!-- /.card-body -->


                            </form>
                        </div>

                    </section>

                </div>

            </div>
        </section>

    </div>

    @include('layouts.footer')

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

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
