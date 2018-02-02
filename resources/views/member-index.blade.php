@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">รายชื่อสมาชิก</h2>
        <a href="/member/create">
                <button class="ui button" type="submit" >เพิ่มสมาชิก</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>รหัสสมาชิก</th>   
            <th>ชื่อ</th>       
            <th>นามสกุล</th>
            <th>ที่อยู่</th>
            <th>เบอร์โทรศัพท์</th>
          </tr>
        </thead>
        <tbody>
          @foreach($members as $member)
          <tr>
            <td>{{$member->code}}</td>   
            <td>{{$member->name}}</td>        
            <td>{{$member->lastname}}</td>  
            <td>{{$member->address}}</td>  
            <td>{{$member->tel}}</td>  
          </tr>
        @endforeach

        </tbody>
      </table>
@endsection