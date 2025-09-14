@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Login</h1>
      <form method="post" action="{{ route('users.login') }}">
          @csrf
          <div class="form-group">
              <label for="firstname">Username:</label>
              <input type="email" class="form-control" name="email" required/>
          </div>
        <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required/>
                </div>
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            </form>
        <br/>
            <a href="{{ route('users.create') }}">สมัครสมาชิก</a>

        </div>
        </div>
</div>
@endsection
