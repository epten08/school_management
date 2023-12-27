@extends("layouts.index")
@section("content")


<form class="login-form"  action="{{route('Student')}}" method="GET">
    {{-- @csrf --}}
    <div class="mb-3">
        <label class="form-label">Student Number</label>
        <div class="form-control-feedback form-control-feedback-start">
            <input type="text" id="stdnum" name="stdnum" class="form-control" placeholder="MB123">
            <div class="form-control-feedback-icon">
                <i class="ph-user-circle text-muted"></i>
            </div>
        </div>
    <button type="submit" class="btn btn-teal btn-small py-12 ">Verify</button>

    </div>
</form>
@endsection