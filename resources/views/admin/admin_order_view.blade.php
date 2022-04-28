@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')
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

</div>

<div class="col-md-4">
  <P><strong>ใบสั่งซื้อสินค้า</strong></P>
  <table border=1>
    <tr bgcolor=#E8E8E8>
      <td><center><b>รหัส</b></center></td>
      <td><center><b>ชื่อ นามสกุล</b></center></td>
      <td><center><b>เบอร์โทรศัพท์</b></center></td>
      <td><center><b>ราคารวม</b></center></td>
            <td><center><b>แสดง</b></center></td>
      <td><center><b>ลบ</b></center></td>
    </tr>
     <?php

     foreach ($result as $row) {
         $id_order=$row->id_order;
         $username=$row->username;
         $tel=$row->tel;
         $total=$row->total;

         $link1=url('admin/order/view/'.$id_order);
         $link2=url('admin/order/delete/'.$id_order);
        echo "<tr>
          <td><center>$id_order</center></td>
          <td>$username</td>
          <td>$tel</td>
          <td>$total</td>
                <td><a href='$link1' target='_blank'>แสดง</a></td>
          <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
        </tr>";
    }
    ?>
  </table>
</div>


        @endsection

        @section('footer')

        @endsection
