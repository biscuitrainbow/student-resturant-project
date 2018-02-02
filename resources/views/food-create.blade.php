@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8">
        <h2 class="my-8">เพิ่มเมนูอาหาร</h2>
     <div class="field w-2/5">
       <label>ชื่อเมนู</label>
       <input type="text" name="name" placeholder="ชื่อเมนู">
     </div>
     <div class="field w-2/5">
       <label>ประเภท</label>
       <div class="ui fluid search selection dropdown">
            <input type="hidden" name="type">
            <i class="dropdown icon"></i>
            <div class="default text">Select Country</div>
            <div class="menu">
            <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
            <div class="item" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
            <div class="item" data-value="al"><i class="al flag"></i>Albania</div>
            <div class="item" data-value="dz"><i class="dz flag"></i>Algeria</div>
            <div class="item" data-value="as"><i class="as flag"></i>American Samoa</div>
            <div class="item" data-value="ad"><i class="ad flag"></i>Andorra</div>
        </div>
           </div>
     </div>
     <div class="field w-2/5">
        <label>รูปภาพ</label>
        <input type="file" name="image" placeholder="รูปภาพ">
      </div>
    
       
           <button class="ui button w-2/5 mt-4" type="submit" >เพิ่ม</button>
 
   </form>
@endsection