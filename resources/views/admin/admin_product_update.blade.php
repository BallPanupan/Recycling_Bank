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

        <?php
            foreach ($result as $row) {
                $id_prd=$row->id_prd;
                $name_prd=$row->name_prd;
                $detail_prd=$row->detail_prd;
                $price_prd=$row->price_prd;
                $photo_prd=$row->photo_prd;
                $ref_id_type=$row->ref_id_type;
            }
        ?>

        <form action="<?=url('admin/product/update2')?>" method="post"
            enctype="multipart/form-data">
          <P><B>แก้ไขสินค้า</B></P>
          <table width="400" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="101">ชื่อสินค้า</td>
              <td><input type="text" name="name_prd" size="35"
                   value="<?=$name_prd?>">* </td>
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
                    foreach ($result2 as $row2) {
                        $id_type=$row2->id_type;
                        $name_type=$row2->name_type;

                        if($ref_id_type==$id_type) {
                            echo "<option value='$id_type' selected>$name_type</option>";
                        } else {
                            echo "<option value='$id_type'>$name_type</option>";
                        }
                    }
            	  ?>
                </select> *
             </td>
          </tr>
            <tr>
              <td>ราคา</td>
              <td><input type="text" name="price_prd" size="10" value="<?=$price_prd?>"> บาท *</td>
            </tr>
            <!-- <tr>
              <td>รูปภาพ</td>
              <td>
                  <?php
                    $url=url('uploads/'.$photo_prd);;
                    echo "<a href='$url' target='_blank'> คลิก </a><br/>";
                  ?>
                  <input  type="file" name="photo_prd">
              </td>
            </tr> -->
              <td>&nbsp;</td>
              <td>
                <input type="hidden" name="id_prd" value="<?=$id_prd?>">
                <input type="hidden" name="photo_prd2" value="<?=$photo_prd?>">
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input name="submit" type="submit">
                <input name="RESET" type="reset" >
              </td>
            </tr>
        </table>
      </form>



</div>


        @endsection

        @section('footer')

        @endsection
