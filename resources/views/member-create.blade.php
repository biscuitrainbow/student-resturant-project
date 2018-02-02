@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" action="/member/create" method="post">
  {{csrf_field()}}
       <h2 class="my-8">สมัครสมาชิก</h2>
    <div class="field w-2/5">
      <label>รหัสสมาชิก</label>
      <input type="text" name="code" placeholder="รหัสสมาชิก">
    </div>
    <div class="field w-2/5">
      <label>ชื่อ</label>
      <input type="text" name="name" placeholder="ชื่อ">
    </div>
    <div class="field w-2/5">
        <label>นามสกุล</label>
        <input type="text" name="lastname" placeholder="นามสกุล">
      </div>
      <div class="field w-2/5">
        <label>ที่อยู่</label>
        <input type="text" name="address" placeholder="ที่อยู่">
      </div>
      <div class="field w-2/5">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" name="tel" placeholder="เบอร์โทรศัพท์">
      </div>
      
          <button class="ui button w-2/5 mt-4" type="submit" >ยืนยัน</button>

  </form>

@endsection