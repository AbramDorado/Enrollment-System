@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.enrollment.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <form action="{{ route('admin.enrollments.index') }}" method="GET" class="mb-2">
                <div class="row">
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="course_name">{{ trans('cruds.enrollment.fields.course') }} Name</label>
                            <input type="text" id="course_name" class="form-control" name="course_name" value="{{ request('course_name') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status">{{ trans('cruds.enrollment.fields.status') }}</label>
                            <select id="status" class="form-control" name="status">
                                <option value="">{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Enrollment::STATUS_RADIO as $key => $value)
                                    <option value="{{ $key }}" {{ request('status') == $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary mt-4">{{ trans('global.filter') }}</button>
                        <a class="btn btn-danger mt-4" href="{{ route('admin.enrollments.index') }}">{{ trans('global.clear') }}</a>
                    </div-->
                </div>
            </form>

            <table class="table table-bordered table-striped">
                <tbody>
                    <!-- <tr>
                        <th>
                            {{ trans('cruds.enrollment.fields.id') }}
                        </th>
                        <td>
                            {{ $enrollment->id }}
                        </td>
                    </tr> -->
                    <tr>
                        <th>
                            {{ trans('cruds.enrollment.fields.user') }}
                        </th>
                        <td>
                            {{ $enrollment->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.enrollment.fields.course') }}
                        </th>
                        <td>
                            {{ $enrollment->course->name ?? '' }}
                        </td>
                    </tr>
                
                    <tr>
                        <th>
                            {{ trans('cruds.enrollment.fields.status') }}
                        </th>
                        <td>
                            {{ App\Enrollment::STATUS_RADIO[$enrollment->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
