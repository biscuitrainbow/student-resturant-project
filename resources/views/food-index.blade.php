@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">เมนูอาหาร</h2>
        <a href="/food/create">
                <button class="ui button" type="submit" >เพิ่มเมนู</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>ชื่อเมนุ</th>   
            <th>ราคา</th>       
            <th>ประเภท</th>
          </tr>
        </thead>
        <tbody>
          @foreach($menus as $menu)
          <tr>
            <td>{{$menu->name}}</td>   
            <td>{{$menu->price}}</td>        
            <td>{{$menu->type->name}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
@endsection