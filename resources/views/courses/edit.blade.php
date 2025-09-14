@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Register</h1>
      <form method="post" action="{{ route('courses.update',$course->id) }}">
          @csrf
          @method('PATCH')
          <div class="form-group">
              <label for="firstname">หัวข้อ:</label>
              <input type="text" class="form-control" name="topic" value="{{ $course->topic }}" />
          </div>
          <div class="form-group">
              <label for="start_date">วันเริ่มต้น:</label>
              <input type="date" class="form-control" name="start_date" value="{{ $course->start_date }}"/>
          </div>

         <div class="form-group">
              <label for="end_date">วันสิ้นสุด:</label>
              <input type="date" class="form-control" name="end_date" value="{{ $course->end_date }}" />
          </div>
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </form>
  </div>
</div>
</div>
@endsection
