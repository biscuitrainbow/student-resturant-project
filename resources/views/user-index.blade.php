@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">รายชื่อสมาชิก</h2>
        <a href="/register">
                <button class="ui button" type="submit" >เพิ่มบัญชีผู้ใช้งาน</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>บัญชีผู้ใช้งาน</th>   
            <th>ชื่อ</th>       
            <th>นามสกุล</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->username}}</td>   
            <td>{{$user->name}}</td>        
            <td>{{$user->lastname}}</td>  
            <td>
                {{--  <a href="/user/edit/{{$user->id}}">
                    <button class="ui compact icon button">
                        <i class="write icon"></i>
                    </button>
                </a>  --}}
                <a href="/user/delete/{{$user->id}}">
                    <button class="ui compact icon button">
                        <i class="trash icon"></i>
                    </button>
                </a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
@endsection