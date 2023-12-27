@extends("layouts.base")
@section("content")

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Update Your Details</h6>
    </div>

    <form class="wizard-form" action="{{ route('updateStudentProfile', $student->id)}}" id="save-details" method="POST">
        @csrf
        @method('PUT')
        <div class="content clearfix">
        <fieldset id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Gender:</label>
                        <select name="location" class="form-select">
                            <option value="1" selected="">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">ID Number:</label>
                        <input type="text" name="IdNo" class="form-control">                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">First Name:</label>
                        <input type="text" name="firstname" class="form-control" value="{{ $student->first_name }}">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Other Name(s):</label>
                        <input type="email" name="othernames" class="form-control" value="{{ $student->othernames }}">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Last Name:</label>
                        <input type="email" name="lastname" class="form-control" value="{{ $student->last_name }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Phone #:</label>
                        <input type="text" name="phonenumber" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6" hidden>
                    <div class="mb-3">
                        <label class="form-label">UserID:</label>
                        <input type="text" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
                    </div>
                </div>
                <div class="col-lg-6" hidden>
                    <div class="mb-3">
                        <label class="form-label">ParentID:</label>
                        <input type="text" name="parent_id" class="form-control" value="12345">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <label class="form-label">Date of birth:</label>
                        <input type="date" class="form-control" name="dateofbirth" id="dateofbirth">
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="actions clearfix">
            <ul role="menu" aria-label="Pagination">
                <li aria-hidden="false" aria-disabled="false">
                    <a href="{{ route('storeStudentProfile') }}" class="btn btn-primary" onclick="event.preventDefault();
                        document.getElementById('save-details').submit();">
                        Save
                        <i class="ph-arrow-circle-right ms-2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </form>
</div>

@push('js_after')
@endpush

@endsection