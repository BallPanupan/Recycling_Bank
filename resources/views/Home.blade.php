
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection
<?php
        foreach ($result2 as $row) {
            $id=$row->id;
            $username=$row->username;
            $Status=$row->Status;

           //echo "$id $username $Status";
        }
?>

<?php
  if ($Status=="admin"){
    $spa="Tools";
    $linkx=url('admin/home');
  }else {
    $spa="";
    $linkx="/home/$username";
  }

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home/<?=$username?>"><?=$username?> (<?=$Status?>)</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?=$linkx?>" target='_blank'><?=$spa?></a></li>
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
    <center>
      <?php
      $link1=url('home/'.$username.'/price_date');
      ?>

      <h3>
        <span class="label label-success" ><a href="<?=$link1?>" style="color:white">ราคาขยะปัจจุบัน</a></span>

      </h3>


        </center>

</div>

<div class="col-md-4">
  <center>
      <h3>
        <span class="label label-warning" >ประวัติการขาย</span>
      </h3>
        <table border=1 width="100%">
      <tr bgcolor=#E8E8E8>
        <td><center><b>รหัส</b></center></td>
        <td><center><b>username</b></center></td>
        <td><center><b>ราคารวม</b></center></td>
        <td><center><b>แสดง</b></center></td>
      </tr>

      <?php

      foreach ($result as $row) {
          $id_order=$row->id_order;
          $username=$row->username;
          $total=$row->total;

          $link1=url('order/view/'.$id_order);

         echo "<tr>
          <td><center>$id_order</center></td>
          <td>$username</td>
          <td>$total</td>
                 <td><a href='$link1' target='_blank'>แสดง</a></td>
        </tr>";
      }

      ?>



      </table>
    </center>
</div>

</div>




@endsection

@section('footer')

@endsection
