@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">การสำรองที่นั่งทั้งหมด</h2>
        <a href="/reservation/create">
                <button class="ui button" type="submit" >สำรองที่นั่ง</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>ไอดี</th>
            <!-- <th>ชื่อ</th>  -->
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reservations as $reservation)
          <tr>
            <td>{{$reservation->id}}</td>   
            <td>
                <a href="/reservation/edit/{{$reservation->id}}">
                    <button class="ui compact icon button">
                        <i class="write icon"></i>
                    </button>
                </a>
                <a href="/reservation/delete/{{$reservation->id}}">
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