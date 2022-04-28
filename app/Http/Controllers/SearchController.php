<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

$test  = DB::table('members');
use App\members;

class SearchController extends Controller
{
  // public function __construct(){
  //   $this->shop = new ShopController;
  // }

  public function searchx(){
    return view('admin.searchx');
  }

  public function searchx2(Request $Request){
    $searchk = $Request->input('searchk');

    $sql="select*from members WHERE username LIKE '%$searchk%' ";
    $data['result']=DB::select($sql);

    $sql="select*from members WHERE phone LIKE '%$searchk%' ";
    $data['result2']=DB::select($sql);

    // $data2['error']="$searchk";
    //$data2['linkBill']="addbill";
    //echo "$sql";
    return view('admin.searchx2',$data);
  }

  public function addbill(request $request,$id){
    $sql="select * from members where id='$id' ";
    $data['result']=DB::select($sql);

    $data['typeList']=$this->shop->typeList();


    $sql2="select * from tb_type";
    $data2['result2']=DB::select($sql2);

    return view('admin.addbill',$data,$data2);
  }


//////////////////////////////////////////////////////////////////////////
//รับซื้อ

public function type1(request $request){

  $sql="select * from tb_products where ref_id_type = '1'";
  $data['result']=DB::select($sql);

    return view('admin.product_list',$data);
}


}
