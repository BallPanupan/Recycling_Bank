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


<div class="col-md-2">
      <div class="list-group">
      <a href="#" class="list-group-item active">
        <center>เลือกรายการ</center>
      </a>
          <a href="addbill/type1" class="list-group-item">เพิ่มบิล</a>
          <a href="basket" class="list-group-item">สินค้าในตะกร้า</a>

    </div>
</div>

<div class="col-md-7">

    <?php
      if (count($items)==0) {
          echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
      } else {
      ?>
      </p>
      <form  method="post" action="<?=url('admin/order/insert')?>">
       <p><h3>เพิ่มบิลสั่งซื้อสินค้า</h3></p>
      <table width="400" border="0" cellspcing="1" cellpadding="0">
         <tr>
           <td width="100">สมาชิก : </td>
           <td><input type="text" name="username" >* </td>
         </tr>

         <tr>
           <td width="150">หมายเลขโทรศัพท์ : </td>
           <td><input type="text" name="tel" >* </td>
         </tr>

         <tr>
           <td width="100">ผู้ทำรายการ : </td>
           <td><input type="hidden" name="operator" value="<?=$username?>" ><?=$username?> </td>
         </tr>

         <tr>
           <td width="100">ตำบล : </td>
           <td>
             <select name="district2">
              <option value="ตลาดใหญ่">ตลาดใหญ่</option>
              <option value="ตลาดเหนือ">ตลาดเหนือ</option>
              <option value="เกาะแก้ว">เกาะแก้ว</option>
              <option value="รัษฎา">รัษฎา</option>
              <option value="วิชิต">วิชิต</option>
              <option value="ฉลอง">ฉลอง</option>
              <option value="ราไวย์">ราไวย์</option>
              <option value="กะรน">กะรน</option>
              <option value="null1">----------</option>
              <option value="กะทู้">กะทู้</option>
              <option value="ป่าตอง">ป่าตอง</option>
              <option value="กมลา">กมลา</option>
              <option value="null2">----------</option>
              <option value="เทพกระษัตรี">เทพกระษัตรี</option>
              <option value="ศรีสุนทร">ศรีสุนทร</option>
              <option value="เชิงทะเล">เชิงทะเล</option>
              <option value="ป่าคลอก">ป่าคลอก</option>
              <option value="ไม้ขาว">ไม้ขาว</option>
              <option value="สาคู">สาคู</option>
              <option value="null3">----------</option>
            </select>
          </td>
         </tr>

      </table><br>
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
              echo "<tr>
                      <td><center>$id</center></td>
                      <td>&nbsp;$name</td>
                      <td><center>$qty</center></td>
                      <td><center>$price</center></td>
                      <td><center>$unit</center></td>
                   </tr>";



          } // end foreach
          ?>
       </table><br>

      <?php echo "จำนวนทั้งหมด $total บาท"; ?>
           <br><br>
           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
           <input  type="hidden" name="total" value="<?=$total?>">
           <input type="submit"  value="ยืนยันการส่งข้อมูล">
           <input type="reset"  value="เคลียร์">
       </p>
      </form>
      <?php
      }
      ?>

</div>


</div>
      @endsection

      @section('footer')

      @endsection
