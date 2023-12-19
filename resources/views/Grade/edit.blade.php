@extends('home')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <!-- Modal -->
  <div class="modal fade" id="deleteGradeModal" tabindex="-1" aria-labelledby="deleteGradeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteGradeModalLabel">Delete Grade - {{$grade->enrollment_id}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('grade/delete/'.$grade->id)}}" method="POST">
            @csrf 
            @method('DELETE')
        <div class="modal-body">
          Are you sure you want to delete this grade?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete Grade</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
    <h1>Edit Grades</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('grade/'.$grade->id)}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
                <label for="enrollment_id"> Enrollment ID </label>
                <input type="text" name='enrollment_id' class='form-control' value='{{$grade->enrollment_id}}'>
                @error('enrollment_id')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="grade"> Grade </label>
                <input type="text" name='grade' class='form-control' value='{{$grade->grade}}'>
                @error('grade')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mt-2">
                <label for="exam_date"> Exam Date </label>
                <input type="text" name='email' class='form-control' value='{{$grade->exam_date}}'>
                @error('exam_date')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGradeModal">
    Delete Grade
  </button>
                <button class="btn btn-primary">
                    Update Grade
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection