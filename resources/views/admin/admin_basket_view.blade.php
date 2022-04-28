@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


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

<div class="col-md-4">

  <table border="0">
    <tr>

      <td valign="top">
          <?php
            if (count($items)==0) {
              echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
            } else {
          ?>
            <form method="post" action="<?=url('admin/basket_cal')?>">
              <table border="1">
                       <tr bgcolor="#E8E8E8">
                         <td width="6%"><center><b>รหัสสินค้า</b></center></td>
                         <td width="60%"><center><b>ชื่อสินค้า</b></center></td>
                         <td width="12%"><center><b>จำนวน</b></center></td>
                         <td width="10%"><center><b>ราคา</b></center></td>
                         <td width="12%"><center><b>ทั้งหมด</b></center></td>
                     </tr>
                <?php
                          $total=0;
                  foreach ($items as $i) {
                              $id=$i['id'];
                              $name=$i['name'];
                              $price=$i['price'];
                              $qty=$i['qty'];

                              $unit=$price * $qty;
                              $total=$total+$unit;
                    echo "
                        <tr>
                  <td><center>
                    <input type='checkbox' name='prd_del[]' value='$id'>
                  </center></td>
                  <td>$name</td>
                  <td><center>
                    <input type='text' name='prd_qty[]' value='$qty' size='4' >
                  </center></td>
                  <td><center>$price</center></td>
                  <td><center>$unit</center></td>

                   </tr>";
                  }
                ?>
                  </table>
                  <p align="right">
              <?php echo "จำนวนเงินทั้งหมด $total บาท"; ?><br><br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="submit" name="calculate" value="คำนวณใหม่">
                    <input type="submit" name="complete" value="ส่ง">
                </p>
              </form>
          <?php
      }
          ?>
    </td>
  </tr>
</table>

</div>


</div>
      @endsection

      @section('footer')

      @endsection
