@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>My Course Enrollment Applications</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="text-center">
                    <div class="btn-group" role="group" aria-label="Enrollment Status">
                        <a href="{{ route('enroll.myCourses') }}" class="btn btn-secondary @if(empty(request('status'))) active @endif">All</a>
                        <a href="{{ route('enroll.myCourses', ['status' => 'awaiting']) }}" class="btn btn-secondary @if(request('status') === 'awaiting') active @endif">Awaiting</a>
                        <a href="{{ route('enroll.myCourses', ['status' => 'accepted']) }}" class="btn btn-secondary @if(request('status') === 'accepted') active @endif">Accepted</a>
                        <!--<a href="{{ route('enroll.myCourses', ['status' => 'rejected']) }}" class="btn btn-secondary @if(request('status') === 'rejected') active @endif">Rejected</a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- Retrieve all enrollments if no status filter is applied --}}
            @php
                $enrollments = empty(request('status')) ? $userEnrollments : $userEnrollments->where('status', request('status'));
            @endphp

            {{-- Loop through each enrollment --}}
            @foreach($enrollments as $enrollment)
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
                            <div class="author_info">
                                <p>Status:</p>
                                <h5>{{ App\Enrollment::STATUS_RADIO[$enrollment->status] }}</h5>
                                {{-- Display action button based on the enrollment status --}}
                                @if($enrollment->status === 'accepted')
                                    @can('enrollment_delete')
                                        <form action="{{ route('admin.enrollments.destroy', $enrollment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn_4 mr-1 mb-1" value="Drop">
                                        </form>
                                    @endcan
                                @elseif($enrollment->status === 'awaiting')
                                    @can('enrollment_delete')
                                        <form action="{{ route('admin.enrollments.destroy', $enrollment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn_4 mr-1 mb-1" value="Cancel">
                                        </form>
                                    @endcan
                                @endif
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
    </div>
</section>
@endsection
