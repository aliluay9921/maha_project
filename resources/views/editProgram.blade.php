@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col" dir="rtl">
                @if (session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('update.program') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" value="{{ $program->id }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-right">اسم البرنامج</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $program->name }}"
                            name="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="float-right">تفاصيل البرنامج</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"
                            value="{{ $program->details }}" name=" details" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="float-right">رابط التحميل</label>
                        <input type="text" class="form-control" value="{{ $program->link }}" name="link"
                            id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="float-right">حجم البرنامج</label>
                        <input type="text" class="form-control" value="{{ $program->size }}" name="size"
                            id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="float-right">صورة البرنامج</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    <div>
                        <a href="{{ route('home') }}" class="btn btn-secondary w-25 m-1 float-right">رجوع</a>
                        <button type="submit" class="btn btn-success  w-25  m-1 float-right">تعديل</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
