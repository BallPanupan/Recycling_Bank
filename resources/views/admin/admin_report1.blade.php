@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')


@endsection

@section('content')



<div class="row">


<div class="col-md-4">

  <button type="button" class="btn btn-default btn-lg" onclick="window.location.href='/admin/home' ">
    <span class="glyphicon glyphicon-home" aria-hidden="true"  ></span> Home
  </button>

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
  <p><h1>ออกรายงาน</h1></p>
  <div class="btn-group-vertical" role="group" aria-label="...">
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report1'"><b><h4> สรุปยอดวันนี้ </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report2'"><b><h4> ประเภทขยะมากที่สุด </h4></b></button>
    <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report3'"><b><h4> พื้นที่ขยะมากที่สุด </h4></b></button>
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

<center>

</p>

  </center>
</div>

<div class="col-md-4">

  <P><strong>ใบสั่งซื้อสินค้า</strong></P>
  <table border=1>
    <tr bgcolor=#E8E8E8>
      <td><center><b>รหัส</b></center></td>
      <td><center><b>username</b></center></td>
      <td><center><b>เบอร์โทรศัพท์</b></center></td>
      <td><center><b>ราคารวม</b></center></td>
            <td><center><b>แสดง</b></center></td>
      <td><center><b>ลบ</b></center></td>
    </tr>


     <?php

        $SumX="0";

     foreach ($result as $row) {
         $id_order=$row->id_order;
         $username=$row->username;
         $tel=$row->tel;
         $total=$row->total;


         $SumX=$SumX+$total;

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

    <p><h3 align = 'right' >รวม <?= $SumX ?> </h3></p>

</div>


</div>
      @endsection

      @section('footer')

      @endsection
