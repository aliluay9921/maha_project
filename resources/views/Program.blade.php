<!DOCTYPE html>
<html>

<head>
    <title>البرامج</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<style>
    h3 {
        display: inline;

    }

    #banner {
        background-color: #97BFB4;
        color: #fff;
        direction: rtl;
    }

    .desc {
        margin-top: 90px;
        padding: 20px;
        margin-right: -100px;
        margin-left: 100px;
    }

    .desc h3 {
        margin-top: 50px;
        margin-bottom: 30px;
    }

    .desc p {
        text-align: center;
        margin-right: 120px;
        font-family: sans-serif;
        font-weight: 600;
    }

    .img-fluid {
        margin-top: -30px;
        margin-right: 50px;
    }

    .bottom-img {
        width: 100%;
        height: 100px;
    }

    .navbar {
        background-color: #97BFB4 !important;
    }

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary" dir="rtl">
        <a class="navbar-brand  text-white" href="#">برامجي</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav pl-5 ml-5">
                <li class="nav-item ">
                    <a class="button-style" href="{{ route('programs') }}">الادارة</a>
                </li>
                <li class="nav-item ">
                    <a class="button-style" href="{{ route('all_users') }}">المستخدمين</a>
                </li>
                <li class="nav-item ">
                    <a class="button-style" href="{{ route('home') }}">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item ">
                    <a class="button-style" href="{{ route('get_program_student') }}">البرامج</a>
                </li>
                <li class=" nav-item ">
                    <a class="button-style" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                        {{ __('تسجيل خروج') }}
                    </a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0" id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>
        </div>
    </nav>
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class=" desc col-md-6">
                    <h3>الجامعة المستنصرية موقع التعليم الالكتروني </h3>
                    <br>
                    <p class="mt-2">منصة لتقديم الادوات المجانية لطلاب علوم الحاسوب الجامعة المستنصرية </p>
                </div>
                <div class="col-md-6 text-center p-4  mb-3 mt-3">
                    <img src="/image/animation_500_kwyvd9aj.gif" alt="" class="img-fluid">
                </div>
            </div>

        </div>
        <img src="/image/pngkey.com-wave-shape-png-5161226.png" class="bottom-img">
    </section>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>البرامج</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                    data-target="#exampleModal">
                    اضافة برنامج </button>
            </div>
            <div class="card-body">

                <table class="table table-bordered yajra-datatable" dir="rtl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم البرنامج</th>
                            <th class="w-50">تفاصيل البرنامج</th>
                            <th>حجم البرنامج</th>
                            <th>عدد التحميلات</th>
                            <th>صورة</th>
                            <th class="w-50">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- modal to add new program --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" dir="rtl">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة برنامج</h5>
                </div>

                <div class="modal-body">
                    <form action="{{ route('add.program') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right">اسم البرنامج</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                aria-describedby="emailHelp" placeholder="قم بأدخال اسم البرنامج">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="float-right">تفاصيل البرنامج</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="قم بأدخال تفاصيل البرنامج" name="details" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="float-right">رابط التحميل</label>
                            <input type="text" class="form-control" name="link" id="exampleInputPassword1"
                                placeholder="قم بأدخال رابط التحميل" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="float-right">حجم البرنامج</label>
                            <input type="text" class="form-control" name="size" id="exampleInputPassword1"
                                placeholder="قم بأدخال حجم البرنامج" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="float-right">صورة البرنامج</label>
                            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                            <button type="submit" class="btn btn-primary">اضافة</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('get.program') }}",
            columns: [{
                    data: 'name',
                    name: 'name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'details',
                    name: 'details',
                    orderable: true,
                    searchable: true
                },

                {
                    data: 'size',
                    name: 'size',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'downloads',
                    name: 'downloads',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>

</html>
