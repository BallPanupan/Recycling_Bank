
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
        <a href="type2" class="list-group-item">สินค้าในตะกร้า</a>

  </div>

   <table width=""  border="1">
     <tr bgcolor="#E8E8E8">
       <td width=""><div align="center"><br>รหัสสมาชิก</br></div></td>
       <td width=""><div align="center"><br>username</br></div></td>
       <td width=""><div align="center"><br>ชื่อ</br></div></td>
       <td width=""><div align="center"><br>สกุล</br></div></td>
     </tr>
   </table><BR>

12312313213
</div>

<div class="col-md-4">


</div>

</div>


@endsection

@section('footer')

@endsection
