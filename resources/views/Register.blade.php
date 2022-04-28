
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')
<script type="text/javascript">
function fncSubmit()
{
    if(document.getElementById('username').value  == ""  ){
        alert('โปรดใส่ username');
        return false;
    }

    if(document.getElementById('password').value  == ""  ){
        alert('โปรดใส่ password');
        return false;
    }

    if(document.getElementById('Repassword').value  == ""  ){
        alert('โปรดใส่ Repassword');
        return false;
    }

    if(document.getElementById('fname').value  == ""  ){
        alert('โปรดใส่ ชื่อ');
        return false;
    }

    if(document.getElementById('lname').value  == ""  ){
        alert('โปรดใส่ สกุล');
        return false;
    }

    if(document.getElementById('email').value  == ""  ){
        alert('โปรดใส่ E-mail');
        return false;
    }

    if(document.getElementById('phone').value  == ""  ){
        alert('โปรดใส่ หมายเลขโทรศัพท์');
        return false;
    }

    if(document.getElementById('sex').value  == ""  ){
        alert('โปรดเลือก เพศ');
        return false;
    }

    if(document.getElementById('birthday').value  == ""  ){
        alert('โปรดใส่ วันเกิด');
        return false;
    }

    if(document.getElementById('Repassword').value != document.getElementById('password').value  ){
        alert('รหัสผ่านไม่ตรงกัน');
        return false;
    }

}
</script>

</script>
<center>
<div class="row">

<div class="col-md-2">


</div>

<div class="col-md-7">



    <h1>สมัครใช้งาน<h1>
    <h3>สมัครฟรี ไม่เสียค่าใช้จ่าย<h3>
    <form name="form1" method="post" action="register2" OnSubmit="return fncSubmit();">

      <div class="input-group input-group-lg" style="width:100%">
        <input type="text" name ="username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" id="username">

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="password" name ="password" class="form-control" placeholder="รหัสผ่าน" aria-describedby="sizing-addon1" id="password">

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="password" name ="repassword" class="form-control" placeholder="รหัสผ่านอีกครั้ง" aria-describedby="sizing-addon1" id="Repassword">

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="text" name ="fname" class="form-control" placeholder="ชื่อ" aria-describedby="sizing-addon1" id="fname">
        <span class="input-group-addon" id="sizing-addon2">สกุล</span>
        <input type="text" name ="lname" class="form-control" placeholder="สกุล" aria-describedby="sizing-addon1" id="lname">
      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="email" name ="email" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon1" id="email">

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
        <input type="tel" name ="phone" class="form-control" placeholder="หมายเลขโทรศัพท์" aria-describedby="sizing-addon1" id="phone"  maxlength="10">

      </div>
<p/>
      <div class="input-group input-group-lg" style="width:100%">
            <select name ="sex" class="form-control" aria-describedby="sizing-addon1" id="sex">
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>

      </div>
<p/>
          <div class="input-group input-group-lg" style="width:100%">
            <input type="date" name ="birthday" class="form-control" placeholder="birthday" aria-describedby="sizing-addon1" id="birthday">

          </div>
<p/>
<p/>
<button type="submit" class="btn btn-primary" style="width:100%" ><h4>สมัครใช้งาน</h4></button>

     <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
  </form>



</div>

<div class="col-md-3">
  <form action="login2" method="post">

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

</center>
@endsection

@section('footer')

@endsection
