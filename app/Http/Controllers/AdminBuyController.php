<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use App\members;

class AdminBuyController extends Controller
{

  public function __construct()
  {
    $this->admin=new AdminController;
  }

  public function index(){
    return view('admin.admin_buy');
  } //  index

  public function type1(request $request){

    $Datex=date('d-m-Y ');

  $sql="select * from tb_products where ref_id_type = '1' ";
  $data['result']=DB::select($sql);

  $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
  $data['result2']=DB::select($sql2);

  $sql3="select * from tb_products WHERE ref_id_type ='3' and Date = '$Datex' ";
  $data['result3']=DB::select($sql3);

  $sql4="select * from tb_products WHERE ref_id_type ='4' and Date = '$Datex' ";
  $data['result4']=DB::select($sql4);

  $sql5="select * from tb_products WHERE ref_id_type ='5' and Date = '$Datex' ";
  $data['result5']=DB::select($sql5);

  $sql6="select * from tb_products WHERE ref_id_type ='6' and Date = '$Datex' ";
  $data['result6']=DB::select($sql6);

  $sql7="select * from tb_products WHERE ref_id_type ='7' and Date = '$Datex' ";
  $data['result7']=DB::select($sql7);

    return view('admin.admin_product_list',$data);
  }

} // main class
