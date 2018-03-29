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

    <form class="ui form flex flex-col items-center mt-8" action="/login" method="post">
      <img src="/img/logo.jpg" alt="logo" class="h-1/3 w-1/3 mt-8 mb-8"> {{csrf_field()}}
      <div class="field w-2/5">
        <label>บัญชีผู้ใช้งาน</label>
        <input type="text" name="username" placeholder="บัญชีผู้ใช้งาน">
      </div>
      <div class="field w-2/5">
        <label>รหัสผ่าน</label>
        <input type="password" name="password" placeholder="รหัสผ่าน">
      </div>
      <button class="ui button w-2/5" type="submit">เข้าสู่ระบบ</button>
    </form>

  </div>
  {{--
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
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