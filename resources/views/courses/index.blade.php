@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">courses</h1>
     <div>
        <a style="margin: 19px;" href="{{ route('courses.create')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>รหัส</td>
          <td>หัวข้อ</td>
          <td>วันเริ่มต้น</td>
          <td>วันสิ้นสุด</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
<tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->topic}}</td>
            <td>{{$course->start_date}}</td>
            <td>{{$course->end_date}}</td>
            <td>
            <a href="{{ route('courses.edit',$course->id)}}" class="btn btn-primary">แก้ไข</a>
            </td>
            <td>
            <form action="{{ route('courses.destroy', $course->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">ลบ</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
