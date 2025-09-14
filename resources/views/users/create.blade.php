@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Register</h1>
      <form method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">
              <label for="firstname">ชื่อ-นามสกุล:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="email">อีเมล:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="password">รหัสผ่าน:</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <div class="form-group">
              <label for="confirm">ยืนยันรหัสผ่าน:</label>
              <input type="password" class="form-control" name="confirm"/>
          </div>

          <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
      </form>
  </div>
</div>
</div>
@endsection
