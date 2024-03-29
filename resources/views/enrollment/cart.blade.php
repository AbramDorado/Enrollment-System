@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>My Cart</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="text-center">
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($userEnrollments as $enrollment)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        {{-- Rest of the code for enrollment display --}}
                        <img src="{{ optional($enrollment->course->photo)->getUrl() ?? asset('img/no_image.png') }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            @foreach($enrollment->course->disciplines as $discipline)
                                <a href="{{ route('courses.index') }}?discipline={{ $discipline->id }}" class="btn_4 mr-1 mb-1">{{ $discipline->name }}</a>
                            @endforeach
                            <h4>{{ $enrollment->course->getPrice() }}</h4>
                            <a href="{{ route('courses.show', $enrollment->course->id) }}"><h3>{{ $enrollment->course->name }}</h3></a>
                            <p>{{ Str::limit($enrollment->course->description, 100) }}</p>
                            @if($enrollment->course->institution)
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="{{ optional($enrollment->course->institution->logo)->thumbnail ?? asset('img/no_image.png') }}" alt="" class="rounded-circle">
                                        <div class="author_info_text">
                                            <p>Institution</p>
                                            <h5><a href="{{ route('courses.index') }}?institution={{ $enrollment->course->institution->id }}">{{ $enrollment->course->institution->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="author_info text-center">
                                <form action="{{ route('enroll.removeCourseFromCart', $enrollment->course->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn_4 mr-1 mb-1">{{ trans('global.delete') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="float-right">
                    {{ $userEnrollments->links() }}
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{-- Confirm button for deleting all enrollments and transferring to another table --}}
            <form action="{{ route('enroll.deleteAndTransfer') }}" method="POST">
            @csrf
            <button type="submit" class="btn_1 login-btn">Checkout and Enroll</button>
            <br></br>
            </form>
        </div>
        </div>
    </div>
</section>
@endsection
