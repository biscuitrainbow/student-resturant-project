<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/semantic/semantic.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css"
    rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <title>Document</title>
  <style>
    body,
    button,
    h4,
    h3,
    h2 {
      font-family: 'Kanit', sans-serif;
    }
    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div id="app" class="ui container">
    <div class="ui secondary  menu">
      <a href="/reservation/create" class="active item">
                  สำรองที่นั่ง
                </a>
      <a href="/reservation/" class=" item">
                  ประวัติสำรองที่นั่ง
                </a>
      <a href="/table" class="item">
                  โต๊ะอาหาร
                </a>
      <a href="/tabletype" class="item">
                  ประเภทโต๊ะ
                </a>
      <a href="/food" class="item">
                  เมนูอาหาร
                </a>
      <a href="/menutype" class="item">
                  ประเภทเมนูอาหาร
                </a>
      <a href="/member" class="item">
                  สมาชิก
                </a>
      <a href="/user" class="item">
                  ผู้ใช้งาน
                </a>
      <div class="right menu">
        {{--
        <div class="item">
          <div class="ui icon input">
            <input type="text" placeholder="Search...">
            <i class="search link icon"></i>
          </div>
        </div> --}}
        <a href="/logout" class="ui item">
                    Logout
                  </a>
      </div>
    </div>
    
@section('content') @show
  </div>
  {{--
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
  </script>
  <script src="/semantic/semantic.js"></script> --}}
  <script src="/js/app.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>
  <script>
    $('.ui.radio.checkbox').checkbox();
        $('.ui.dropdown').dropdown();
        $('#example5').calendar();
  </script>
  
@section('script') @show
</body>
</html>