@extends('layout') 
@section('content')
<form class="ui form flex flex-col items-center mt-8" enctype="multipart/form-data" action="/food/edit/{{$food->id}}" method="post">
  {{csrf_field()}}

  <h2 class="my-8">เพิ่มเมนูอาหาร</h2>
  <div class="field w-2/5">
    <label>ชื่อเมนู</label>
    <input type="text" name="name" value="{{$food->name}}" placeholder="ชื่อเมนู">
  </div>
  <div class="field w-2/5">
    <label>ราคา</label>
    <input type="text" name="price" value="{{$food->price}}" placeholder="ราคา">
  </div>
  <div class="field w-2/5">
    <label>ประเภท</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="type">
      <i class="dropdown icon"></i>
      <div class="default text">Select Country</div>
      <div class="menu">
        @foreach($menu_types as $type)
        <div class="item" data-value="{{ $type->id }}" value="{{$type->id}}">{{ $type->name }}</div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="inline fields">
    <label for="fruit">ร่วมรายการส่วนลด:</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="promotion" value="0" tabindex="0" class="hidden" @if($food->promotion == 0) {{"checked"}}
        @endif>
        <label>ไม่ร่วมรายการ</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="promotion" value="1" tabindex="0" class="hidden" @if($food->promotion == 1) {{"checked"}}
        @endif>
        <label>ร่วมรายการ</label>
      </div>
    </div>
  </div>
  <div class="field w-2/5">
    <label>คำอธิบาย</label>
    <textarea  name="description" id="" cols="30" rows="2">{{$food->description}}</textarea>
  </div>
  {{--
  <div class="field w-2/5">
    <label>รูปภาพ</label>
    <input type="file" name="image" value="{{$food->img}}" placeholder="รูปภาพ">
  </div> --}}

  <button class="ui button w-2/5 mt-4" type="submit">บันทึก</button>

</form>
@endsection
 
@section('script')
<script>
  $('.ui.dropdown').dropdown('set selected', {{$food->type->id}});

</script>
@endsection