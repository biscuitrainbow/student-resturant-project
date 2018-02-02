@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" action="/register" method="post">
  {{csrf_field()}}
       <h2 class="my-8">เพิ่มการผู้ใช้งาน</h2>
    <div class="field w-2/5">
      <label>บัญชีผู้ใช้งาน</label>
      <input type="text" name="username" placeholder="บัญชีผู้ใช้งาน">
    </div>
    <div class="field w-2/5">
      <label>รหัสผ่าน</label>
      <input type="password" name="password" placeholder="รหัสผ่าน">
    </div>
    <div class="field w-2/5">
        <label>ชื่อ</label>
        <input type="text" name="first_name" placeholder="ชื่อ">
      </div>
      <div class="field w-2/5">
        <label>นามสกุล</label>
        <input type="text" name="last_name" placeholder="นามสกุล">
      </div>
      <div class="field w-2/5">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" name="tel" placeholder="เบอร์โทรศัพท์">
      </div>
      <div class="inline fields ">
            <label for="fruit">ประเภทสมาชิก:</label>
            
            @foreach($user_types as $type)
            <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="type" value="{{$type->id}}" checked="" tabindex="0" class="hidden">
                  <label>{{ $type->name }}</label>
                </div>
              </div>
            @endforeach
            
          </div>
          <button class="ui button w-2/5 mt-4" type="submit" >ยืนยัน</button>

  </form>

@endsection