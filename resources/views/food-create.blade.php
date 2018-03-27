@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" enctype="multipart/form-data" action="/food/create" method="post">
  {{csrf_field()}}
    
  <h2 class="my-8">เพิ่มเมนูอาหาร</h2>
     <div class="field w-2/5">
       <label>ชื่อเมนู</label>
       <input type="text" name="name" placeholder="ชื่อเมนู">
     </div>
     <div class="field w-2/5">
      <label>ราคา</label>
      <input type="text" name="price" placeholder="ราคา">
    </div>
     <div class="field w-2/5">
       <label>ประเภท</label>
       <div class="ui fluid search selection dropdown">
            <input type="hidden" name="type">
            <i class="dropdown icon"></i>
            <div class="default text">ประเภทอาหาร</div>
            <div class="menu">
            @foreach($menu_types as $type)
            <div class="item" data-value="{{ $type->id }}" value="{{$type->id}}">{{ $type->name }}</div>
            @endforeach
        </div>
      </div>
     </div>
     <div class="field w-2/5">
        <label>คำอธิบาย</label>
        <textarea name="description" id="" cols="30" rows="2"></textarea>
     </div>
     <div class="field w-2/5">
        <label>รูปภาพ</label>
        <input type="file" name="image" placeholder="รูปภาพ">
      </div>
    
        <button class="ui button w-2/5 mt-4" type="submit" >เพิ่ม</button>
 
   </form>
@endsection