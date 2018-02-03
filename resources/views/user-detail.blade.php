@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">กิจกรรมผู้ใช้งาน</h2>
       
</div>
<div class="card my-8">
        <div class="content">
          <div class="header"><h3>{{$user->name}}</h3></div>
          <div class="meta"><h3>{{$user->lastname}}</h3></div>
        </div>
      </div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>วัน/เวลา</th>
            <th>จำนวนที่นั่ง</th>
            <th>ประเภท</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($user->reservations as $reservation)
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