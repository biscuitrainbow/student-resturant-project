@extends('layout')
@section('content')
<div class="flex justify-between h-2/5 my-8">
        <h2 class="">ประเภทโต๊ะ</h2>
        <a href="/tabletype/create">
                <button class="ui button" type="submit" >เพิ่มประเภทโต๊ะ</button>
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
          @foreach($table_types as $type)
          <tr>
            <td>{{$type->name}}</td>   
            <td>
                <a href="/tabletype/edit/{{$type->id}}">
                    <button class="ui compact icon button">
                        <i class="write icon"></i>
                    </button>
                </a>
                <a href="/tabletype/delete/{{$type->id}}">
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