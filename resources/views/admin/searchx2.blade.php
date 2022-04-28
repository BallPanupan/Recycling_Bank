
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')

<div class="row">


<div class="col-md-4">

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

  <div class="list-group" style="width:80%">
    <a href="#" class="list-group-item active">
      <center>เลือกรายการ</center>
    </a>
        <a href="addbill/type1" class="list-group-item">เพิ่มบิล</a>
        <a href="/admin/basket" class="list-group-item">สินค้าในตะกร้า</a>

  </div>
<h3>Username</h3>
            <table border=1 width="100%">
                <tr bgcolor=#E8E8E8>
                  <td><center><b>รหัส</b></center></td>
                  <td><center><b>username</b></center></td>
                  <td><center><b>โทรศัพท์</b></center></td>
                  <td><center><b>ชื่อ</b></center></td>
                  <td><center><b>สกุล</b></center></td>
                  <td><center><b>สถานะ</b></center></td>
                  <td><center><b>เลือก</b></center></td>
                </tr>

                <?php

                $link1=url('admin/');

                foreach ($result as $row) {
                    $id=$row->id;
                    $username=$row->username;
                    $phone=$row->phone;
                    $fname=$row->fname;
                    $lname=$row->lname;
                    $Status=$row->Status;


                   echo "<tr>
                    <td>$id</td>
                    <td>$username</td>
                    <td>$phone</td>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$Status</td>
                    <td><a href='$link1/$username/addbill/type1'>เลือก </a></td>
                  </tr>";
                }

                ?>



          </table>
   <BR>

     <h3>หมายเลขโทรศัพท์</h3>
     <table border=1 width="100%">
         <tr bgcolor=#E8E8E8>
           <td><center><b>รหัส</b></center></td>
           <td><center><b>username</b></center></td>
           <td><center><b>โทรศัพท์</b></center></td>
           <td><center><b>ชื่อ</b></center></td>
           <td><center><b>สกุล</b></center></td>
           <td><center><b>สถานะ</b></center></td>
           <td><center><b>เลือก</b></center></td>
         </tr>

         <?php

         $link1=url('admin/');

         foreach ($result2 as $row) {
             $id=$row->id;
             $username=$row->username;
             $phone=$row->phone;
             $fname=$row->fname;
             $lname=$row->lname;
             $Status=$row->Status;


            echo "<tr>
             <td>$id</td>
             <td>$username</td>
             <td>$phone</td>
             <td>$fname</td>
             <td>$lname</td>
             <td>$Status</td>
             <td><a href='$link1/$username/addbill'>เลือก </a></td>
           </tr>";
         }

         ?>



   </table>
<BR>


</div>

<div class="col-md-4">


</div>

</div>


@endsection

@section('footer')

@endsection
