@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" action="/tabletype/create" method="post">
  {{csrf_field()}}
       <h2 class="my-8">เพิ่มประเภทโต๊ะ</h2>
    <div class="field w-2/5">
      <label>ประเภท</label>
      <input type="text" name="name" placeholder="ประเภท">
    </div>
  
    <button class="ui button w-2/5 mt-4" type="submit" >เพิ่ม</button>

  </form>

@endsection