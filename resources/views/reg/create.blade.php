@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Reg</h1>
      <form method="post" action="{{ route('reg.store') }}">
          @csrf
          <div class="form-group">
              <label for="firstname">หัวข้อ:</label>
              <select class="form-control" name="course_id">
                @foreach($courses as $course)
                  <option value="{{ $course->id }}">{{ $course->topic }}</option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </form>
  </div>
</div>
</div>
@endsection
