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
</div>

<div class="col-md-4">

  <form action="<?=url('admin/product/insert2')?>" method="post" enctype="multipart/form-data">
          <P><B>เพิ่มสินค้าใหม่</B></P>
          <table width="400" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="101">ชื่อสินค้า</td>
              <td><input type="text" name="name_prd" size="30">* </td>
            </tr>

            <tr>
              <td>สถานะ</td>
              <td>
                <select name="Status">
                  <option value='เปิด'>เปิด</option>
                  <option value='ปิด'>ปิด</option>
                </select> *
             </td>
          </tr>

            <tr>
              <td>ประเภทสินค้า</td>
              <td>
            	  <select name="ref_id_type">
            	  <?php
                    foreach ($result as $row) {
                        $id_type=$row->id_type;
                        $name_type=$row->name_type;

                        echo "<option value='$id_type'>$name_type</option>";
                    }
            	  ?>
                </select> *
             </td>
          </tr>
            <tr>
              <td>ราคา</td>
              <td><input type="text" name="price_prd" size="10"> บาท *</td>
            </tr>
            <tr>
            </tr>
            <!-- <tr>
              <td>รูปภาพ</td>
              <td><input  type="file" name="photo_prd"></td>
            </tr> -->
              <td>&nbsp;</td>
              <td>
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input name="submit" type="submit">
                <input name="RESET" type="reset" >
              </td>
            </tr>
        </table>
      </form>

<br/>
      วันที่ :<?= date('d-m-Y ') ?>

</div>

</div>
      @endsection

      @section('footer')

      @endsection
