@extends('templates.admin.admin_default')

@section('title')
<h2>New Vacancy</h2>
@endsection

@section('content')

<form action="{{ route('owner.vacancy.update', $vacancy) }}" method="post">
    <div class="card mb-3 px-0 mx-auto">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Input New Vacancy</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" id="position" value="{{ old('position')??$vacancy->position }}" class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}">
                        <div class="invalid-feedback">
                            {{$errors->first('position')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job_desc">Job Description</label>
                        <textarea name="job_desc" id="job_desc" rows="5" class="form-control {{ $errors->has('job_desc') ? 'is-invalid' : '' }}">{{ old('job_desc')??$vacancy->job_desc }}</textarea>
                        <div class="invalid-feedback">
                            {{$errors->first('job_desc')}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="number" name="salary" id="salary" value="{{ old('salary')??$vacancy->salary }}" class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}">
                        <div class="invalid-feedback">
                            {{$errors->first('salary')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="requirement">Requirement</label>
                        <textarea name="requirement" id="requirement" rows="5" class="form-control {{ $errors->has('requirement') ? 'is-invalid' : '' }}">{{ old('requirement')??$vacancy->requirement }}</textarea>
                        <div class="invalid-feedback">
                            {{$errors->first('requirement')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">
            <button type="submit" class="btn btn-info mx-1">Save</button>
            <button type="reset" class="btn btn-light mx-1">Reset</button>
        </div>
    </div>
</form>
@endsection
