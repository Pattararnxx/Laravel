@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Course</h1>
      <form method="post" action="{{ route('courses.store') }}">
          @csrf
          <div class="form-group">
              <label for="firstname">หัวข้อ:</label>
              <input type="text" class="form-control" name="topic"/>
          </div>
          <div class="form-group">
              <label for="start_date">วันเริ่มต้น:</label>
              <input type="date" class="form-control" name="start_date"/>
          </div>
         <div class="form-group">
              <label for="end_date">วันสิ้นสุด:</label>
              <input type="date" class="form-control" name="end_date"/>
          </div>
          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </form>
  </div>
</div>
</div>
@endsection
