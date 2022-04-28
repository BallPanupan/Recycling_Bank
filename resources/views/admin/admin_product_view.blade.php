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

          <P><center><strong>สินค้าทั้งหมด</strong></center></P>
        <p><center><h1><span class="label label-primary"><?= date('d-m-Y ') ?></span></h1></center></p><br/>

           <table border="1" style="width:100%">
             <tr>
               <th colspan="5"><center>ประเภทเศษเหล็ก</center></th>
             </tr>
              <tr>
               <td><center>สถานะ</center></td>
               <td><center>รายชื่อ</center></td>
               <td><center>ราคา</center></td>
               <td><center>แก้ไข</center></td>
               <td><center>ลบ</center></td>
             </tr>
             <tr>

             </tr>

                  <?php
                          foreach ($result2 as $row) {
                              $id_prd = $row->id_prd;
                              $Status = $row->Status;
                              $name_prd = $row->name_prd;
                              $price_prd = $row->price_prd;
                              $ref_id_type = $row->ref_id_type;
                              $Date = $row->Date;

                              $link1=url('admin/product/update/'.$id_prd);
                              $link2=url('admin/product/delete/'.$id_prd);

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
                                  <td><a href='$link1'>แก้ไข</a></td>
                                  <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
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
           <td><center>แก้ไข</center></td>
           <td><center>ลบ</center></td>
        </tr>
        <tr>

        </tr>

        <?php

                foreach ($result3 as $row) {
                    $id_prd = $row->id_prd;
                    $Status = $row->Status;
                    $name_prd = $row->name_prd;
                    $price_prd = $row->price_prd;
                    $ref_id_type = $row->ref_id_type;
                    $Date = $row->Date;

                    $link1=url('admin/product/update/'.$id_prd);
                    $link2=url('admin/product/delete/'.$id_prd);

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
                        <td><a href='$link1'>แก้ไข</a></td>
                        <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
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
           <td><center>แก้ไข</center></td>
           <td><center>ลบ</center></td>
        </tr>
        <tr>

        </tr>

        <?php

                foreach ($result4 as $row) {
                    $id_prd = $row->id_prd;
                    $Status = $row->Status;
                    $name_prd = $row->name_prd;
                    $price_prd = $row->price_prd;
                    $ref_id_type = $row->ref_id_type;
                    $Date = $row->Date;

                    $link1=url('admin/product/update/'.$id_prd);
                    $link2=url('admin/product/delete/'.$id_prd);

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
                        <td><a href='$link1'>แก้ไข</a></td>
                        <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
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
           <td><center>แก้ไข</center></td>
           <td><center>ลบ</center></td>
        </tr>
        <tr>

        </tr>

        <?php

                foreach ($result5 as $row) {
                    $id_prd = $row->id_prd;
                    $Status = $row->Status;
                    $name_prd = $row->name_prd;
                    $price_prd = $row->price_prd;
                    $ref_id_type = $row->ref_id_type;
                    $Date = $row->Date;

                    $link1=url('admin/product/update/'.$id_prd);
                    $link2=url('admin/product/delete/'.$id_prd);

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
                        <td><a href='$link1'>แก้ไข</a></td>
                        <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
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
               <td><center>แก้ไข</center></td>
               <td><center>ลบ</center></td>
            </tr>
            <tr>

            </tr>

            <?php

                    foreach ($result6 as $row) {
                        $id_prd = $row->id_prd;
                        $Status = $row->Status;
                        $name_prd = $row->name_prd;
                        $price_prd = $row->price_prd;
                        $ref_id_type = $row->ref_id_type;
                        $Date = $row->Date;

                        $link1=url('admin/product/update/'.$id_prd);
                        $link2=url('admin/product/delete/'.$id_prd);

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
                            <td><a href='$link1'>แก้ไข</a></td>
                            <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
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
                        <td><center>แก้ไข</center></td>
                        <td><center>ลบ</center></td>
                     </tr>
                     <tr>

                     </tr>

                     <?php

                             foreach ($result7 as $row) {
                                 $id_prd = $row->id_prd;
                                 $Status = $row->Status;
                                 $name_prd = $row->name_prd;
                                 $price_prd = $row->price_prd;
                                 $ref_id_type = $row->ref_id_type;
                                 $Date = $row->Date;

                                 $link1=url('admin/product/update/'.$id_prd);
                                 $link2=url('admin/product/delete/'.$id_prd);

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
                                     <td><a href='$link1'>แก้ไข</a></td>
                                     <td><a href='$link2'onclick=\"return confirm('ต้องการลบสินค้านี้หรือไม่')\">ลบ</a></td>
                                   </tr>";
                             }
                     ?>
                       </table>
              <br/>

</div>


        @endsection

        @section('footer')

        @endsection
