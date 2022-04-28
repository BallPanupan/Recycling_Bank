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

  <table border="1" width="100%">
              <tr bgcolor=#E8E8E8>
                <td width="5%"><center><b>รหัส</b></center></td>
                <td  width="50%" ><center><b>ประเภท</b></center></td>
                <td ><center><b>ราคา</b></center></td>
                <td><center><b>หน่วย</b></center></td>
                <td><center><b>แก้ไข</b></center></td>
                <td><center><b>ลบ</b></center></td>
              </tr>

               <?php

              foreach ($result as $row) {
                  $id_type = $row->id_type;
                  $name_type = $row->name_type;
                  $price_type = $row->price_type;

                  $link1=url('admin/type/update/'.$id_type);
                  $link2=url('admin/type/delete/'.$id_type);



              echo "<tr>
                      <td><center>$id_type</center></td>
                      <td>$name_type</td>
                      <td ><center>$price_type</center></td>
                      <td><center>กก.</center></td>
                      <td><center><a href='$link1'>แก้ไข</center></a></td>
                      <td><center><a href='$link2'>ลบ</center></a></td>
                </tr>";
              }
              ?>
            </table>

</div>


        @endsection

        @section('footer')

        @endsection
