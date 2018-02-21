@extends('layout')
@section('content')
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