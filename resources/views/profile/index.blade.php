@extends('layouts.base')
@section('content')
    <Div>
        <h1>
            {{ $student_profile }}
        </h1>
        {{-- <a href="{{ route(createParent) }}" class="btn btn-primary">Add Parent Details</a> --}}
    </Div>
@endsection