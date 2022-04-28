<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use App\members;

class AdminOrderController extends Controller
{

  public function order_view(){
    echo "<center><h2>::ผู้ดูแลระบบ::</h2></center>";

    $sql="select*from tb_order";
    $data['result']=DB::select($sql);

    return view('admin.admin_order_view',$data);
  }

  public function delete($id){
  $sql ="delete from tb_order where id_order='$id'";
  DB::delete($sql);

  $sql2="delete from tb_detail where id_order='$id'";
  DB::select($sql2);

  return redirect('admin/order');
  }

  public function view($id){
    $sql="select*from tb_order where id_order='$id'";
    $data['result']=DB::select($sql);

    $sql2="select*from tb_detail where id_order='$id'";
    $data['result2']=DB::select($sql2);

    return view('admin.Order_view',$data);
  }





}
