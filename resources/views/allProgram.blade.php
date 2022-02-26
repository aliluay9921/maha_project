@extends('layouts.app')
@section('content')
    <div class="container ml-2">

        <form action="{{ route('search') }}" method="POST" class="form-inline" dir="rtl">
            @csrf
            <div class="form-group">
                <label for="" class="float-right m-2">بحث عن البرنامج</label>
                <input type="text" name="search" class="form-control pr-5 pl-5 m-2"
                    placeholder="اكتب هنا للبحث عن برنامج ....">
                <input type="submit" class="btn btn-success pr-5 pl-5  m-2" value="بحث">
            </div>
        </form>

    </div>
    <hr>
    <div class="container-fluid mt-5">
        <div class="row">
            @foreach ($programs as $program)

                <div class="paper">
                    <img class="poster" src="/image/image_program/{{ $program->image }}"
                        style="width: 100px height:150px" />
                    <h2>{{ $program->name }}</h2>
                    <p class="p-2">{{ $program->details }}</p>
                    <span class="size_paper"><b>{{ $program->size }}</b></span>

                    <a href="{{ $program->link }}" class="btn_ mb-2">تحميل
                    </a>

                    <div class="space"></div>
                </div>

            @endforeach
        </div>
    </div>


@endsection
