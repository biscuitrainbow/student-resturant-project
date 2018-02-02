@extends('layout')
@section('content')
<form class="ui form flex flex-col items-center mt-8">
        <h2 class="my-8">สำรองที่นั่ง</h2>
     <div class="field w-2/5">
       <label>ชื่อ</label>
       <input type="text" name="first-name" placeholder="ชื่อ">
     </div>
     <div class="field w-2/5">
       <label>นามสกุล</label>
       <input type="password" name="last-name" placeholder="นามสกุล">
     </div>
     <div class="field w-2/5">
         <label>เบอร์โทรศัพท์</label>
         <input type="text" name="first-name" placeholder="เบอร์โทรศัพท์">
       </div>
       <div class="field w-2/5">
         <label>จำนวนคน</label>
         <input type="text" name="first-name" placeholder="จำนวนคน">
       </div>
      <div class="field w-2/5">
        <label>โต๊ะ</label>
        <select name="skills" multiple="" class="ui fluid dropdown">
                <option value="">Skills</option>
              <option value="angular">Angular</option>
              <option value="css">CSS</option>
              <option value="design">Graphic Design</option>
              <option value="ember">Ember</option>
              <option value="html">HTML</option>
              <option value="ia">Information Architecture</option>
              <option value="javascript">Javascript</option>
              <option value="mech">Mechanical Engineering</option>
              <option value="meteor">Meteor</option>
              <option value="node">NodeJS</option>
              <option value="plumbing">Plumbing</option>
              <option value="python">Python</option>
              <option value="rails">Rails</option>
              <option value="react">React</option>
              <option value="repair">Kitchen Repair</option>
              <option value="ruby">Ruby</option>
              <option value="ui">UI Design</option>
              <option value="ux">User Experience</option>
              </select>
        </div>
       <div class="field w-2/5">
        <div class="ui calendar" id="example5">
                <label>วันเวลา</label>
                <div class="ui input left icon">
                  <i class="calendar icon"></i>
                  <input type="text" placeholder="Date">
                </div>
              </div>
      </div>
      
        <button class="ui button w-2/5 mt-4" type="submit" >ยืนยัน</button>
 
   </form>
@endsection