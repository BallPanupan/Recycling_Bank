
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home/" target='_blank'></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="/home/<?=$username?>"><?=$username?></a></li>
        <li class="active"><a href="/home/<?=$username?>">Home</a></li>
        <!-- <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

@section('content')

<div class="row">
<br/>

<div class="col-md-4">

</div>

<div class="col-md-4">
  <p><center><h1><span class="label label-primary"><?= date('d-m-Y ') ?></span></h1></center></p><br/>
     <table border="1" style="width:100%">
       <tr>
         <th colspan="3"><center>ประเภทเศษเหล็ก</center></th>
       </tr>
        <tr>
         <td><center>สถานะรับซื้อ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา/กก.</center></td>
       </tr>
       <tr>

       </tr>

            <?php

                    foreach ($result2 as $row) {
                        $Status = $row->Status;
                        $name_prd = $row->name_prd;
                        $price_prd = $row->price_prd;
                        $ref_id_type = $row->ref_id_type;
                        $Date = $row->Date;

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
                          </tr>";
                    }
            ?>
         </table>
<br/>

<table border="1" style="width:100%">
  <tr>
    <th colspan="3"><center>ประเภทเศษกระดาษ</center></th>
  </tr>
   <tr>
     <td><center>สถานะรับซื้อ</center></td>
     <td><center>รายชื่อ</center></td>
     <td><center>ราคา/กก.</center></td>
  </tr>
  <tr>

  </tr>

       <?php
               foreach ($result3 as $row) {
                   $Status = $row->Status;
                   $name_prd = $row->name_prd;
                   $price_prd = $row->price_prd;
                   $ref_id_type = $row->ref_id_type;

                   if ($Status=="เปิด") {
                     $Status_Color="Success";
                   }elseif ($Status=="ปิด") {
                     $Status_Color="Danger";
                   }else {
                     $Status_Color="Default";
                   }

               echo "<tr>
                       <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                       <td>$name_prd</td>
                       <td>$price_prd</td>
                     </tr>";
               }
       ?>
    </table>
<br/>

<table border="1" style="width:100%">
  <tr>
    <th colspan="3"><center>ประเภทขวดแก้ว</center></th>
  </tr>
   <tr>
     <td><center>สถานะรับซื้อ</center></td>
     <td><center>รายชื่อ</center></td>
     <td><center>ราคา/กก.</center></td>
  </tr>
  <tr>

  </tr>

       <?php
               foreach ($result4 as $row) {
                   $Status = $row->Status;
                   $name_prd = $row->name_prd;
                   $price_prd = $row->price_prd;
                   $ref_id_type = $row->ref_id_type;

                   if ($Status=="เปิด") {
                     $Status_Color="Success";
                   }elseif ($Status=="ปิด") {
                     $Status_Color="Danger";
                   }else {
                     $Status_Color="Default";
                   }

               echo "<tr>
                       <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                       <td>$name_prd</td>
                       <td>$price_prd</td>
                     </tr>";
               }
       ?>
    </table>

<br/>
<table border="1" style="width:100%">
  <tr>
    <th colspan="3"><center>ประเภทพลาสติก</center></th>
  </tr>
   <tr>
     <td><center>สถานะรับซื้อ</center></td>
     <td><center>รายชื่อ</center></td>
     <td><center>ราคา/กก.</center></td>
  </tr>
  <tr>

  </tr>

       <?php
               foreach ($result5 as $row) {
                   $Status = $row->Status;
                   $name_prd = $row->name_prd;
                   $price_prd = $row->price_prd;
                   $ref_id_type = $row->ref_id_type;

                   if ($Status=="เปิด") {
                     $Status_Color="Success";
                   }elseif ($Status=="ปิด") {
                     $Status_Color="Danger";
                   }else {
                     $Status_Color="Default";
                   }

               echo "<tr>
                       <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                       <td>$name_prd</td>
                       <td>$price_prd</td>
                     </tr>";
               }
       ?>
    </table>

  <br/>
    <table border="1" style="width:100%">
      <tr>
        <th colspan="3"><center>ประเภทโลหะมีค่าสูง</center></th>
      </tr>
       <tr>
         <td><center>สถานะรับซื้อ</center></td>
         <td><center>รายชื่อ</center></td>
         <td><center>ราคา/กก.</center></td>
      </tr>
      <tr>

      </tr>

           <?php
                   foreach ($result6 as $row) {
                       $Status = $row->Status;
                       $name_prd = $row->name_prd;
                       $price_prd = $row->price_prd;
                       $ref_id_type = $row->ref_id_type;

                       if ($Status=="เปิด") {
                         $Status_Color="Success";
                       }elseif ($Status=="ปิด") {
                         $Status_Color="Danger";
                       }else {
                         $Status_Color="Default";
                       }

                   echo "<tr>
                           <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                           <td>$name_prd</td>
                           <td>$price_prd</td>
                         </tr>";
                   }
           ?>
        </table>

        <br/>
             <table border="1" style="width:100%">
               <tr>
                 <th colspan="3"><center>ประเภทอื่นๆ</center></th>
               </tr>
                <tr>
                  <td><center>สถานะรับซื้อ</center></td>
                  <td><center>รายชื่อ</center></td>
                  <td><center>ราคา/กก.</center></td>
               </tr>
               <tr>

               </tr>

                    <?php
                            foreach ($result7 as $row) {
                                $Status = $row->Status;
                                $name_prd = $row->name_prd;
                                $price_prd = $row->price_prd;
                                $ref_id_type = $row->ref_id_type;

                                if ($Status=="เปิด") {
                                  $Status_Color="Success";
                                }elseif ($Status=="ปิด") {
                                  $Status_Color="Danger";
                                }else {
                                  $Status_Color="Default";
                                }

                            echo "<tr>
                                    <td>&nbsp;<span class='label label-$Status_Color'> $Status </span></td>
                                    <td>$name_prd</td>
                                    <td>$price_prd</td>
                                  </tr>";
                            }
                    ?>
                 </table>
        <br/>


</div>


<div class="col-md-4">

</div>

</div>


@endsection

@section('footer')

@endsection
