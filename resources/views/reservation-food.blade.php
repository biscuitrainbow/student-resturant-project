@extends('layout')
@section('content')
  <reservation-food inline-template :menus="{{$menus}}">
    <div>
      <div class="flex justify-between">
          <h2 class="my-8">รายการอาหาร</h2>
          <form action="/reservation/receipt" method="post">
               {{csrf_field()}}
              <input name="menus[]" hidden v-bind:value="JSON.stringify(menu)" v-for="menu in selectedFood">
              <input name="detail" hidden value="{{json_encode($detail)}}">
              <div class="item">
                  <button class="positive  basic ui button">ยืนยัน</button>
              </div>
          </form>
      </div>
    
    <table class="ui basic table">
            <thead>
              <tr>
                <th>ชื่อ</th>
                <th>จำนวน</th>
                <th>ราคา</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="menu in selectedFood">
                <td >@{{menu.name}}</td>
                <td>@{{menu.qty}}</td>
                <td>@{{menu.price}}</td>
              </tr>
            </tbody>
          </table>
    
          <h3 class="my-8">อาหารทั้งหมด</h3>
          <div class="ui grid mt-8">
                <div v-for="menu in menus" class="four wide column">
                        <div class="ui card">
                                <div class="content">
                                  <div class="header">  
                                      @{{ menu.name }}
                                    <a class="item">
                                        <div class="ui  horizontal label">@{{ menu.id }}</div>          
                                    </a></div>
                                  <div class="meta">
                                    <img class="my-4" src="http://www.travelguruthailand.net/wp-content/uploads/2014/12/%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%87%E0%B8%AB%E0%B8%87%E0%B8%A9%E0%B9%8C22.jpg" alt="">
                                    <button @click="add(menu)" class="positive ui button w-full">@{{ menu.price }}</button>
    
                                  </div>
                                  <p></p>
                                </div>
                         </div>
                </div>
                
    
              </div>
    </div>
  </reservation-food>
@endsection