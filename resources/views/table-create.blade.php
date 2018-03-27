@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8" action="/table/create" method="post">
  {{csrf_field()}}
     
  <h2 class="my-8">เพิ่มโต๊ะอาหาร</h2>
     <div class="field w-2/5">
       <label>เลขโต๊ะ</label>
       <input type="text" name="name" placeholder="เลขโต๊ะ">
     </div>
     <div class="field w-2/5">
       <label>จำนวนที่นั่ง</label>
       <input type="number" name="number_of_seat" placeholder="จำนวนที่นั่ง">
     </div>
    
       <div class="inline fields ">
             <label for="fruit">ประเภทโต๊ะ:</label>
             @foreach($types as $type)
             <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="type"  value="{{$type->id}}" tabindex="0" class="hidden">
                  <label>{{$type->name}}</label>
                </div>
              </div>
             @endforeach
      </div>
           <button class="ui button w-2/5 mt-4" type="submit" >เพิ่ม</button>
 
   </form>
@endsection