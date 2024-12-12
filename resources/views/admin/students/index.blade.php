@extends('layouts.admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ __('students.title') }}</h1>
    <a href="{{ route('admin.students.create') }}" class="btn btn-primary">{{ __('students.create') }}</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>{{ __('students.first_name') }}</th>
                <th>{{ __('students.last_name') }}</th>
                <th>{{ __('students.department') }}</th>
                <th>{{ __('students.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->department->title }}</td>
                <td>
                    <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-warning">{{ __('students.edit') }}</a>
                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">{{ __('students.delete') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection