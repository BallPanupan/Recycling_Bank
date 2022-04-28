@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


<div class="col-md-3">

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
      <a href="../basket" class="list-group-item">สินค้าในตะกร้า</a>

</div>

</div>

<div class="col-md-5">

  <div class="col-md-12">
    <table width="100%"  border="0" cellspacing="4">
    <?php
      foreach($result as $row) {
      $id_prd=$row->id_prd;
      $name_prd=$row->name_prd;
      $detail_prd=$row->detail_prd;
      $price_prd=$row->price_prd;

          $link2=url("product/detail/$id_prd");
          $link3=url("admin/basket_insert/$id_prd");

          //$link3=url("basket/insert/$id_prd");

            echo "<tr>

                      <td width='80%' valign='top'><br>
                      <b>รหัสสินค้า :</b> $id_prd  <br>
                      <b>ชื่อสินค้า : </b>$name_prd <br>
                      <b>ราคา :</b> $price_prd บาท <br>
                      <a href='$link3'>หยิบใส่ตะกร้าสินค้า </a><br><br><br>
                      </td>
                      </tr>";
            }
    ?>
    </table>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทเศษเหล็ก</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result2 as $row) {
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $detail_prd=$row->detail_prd;
                       $price_prd=$row->price_prd;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทเศษกระดาษ</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result3 as $row) {
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $detail_prd=$row->detail_prd;
                       $price_prd=$row->price_prd;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทขวดแก้ว</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result4 as $row) {
                       $id_prd=$row->id_prd;
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $detail_prd=$row->detail_prd;
                       $price_prd=$row->price_prd;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทพลาสติก</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result5 as $row) {
                       $id_prd=$row->id_prd;
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $detail_prd=$row->detail_prd;
                       $price_prd=$row->price_prd;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทโลหะมีค่าสูง</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result6 as $row) {
                       $id_prd=$row->id_prd;
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>

    <table border="1" style="width:100%">
      <tr>
        <th colspan="5"><center>ประเภทอื่นๆ</center></th>
      </tr>
       <tr>
         <td><center>สถานะ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา</center></td>
         <td><center>เลือก</center></td>
         <td><center>No.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result7 as $row) {
                       $id_prd=$row->id_prd;
                       $id_prd=$row->id_prd;
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       $detail_prd=$row->detail_prd;
                       $price_prd=$row->price_prd;

                       $link2=url("product/detail/$id_prd");
                       //$link3=url("admin/basket_insert/$id_prd");

                       if ($Status=="เปิด") {
                         $Status_Color="success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="danger";
                       }else {
                         $Status_Color="default";
                       }

                       if ($Status=="เปิด") {
                         $addproduct="หยิบใส่ตะกร้าสินค้า";
                         $link3=url("admin/basket_insert/$id_prd");
                       }else{
                         $addproduct="";
                         $link3=url("/admin/home");
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                           <td><a href='$link3'>$addproduct </a></td>
                           <td>$id_prd</td>
                         </tr>";
                   }
           ?>
        </table>
    <br/>


  </div>
</div>

</div>
      @endsection

      @section('footer')

      @endsection
