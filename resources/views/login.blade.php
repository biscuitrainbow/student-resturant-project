@extends('layout')
@section('content')

<form class="ui form flex flex-col items-center mt-8">
<img src="/img/logo.jpg" alt="logo" class="h-1/3 w-1/3 mt-8 mb-8">
    <div class="field w-2/5">
      <label>บัญชีผู้ใช้งาน</label>
      <input type="text" name="first-name" placeholder="บัญชีผู้ใช้งาน">
    </div>
    <div class="field w-2/5">
      <label>รหัสผ่าน</label>
      <input type="password" name="last-name" placeholder="รหัสผ่าน">
    </div>
    
    <button class="ui button w-2/5" type="submit">เข้าสู่ระบบ</button>
    <a class="mt-8" href="/register">เพิ่มบัญชีผู้ใช้</a>

  </form>
  
@endsection
