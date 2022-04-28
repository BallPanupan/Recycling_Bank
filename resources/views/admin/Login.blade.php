@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


<div class="col-md-4">

</div>


<div class="col-md-4">
  <h2><center> :: ผู้ดูแลระบบ :: </center></h2>
  
  <font color='red'><?=$error?></font>

  <form method="POST" action="<?=url('admin/login')?>">
        <caption><h3><b>เข้าสู่ระบบ</b></h3></caption>

          <div class="form-group" style="width:100%" >
            <input type="text" name ="user" class="form-control"id="exampleInputEmail1"placeholder="username" required>
          </p>
          <input type="password" name="pass" class="form-control"id="exampleInputPassword1"placeholder="Password">
        </p>
        </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <button type="submit" class="btn btn-primary" style="width:100%"><h5><b> เข้าสู่ระบบ </b></h5></button>
  </form>

</div>

<div class="col-md-4">

</div>


</div>
      @endsection

      @section('footer')

      @endsection
