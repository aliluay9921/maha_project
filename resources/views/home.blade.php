@extends('layouts.app')
@section('content')

    <div class="carousel">
        <div class="carousel-cell"><img src="/image/image_program/{{ $programs[0]->image }}" class="p">
            <hr>
            <p class="n">{{ $programs[0]->name }}</p>
            <p class="content">{{ $programs[0]->details }}</p>
            <span class="size">{{ $programs[0]->size }}</span>

            <a href="{{ $programs[0]->link }}" class="download btn btn-block ">تحميل</a>

        </div>
        <div class="carousel-cell">
            <img src="/image/image_program/{{ $programs[1]->image }}" class="p">
            <hr>
            <p class="n">{{ $programs[1]->name }}</p>
            <p class="content">{{ $programs[1]->details }}</p>
            <span class="size">{{ $programs[1]->size }}</span>
            <a href="{{ $programs[1]->link }}" class="download btn btn-block ">تحميل</a>
        </div>
        <div class="carousel-cell"><img src="/image/image_program/{{ $programs[2]->image }}" class="p">
            <hr>
            <p class="n">{{ $programs[2]->name }}</p>
            <p class="content">{{ $programs[2]->details }}</p>
            <span class="size">{{ $programs[2]->size }}</span>

            <a href="{{ $programs[2]->link }}" class="download btn btn-block ">تحميل</a>
        </div>
        <div class="carousel-cell"><img src="/image/image_program/{{ $programs[3]->image }}" class="p">
            <hr>
            <p class="n">{{ $programs[3]->name }}</p>
            <p class="content">{{ $programs[3]->details }}</p>
            <span class="size">{{ $programs[3]->size }}</span>

            <a href="{{ $programs[3]->link }}" class="download btn btn-block ">تحميل</a>
        </div>

    </div>
    <div class="more">
        <a href="{{ route('get_program_student') }}" class="btn  btn-block">عرض المزيد من البرامج</a>
    </div>
@endsection
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

@section('script')

    <script>
        $(document).ready(function() {
            $(".b").click(function() {
                $(this).toggleClass("b");
                $(this).toggleClass("b-selected");
            });
        });

        var elem = document.querySelector('.carousel');
        var flkty = new Flickity(elem, {
            // options
            cellalign: 'right',
            pageDots: false,
            groupCells: '20%',
            selectedAttraction: 0.03,
            friction: 0.15
        });
    </script>
@endsection
