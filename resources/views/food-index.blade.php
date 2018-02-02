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
            <th>ประเภท</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ไข่เจียว</td>           
            <td>ทอด</td>
          </tr>
          <tr>
            <td>ปลานึ่ง</td>
            <td>นึ่ง</td>
          </tr>
          <tr>
            <td>ผัดผัก</td>
            <td>ผัด</td>
          </tr>
        </tbody>
      </table>
@endsection