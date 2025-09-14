@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Main</h1>
<div class="text-right">
        <a style="margin: 19px;" href="{{ route('users.index') }}" class="btn btn-primary">เข้าสู่ระบบ</a>
    </div>
    <div>
        <a style="margin: 19px;" href="{{ route('courses.index') }}" class="btn btn-primary">หลักสูตร</a>
    </div>

</div>
</div>

@endsection


