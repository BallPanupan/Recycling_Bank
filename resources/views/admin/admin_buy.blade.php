@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


<div class="col-md-4">

</div>


<div class="col-md-4">
  <?php
        $link1=url('admin/buy');
        $link2=url('admin/product/insert');
        $link3=url('admin/product');
        $link4=url('admin/type/insert');
        $link5=url('admin/type');
        $link6=url('admin/order');
        $link7=url('admin/logout');

  ?>

<center>
  <div class="btn-group-vertical" role="group" aria-label="...">
    <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link1?>'"><b><h4> เพิ่มบิล(รับซื้อ) </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product/insert'"><b><h4> เพิ่มสินค้า(ขยะ) </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product'"><b><h4> รายการสินค้า และแก้ไข(ขยะ) </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/order'" ><b><h4> รายการรับซื้อทั้งหมด </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/product'" ><b><h4> ปรับเปลี่ยนสถานะ เปิด/ปิด </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report'" ><b><h4> ออกรายงาน </h4></b></button>
    <button type="submit" class="btn btn-danger " onclick="window.location.href='/logout'" ><b><h4> ออกจากระบบ </h4></b></button>
  </div>
</p>
  </center>

<br/><br/><br/>

  <?php
        $link1=url('admin/buy');
        $link2=url('admin/product/insert');
        $link3=url('admin/product');
        $link4=url('admin/type/insert');
        $link5=url('admin/type');
        $link6=url('admin/order');
        $link7=url('admin/logout');

  ?>
</div>

<div class="col-md-4">

  <center>
  <nav class="navbar navbar-default">

        <form name="form1" method="post" action="searchx2" class="navbar-form navbar-center">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="searchk">
            </div>

              <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
              <button type="submit" class="btn btn-default" >Submit</button>
        </form>

    </nav>
  </center>

      <div class="list-group">
      <a href="#" class="list-group-item active">
        <center>เลือกรายการ</center>
      </a>
          <a href="addbill/type1" class="list-group-item">เพิ่มบิล</a>
          <a href="basket" class="list-group-item">สินค้าในตะกร้า</a>

    </div>

</div>


</div>
      @endsection

      @section('footer')

      @endsection
