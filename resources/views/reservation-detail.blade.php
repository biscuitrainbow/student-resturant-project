@extends('layout')
@section('content')
<div class="flex justify-between">
    <h2 class="my-8">รายละเอียด</h2>
</div>
<table class="ui basic table">
      <thead>
      <tr>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทรศัพท์</th>
        <th>วัน/เวลา</th>
        <th>จำนวนที่นั่ง</th>
        <th>โต๊ะ</th>
        <th>ประเภท</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
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
          @foreach($reservation->tables as $table)
          <a class="ui basic label">{{$table->name}}</a>
          @endforeach
        </td>    
        <td>
        <a class="ui green label">{{$reservation->type}}</a>
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
            
        </td>
      </tr>
    

    </tbody>
  </table>
    <div>
      <div class="flex justify-between">
          <h2 class="my-8">รายการอาหาร</h2>
      </div>


    
    <table class="ui basic table">
            <thead>
              <tr>
                <th>ชื่อ</th>
                <th>จำนวน</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
                @foreach($reservation->menus as $menu)
              <tr>
                <td>{{$menu->name}}</td>
                <td>{{$menu->pivot->quantity}}</td>
                <td>{{$menu->price}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>              
    </div>
@endsection