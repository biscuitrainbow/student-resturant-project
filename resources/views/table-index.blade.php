@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">โต๊ะอาหาร</h2>
        <a href="/table/create">
                <button class="ui button" type="submit" >เพิ่มโต๊ะ</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>เลขโต๊ะ</th>
            <th>จำนวนทั่งนั่ง</th>
            <th>ประเภท</th>
          </tr>
        </thead>
        <tbody>
         @foreach($tables as $table)
         <tr>
            <td>{{$table->name}}</td>
            <td>{{$table->seat}}</td>
            <td>{{$table->type->name}}</td>
          </tr>
         @endforeach
        </tbody>
      </table>
@endsection