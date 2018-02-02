@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8">
        <h2 class="my-8">เพิ่มโต๊ะอาหาร</h2>
     <div class="field w-2/5">
       <label>เลขโต๊ะ</label>
       <input type="text" name="number" placeholder="เลขโต๊ะ">
     </div>
     <div class="field w-2/5">
       <label>จำนวนที่นั่ง</label>
       <input type="number" name="number_of_seat" placeholder="จำนวนที่นั่ง">
     </div>
    
       <div class="inline fields ">
             <label for="fruit">ประเภทโต๊ะ:</label>
             <div class="field">
               <div class="ui radio checkbox">
                 <input type="radio" name="type" checked="" tabindex="0" class="hidden">
                 <label>ธรรมดา</label>
               </div>
             </div>
             <div class="field">
               <div class="ui radio checkbox">
                 <input type="radio" name="type" tabindex="0" class="hidden">
                 <label>ฟ้าฮ่าม</label>
               </div>
             </div>
             <div class="field">
                    <div class="ui radio checkbox">
                      <input type="radio" name="type" tabindex="0" class="hidden">
                      <label>กิมเล้ง</label>
                    </div>
                  </div>
                  <div class="field">
                        <div class="ui radio checkbox">
                          <input type="radio" name="type" tabindex="0" class="hidden">
                          <label>ฮวดไฉ้</label>
                        </div>
                      </div>
           </div>
           <button class="ui button w-2/5 mt-4" type="submit" >เพิ่ม</button>
 
   </form>
@endsection