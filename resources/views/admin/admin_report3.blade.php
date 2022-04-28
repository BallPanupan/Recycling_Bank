@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
<?php
  $dis1="0";
  $dis2="0";
  $dis3="0";

foreach ($result as $row) {
    $district1=$row->district1;

      if ($district1=="อำเภอเมืองภูเก็ต") {
        $dis1=$dis1+1;
      }elseif ($district1=="อำเภอกะทู้") {
        $dis2=$dis2+1;
      }elseif ($district1=="อำเภอถลาง") {
        $dis3=$dis3+1;
      }else {
      }
}
  // echo "$dis1 <br/>";
  // echo "$dis2 <br/>";
  // echo "$dis3 <br/>";
?>

<script>
window.onload = function A() {

var options = {
	animationEnabled: true,
	title: {
		text: "แต่ละพื้นที่"
	},
	axisY: {
		title: "Growth Rate (in %)",
		suffix: "%",
		includeZero: false
	},
	axisX: {
		title: "Countries"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "อำเภอเมือง", y: <?= $dis1 ?> },
			{ label: "อำเภอกะทู้", y: <?= $dis2 ?> },
			{ label: "อำเภอถลาง", y: <?= $dis3 ?> },

		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>


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
  <!-- <div class="btn-group-vertical" role="group" aria-label="...">
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link1?>'"><b><h4> รับซื้อ </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link2?>'"><b><h4> เพิ่มสินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link3?>'"><b><h4> สินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link4?>'"><b><h4> เพิ่มประเภท สินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link5?>'"><b><h4> แก้ไข,ลบ ประเภทสินค้า </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link6?>'"><b><h4> รายการใบสั่งซื้อ </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='<?=$link7?>'" ><b><h4> ออกจากระบบ </h4></b></button>
  </div> -->
</p>

  </center>
</div>

<div class="col-md-4">

  <center>
    <p><h1>พื้นที่ขยะมากที่สุด</h1></p>
    <div class="btn-group-vertical" role="group" aria-label="...">
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report3_1'"><b><h4> อำเภอเมืองภูเก็ต  </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report3_2'"><b><h4> อำเภอกะทู้ </h4></b></button>
      <button type="submit" class="btn btn-default " onclick="window.location.href='/admin/report3_3'"><b><h4> อำเภอถลาง </h4></b></button>
    </div>
  </p>
    </center>

<br/>
      <div id="chartContainer" style="height: 370px; width: 100%;"></div>



  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</div>


</div>
      @endsection

      @section('footer')

      @endsection
