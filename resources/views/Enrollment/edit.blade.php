@extends('home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <!-- Modal -->
  <div class="modal fade" id="deleteEnrollmentModal" tabindex="-1" aria-labelledby="deleteEnrollmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteEnrollmentModalLabel">Delete Enrollment - {{$enrollment->student_id}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('enrollment/delete/'.$enrollment->id)}}" method="POST">
            @csrf 
            @method('DELETE')
        <div class="modal-body">
          Are you sure you want to delete this Enrollment?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete Course</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
    <h1>Edit Enrollment</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('enrollment/'.$enrollment->id)}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="student_id"> Student ID </label>
                <input type="text" name='student_id' class='form-control' value='{{$enrollment->student_id}}'>
                @error('student_id')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="course_id"> Course ID </label>
                <input type="text" name='course_id' class='form-control' value='{{$enrollment->course_id}}'>
                @error('course_id')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mt-2">
                <label for="enrollment_date"> Enrollment Date </label>
                <input type="text" name='email' class='form-control' value='{{$enrollment->enrollment_date}}'>
                @error('enrollment_date')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteEnrollmentModal">
    Delete Enrollment
  </button>
                <button class="btn btn-primary">
                    Update Enrollment
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection