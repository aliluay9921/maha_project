<!DOCTYPE html>
<html>

<head>
    <title>المستخدمين</title>
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
                    <p> منصة للتعليم الالكتروني لطلاب علوم الحاسوب </p>
                </div>
                <div class="col-md-6 text-center p-4  mb-3 mt-3">
                    <img src="/image/animation_500_kwyvd9aj.gif" alt="" class="img-fluid">
                </div>
            </div>

        </div>
        <img src="/image/pngkey.com-wave-shape-png-5161226.png" class="bottom-img">
    </section>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>المستخدمين</h3>
            </div>
            <div class="card-body">

                <table class="table table-bordered yajra-datatable" dir="rtl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم</th>
                            <th>البريد الالكتروني</th>
                            <th>تأريخ الانضمام</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
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
            serverSide: true,
            ajax: "{{ route('get.users') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: true,
                    searchable: true
                },

                {
                    data: 'created_at',
                    name: 'created_at',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>

</html>
