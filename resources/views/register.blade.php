@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8">
       <h2 class="my-8">เพิ่มการผู้ใช้งาน</h2>
    <div class="field w-2/5">
      <label>บัญชีผู้ใช้งาน</label>
      <input type="text" name="first-name" placeholder="บัญชีผู้ใช้งาน">
    </div>
    <div class="field w-2/5">
      <label>รหัสผ่าน</label>
      <input type="password" name="last-name" placeholder="รหัสผ่าน">
    </div>
    <div class="field w-2/5">
        <label>ชื่อ</label>
        <input type="text" name="first-name" placeholder="ชื่อ">
      </div>
      <div class="field w-2/5">
        <label>นามสกุล</label>
        <input type="text" name="first-name" placeholder="นามสกุล">
      </div>
      <div class="field w-2/5">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" name="first-name" placeholder="เบอร์โทรศัพท์">
      </div>
      <div class="inline fields ">
            <label for="fruit">ประเภทสมาชิก:</label>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                <label>ทั่วไป</label>
              </div>
            </div>
            <div class="field">
              <div class="ui radio checkbox">
                <input type="radio" name="fruit" tabindex="0" class="hidden">
                <label>ผู้ดูแล</label>
              </div>
            </div>
          </div>
          <button class="ui button w-2/5 mt-4" type="submit" >ยืนยัน</button>

  </form>

@endsection