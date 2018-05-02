@extends('layout')
@section('content')
<div class="flex justify-between">
    <h2 class="my-8">รายละเอียด</h2>
    <div class="ui item">
        <a href="/reservation/print/{{$reservation->id}}">
            <button class="ui compact icon button">
                <i class="print icon"></i>
                Print
            </button>
        </a>
    </div>
</div>
<form action="/reservation/update/{{$reservation->id}}" method="post" class="mb-8">
    {{csrf_field()}}
    <div class="flex items-center">
            <div class="field w-1/5 mr-8">
                    <label class="">สถานะ</label>
                    <div class="ui fluid search selection dropdown mt-2">
                        <input type="hidden" name="status">
                        <i class="dropdown icon"></i>
                        <div class="default text">สถานะ</div>

                        <div class="menu">
                        
                         <div class="item" data-value="Complete" value="Complete">Complete</div>
                         <div class="item" data-value="Confirmed" value="Confirmed">Confirmed</div>
                         <div class="item" data-value="Waiting" value="Waiting">Waiting</div>
                         <div class="item" data-value="Cancel" value="Cancel">Cancel</div>

                        </div>
                    </div>
            </div>
            <div class="ui item mt-6 ml-6">
                <button class="ui button" type="submit" >อัพเดตสถานะ</button>
            </div>
</div>
</form>
<table class="ui  green table">
      <thead>
      <tr>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เบอร์โทรศัพท์</th>
        <th>วัน/เวลา</th>
        <th>จำนวนที่นั่ง</th>
        <th>โต๊ะ</th>
        <th>สถานะ</th>
        <th>ประเภท</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>
         @if($reservation->member_id == null)
            {{$reservation->name}}
         @else
            {{$reservation->member->name}}
         @endif
        </td>

        <td>
         @if($reservation->member_id == null)
            {{$reservation->lastname}}
         @else
            {{$reservation->member->lastname}}
         @endif
        </td>
        <td>
         @if($reservation->member_id == null)
            {{$reservation->tel}}
         @else
            {{$reservation->member->tel}}
         @endif
        </td>
        <td>
            {{$reservation->date_time}}
        </td> 
        <td>
            {{$reservation->seat}}  
        </td>  
        <td>
          @foreach($reservation->tables as $table)
          <a class="ui basic label">{{$table->name}}</a>
          @endforeach
        </td>    
        
        <td>
            @if($reservation->status == 'Waiting')
                <a class="ui yellow label">{{$reservation->status}}</a>
            @endif

            @if($reservation->status == 'Cancel')
                <a class="ui red label">{{$reservation->status}}</a>
             @endif

            @if($reservation->status == 'Confirmed')
                <a class="ui white label">{{$reservation->status}}</a>
            @endif

            @if($reservation->status == 'Complete')
                <a class="ui green label">{{$reservation->status}}</a>
            @endif
            </td>

        <td>
            {{$reservation->type}}
        </td>
        <td>
            {{--  <a href="/reservation/edit/{{$reservation->id}}">
                <button class="ui compact icon button">
                    <i class="write icon"></i>
                </button>
            </a>  --}}
            <a href="/reservation/delete/{{$reservation->id}}">
                  <button class="ui compact icon button">
                      <i class="trash icon"></i>
                  </button>
            </a>
            
        </td>
      </tr>
    

    </tbody>
  </table>
    <div>
      <div class="flex justify-between">
          <h2 class="my-8">รายการอาหาร</h2>
      </div>


    
    <table class="ui basic table">
            <thead>
              <tr>
                <th>ชื่อ</th>
                <th>จำนวน</th>
                <th>ราคา (ส่วนลด)</th>
              </tr>
            </thead>
            <tbody>
                @foreach($reservation->menus as $menu)
              <tr>
                <td>{{$menu->name}}</td>
                <td>{{$menu->pivot->quantity}}</td>
                <td>{{$menu->price}} <span class="font-light text-grey">({{$menu->pivot->discount}})</span></td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
                <tr class="bg-grey-lighter">
                    <th>Total price</th>
                  <th></th>
                  <th>{{$reservation->total_price}}</th>
                </tr>
                <tr class="bg-grey-lighter">
                    <th>Net price</th>
                    <th></th>
                    <th class="text-xl">{{$reservation->net_price}}</th>
                  </tr>
            </tfoot>
          </table>              
    </div>
@endsection