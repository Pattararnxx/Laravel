@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Users</h1>
    <div class="text-right">
        <a style="margin: 19px;" href="{{ route('logout') }}" class="btn btn-warning">ออกจากระบบ</a>
    </div>
     <div>
        <a style="margin: 19px;" href="{{ route('reg.create') }}" class="btn btn-primary">ลงทะเบียน</a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
          <td>รหัส</td>
          <td>ผู้ใช้</td>
          <td>หัวข้อ</td>
          <td>วันเริ่มต้น</td>
          <td>วันสิ้นสุด</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user_regs as $reg)
<tr>
            <td>{{$reg->id}}</td>
            <td>{{$reg->name}}</td>
            <td>{{$reg->topic}}</td>
            <td>{{$reg->start_date}}</td>
            <td>{{$reg->end_date}}</td>
            <td>
            <a href="{{ route('reg.edit',$reg->id)}}" class="btn btn-primary">แก้ไข</a>
            </td>
            <td>
            <form action="{{ route('reg.destroy', $reg->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>


</div>
</div>

@endsection
