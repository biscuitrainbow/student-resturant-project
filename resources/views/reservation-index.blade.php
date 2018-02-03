@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">การสำรองที่นั่งทั้งหมด</h2>
        <a href="/reservation/create">
                <button class="ui button" type="submit" >สำรองที่นั่ง</button>
        </a>
</div>

<form action="/reservation" class="mb-8">
    <div class="flex items-center">
            <div class="field w-1/5 mr-8">
                    <label class="">เดือน</label>
                    <div class="ui fluid search selection dropdown mt-2">
                        <input type="hidden" name="month">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select Month</div>
                        <div class="menu">
                        
                        <div class="item" data-value="1" value="1">January</div>
                        <div class="item" data-value="2" value="2">Febuary</div>
                        <div class="item" data-value="3" value="3">March</div>
                        <div class="item" data-value="4" value="4">April</div>
                        <div class="item" data-value="5" value="5">May</div>
                        <div class="item" data-value="6" value="6">June</div>
                        <div class="item" data-value="7" value="7">July</div>
                        <div class="item" data-value="8" value="8">August</div>
                        <div class="item" data-value="9" value="9">September</div>
                        <div class="item" data-value="10" value="10">October</div>
                        <div class="item" data-value="11" value="11">November</div>
                        <div class="item" data-value="12" value="12">December</div>

                        </div>
                    </div>
            </div>

            <div class="field w-1/5 mr-8">
                    <label class="">ปี</label>
                    <div class="ui fluid search selection dropdown mt-2">
                        <input type="hidden" name="year">
                        <i class="dropdown icon"></i>
                        <div class="default text">Select Year</div>
                        <div class="menu">
                        
                        <div class="item" data-value="2018" value="2018">2018</div>
                        </div>
                    </div>
            </div>
            <div class="field w-1/5">
                <label class="">ประเภท</label>
                <div class="ui fluid search selection dropdown mt-2">
                    <input type="hidden" name="type">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Type</div>
                    <div class="menu">
                    
                    <div class="item" data-value="กินที่ร้าน" value="กินที่ร้าน">กินที่ร้าน</div>
                    <div class="item" data-value="สั่งกลับบ้าน" value="สั่งกลับบ้าน">สั่งกลับบ้าน</div>
                    </div>
                </div>
        </div>

            <div class="ui item mt-6 ml-6">
                <button class="ui button" type="submit" >เรียกดูข้อมูล</button>
            </div>
</div>
</form>

<table class="ui basic table">
        <thead>
          <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>วัน/เวลา</th>
            <th>จำนวนที่นั่ง</th>
            <th>ประเภท</th>
            <th>ราคารวม</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reservations as $reservation)
          <tr>
            <td>
             @if($reservation->member_id == null)
                {{$reservation->name}}
             @else
                {{$reservation->member->name}}
             @endif
            </td>

            <td>
             @if($reservation->member_id == null)
                {{$reservation->lastname}}
             @else
                {{$reservation->member->lastname}}
             @endif
            </td>
            <td>
             @if($reservation->member_id == null)
                {{$reservation->tel}}
             @else
                {{$reservation->member->tel}}
             @endif
            </td>
            <td>
                {{$reservation->date_time}}
            </td> 
            <td>
                {{$reservation->seat}}  
            </td>  
            <td>
                <a class="ui green label">{{$reservation->type}}</a>
            </td>
            <td>
                {{$reservation->total_price}} .-
            </td>      
            <td>
                {{--  <a href="/reservation/edit/{{$reservation->id}}">
                    <button class="ui compact icon button">
                        <i class="write icon"></i>
                    </button>
                </a>  --}}
                <a href="/reservation/delete/{{$reservation->id}}">
                    <button class="ui compact icon button">
                        <i class="trash icon"></i>
                    </button>
                </a>
                <a href="/reservation/{{$reservation->id}}">
                    <button class="ui compact icon button">
                        <i class="eye icon"></i>
                    </button>
                </a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
@endsection