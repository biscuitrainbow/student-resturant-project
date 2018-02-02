@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">ประเภทเมนู</h2>
        <a href="/menutype/create">
                <button class="ui button" type="submit" >เพิ่มประเภทเมนู</button>
        </a>
</div>
<table class="ui basic table">
        <thead>
          <tr>
            <th>ชื่อ</th>       
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($menu_types as $type)
          <tr>
            <td>{{$type->name}}</td>   
            <td>
                <a href="/menutype/edit/{{$type->id}}">
                    <button class="ui compact icon button">
                        <i class="write icon"></i>
                    </button>
                </a>
                <a href="/menutype/delete/{{$type->id}}">
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