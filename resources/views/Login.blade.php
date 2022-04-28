
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')

<div class="row">


<div class="col-md-4">

</div>

<div class="col-md-4">
  <form action="login2" method="post">
      <center><h1><B>RecyCling Bank</B></h1></center>
      <center><h1><B>ธนาคารขยะ</B></h1></center>
      <caption><h3><b>เข้าสู่ระบบ</b></h3></caption>

        <div class="form-group" style="width:100%" >
          <input type="text" name ="username" class="form-control"id="exampleInputEmail1"placeholder="username" >
        </p>
          <input type="password" name="password" class="form-control"id="exampleInputPassword1"placeholder="Password">
        </p>
          <button type="submit" class="btn btn-primary" style="width:100%"><h5><b> เข้าสู่ระบบ </b></h5></button>
        </div>

    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
  </form>
        <button type="submit" class="btn btn-success" style="width:100%" onclick="window.location.href='register'" ><h5><b> สมัครสมาชิก </b></h5></button>

</div>



<div class="col-md-4">

</div>

</div>


@endsection

@section('footer')
<center>
  <img src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fwww.zp10571.tld.111.223.52.29.no-domain.name%2F&chs=180x180&choe=UTF-8&chld=L|2' rel='nofollow' alt='qr code'><a href='http://www.qrcode-generator.de' border='0' style='cursor:default'  rel='nofollow'></a>
</center>
@endsection
