<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    @font-face {
			font-family: 'THSarabunNew';
			font-style: normal;
			font-weight: normal;
			src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
    }

    @font-face {
			font-family: 'THSarabunNew';
			font-style: normal;
			font-weight: bold;
			src: url("{{asset('fonts/THSarabunNew/THSarabunNew Bold.ttf')}}") format('truetype');
    }

    body,
		td,tr,th {
			padding: 0;
			font-family: "THSarabunNew";
    }
    
    h2{
      font-family: "THSarabunNew";
    }
</style>
<body>

<div class="w3-container">
  <h2>ข้อมูลการจอง</h2>
  <table class="w3-table w3-striped">
        <tr>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>เบอร์โทรศัพท์</td>
                <td>วัน/เวลา</td>
                <td>จำนวนที่นั่ง</td>
                <td>โต๊ะ</td>
                <td>ประเภท</td>
        </tr>

        @foreach($reservations as $reservation)
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
                            <a class="ui green label">{{$reservation->type}}</a>
                        </td>  
        </tr>
        @endforeach
       
      </table>

      <h2 style="margin-top:50px;">รายการอาหาร</h2>
  <table class="w3-table w3-striped">
    <tr>
      <td>ชื่อ</td>
      <td>จำนวน</td>
    </tr>
    @foreach($menus as $menu)
    <tr>
      <td>{{$menu->name}}</td>
      <td>{{$menu->qty}}</td>
    </tr>
    @endforeach
  </table>
</div>

</body>
</html>
