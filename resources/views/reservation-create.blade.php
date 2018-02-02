@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" method="get" action="/reservation/next">
    {{csrf_field()}}

        <h2 class="my-8">สำรองที่นั่ง</h2>
     <div class="field w-2/5">
       <label>ชื่อ</label>
       <input type="text" name="name" placeholder="ชื่อ">
     </div>
     <div class="field w-2/5">
       <label>นามสกุล</label>
       <input type="text" name="lastname" placeholder="นามสกุล">
     </div>
     <div class="field w-2/5">
         <label>เบอร์โทรศัพท์</label>
         <input type="text" name="tel" placeholder="เบอร์โทรศัพท์">
       </div>
       <div class="field w-2/5">
        <label>สมาชิก</label>
        <div class="ui fluid search selection dropdown">
             <input type="hidden" name="member">
             <i class="dropdown icon"></i>
             <div class="default text">Select Member</div>
             <div class="menu">
             @foreach($members as $member)
             <div class="item" data-value="{{ $member->id }}" value="{{$member->id}}">{{ $member->name . ' ' . $member->lastname }}</div>
             @endforeach
         </div>
            </div>
      </div>
       <div class="field w-2/5">
         <label>จำนวนคน</label>
         <input type="text" name="seat" placeholder="จำนวนคน">
       </div>
      <div class="field w-2/5">
        <label>โต๊ะ</label>
        <select name="table[]" multiple="" class="ui fluid dropdown">
            @foreach($tables as $table)
            <option value="{{$table->id}}">{{$table->name}}</option>
            @endforeach
       </select>
        </div>
       <div class="field w-2/5">
        <div class="ui calendar" id="example5">
                <label>วันเวลา</label>
                <div class="ui input left icon">
                  <i class="calendar icon"></i>
                  <input type="text" name="date_time" placeholder="Date">
                </div>
              </div>
      </div>
      
        <button class="ui button w-2/5 mt-4" type="submit" >ยืนยัน</button>
 
   </form>
@endsection