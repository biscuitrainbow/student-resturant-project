@extends('layout') 
@section('content')
<reservation-food inline-template :menus="{{$menus}}" :member="{{$member}}" :accumulate="{{$accumulate}}">
  <div>

    <form class="mb-8" action="/reservation/receipt" method="post">
      <div class="flex justify-between">
        <h2 class="my-8">รายการอาหาร</h2>

        <div class="item">
          <button class="positive  basic ui button">ยืนยัน</button>
        </div>
      </div>
      {{csrf_field()}}
      <div class="field w-2/5">
        <label class="font-bold">โต๊ะ</label>
        <select name="table[]" multiple="" class="ui fluid dropdown">
            @foreach($tables as $table)
            <option value="{{$table->id}}">{{$table->name}}</option>
            @endforeach
       </select>
      </div>
      <input name="net_price" hidden v-bind:value="netPrice">
      <input name="total_price" hidden v-bind:value="totalPrice">
      <input name="menus[]" hidden v-bind:value="JSON.stringify(menu)" v-for="menu in selectedFood">
      <input name="detail" hidden value="{{json_encode($detail)}}">

    </form>

    <table class="ui basic table mt-8">
      <thead>
        <tr>
          <th>ชื่อ</th>
          <th>จำนวน</th>
          <th>ราคา(ส่วนลด)</th>
          <th>ลบ</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(menu,index) in selectedFood">
          <td>@{{menu.name}}</td>
          <td>
            <button class="ui icon mini basic button mr-4" @click="decrease(menu)">
                    <i class="minus icon"></i>
                  </button>
            <span class="px-4">@{{menu.qty}}</span>
            <button class="ui icon mini basic button ml-4" @click="increase(menu)">
                    <i class="plus icon"></i>
                  </button>
          </td>
          <td>@{{menu.price * menu.qty}} <span class="font-light text-grey">(@{{menu.discount * menu.qty}})</span></td>
          <td>
            <button class="ui icon mini basic button ml-4" @click="remove(index,menu)">
                  <i class="trash icon"></i>
                </button>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="bg-grey-lighter">
          <th>Total price</th>
          <th></th>
          <th></th>
          <th>@{{totalPrice}}</th>
        </tr>
        <tr class="bg-grey-lighter">
          <th>Net price</th>
          <th></th>
          <th></th>
          <th class="text-xl">@{{netPrice}}</th>
        </tr>
      </tfoot>
    </table>
    <div v-show="netPrice + accumulate >= 10000" class="ui positive message">
      <i class="close icon"></i>
      <div class="header">
        ลูกค้ามียอดรวมครบ 1000
      </div>
    </div>
    <h3 class="my-8">อาหารทั้งหมด</h3>
    <div class="ui input mb-8 w-1/3">
      <input type="text"  v-model="searchString" placeholder="Search...">
    </div>
    <div class="ui grid mt-8">
      <div v-for="menu in filteredFood" class="four wide column">
        <div class="ui card">
          <div class="content">
            <div class="header">
              @{{ menu.name }}
              <a class="item">
                <div class="ui  horizontal label">@{{ menu.id }}</div>
              </a>
            </div>
            <div class="meta">
              <img class="my-4" :src="menu.img" alt="">
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