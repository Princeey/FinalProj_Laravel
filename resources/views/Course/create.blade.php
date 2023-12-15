@extends('home')

@section('content')

    <h1>Add New Course</h1>
    <div class="row">   
        <div class="col-md-5">
            <form action="{{ url('course/create') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="course_name">Name</label>
                    <input type="text" name="course_name" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="course_description">Description</label>
                    <input type="text" name="course_description" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="course_credit">Credit</label>
                    <input type="text" name="course_credit" class="form-control">
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">Add Course</button>
                </div>
            </form>
        </div>
    </div>
@endsection
