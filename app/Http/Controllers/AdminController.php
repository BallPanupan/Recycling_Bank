<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use App\members;

class AdminController extends Controller
{

  public function index(){
    $data['error']="";
    return view('admin.Login',$data);
  }//index

  public function login(Request $request){
    $user = $request->input('user');
    $pass = $request->input('pass');

    if($user=="aaa" and $pass =="aaa"){
      $request->session()->put('check','passed');
      return redirect('admin/home');

    }else{
      $data['error']="ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
      return view('admin.Login',$data);
    }

  }//Login

  public function logout(request $request){
        $request->session()->forget('check');
        $request->session()->forget('username');
      return redirect('/');
  }


  public function home(request $request){
    echo "<center><h2>::ผู้ดูแลระบบ::</h2></center>";

    //echo $this->menu();
//  return view('admin.admin_home');
//}
  if($request->session()->get('check')=="passed"){
     $data['username']=$request->session()->get('username');

    return view('admin.admin_home');
  }else{
    return redirect('admin/');
  }
}

  public function menu(){
    $link1=url('admin/order');
    $link2=url('admin/product/insert');
    $link3=url('admin/product');
    $link4=url('admin/type/insert');
    $link5=url('admin/type');
    $link6=url('admin/logout');
    $link7=url('admin/searchx');

    return"
    <center>

    <p>
    [<a href='$link1'>รายการใบสั่งซื้อ</a>]</p>
    [<a href='$link2'>เพิ่มสินค้า</a>]</p>
    [<a href='$link3'>สินค้า</a>]</p>
    [<a href='$link4'>เพิ่มประเภท สินค้า</a>] -
    [<a href='$link5'>แก้ไข,ลบ ประเภทสินค้า</a>]</p>
    [<a href='$link6'>ออกจากระบบ</a>]</p>
    [<a href='$link7'>รับซื้อ</a>]</p>
    </p>
    </center>
    ";
  }


////////////////////////////////////////////////////
//ADMIN REPORT
///////////////////////////////////////////////////
  public function report(request $request){


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report');
    }else{
      return redirect('admin/');
    }
  }

  public function report1(request $request){

    $Datex=date('Y-m-d ');

    $sql="select*from tb_order WHERE date_order = '$Datex' ";
    $data['result']=DB::select($sql);

    $sql2="select*from tb_order ";
    $data['result2']=DB::select($sql2);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report1',$data);
    }else{
      return redirect('admin/');
    }
  }

  public function report2(request $request){

    $Datex=date('Y-m-d ');

    $sql="select*from tb_order WHERE date_order = '$Datex' ";
    $data['result']=DB::select($sql);

    $sql2="select*from tb_order ";
    $data['result2']=DB::select($sql2);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report2',$data);
    }else{
      return redirect('admin/');
    }
  }

  public function report3(request $request){

    $Datex=date('Y-m-d ');

    $sql="SELECT * from tb_order ";
    $data['result']=DB::select($sql);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report3',$data);
    }else{
      return redirect('admin/');
    }
  }

  public function report3_1(request $request){

    $Datex=date('Y-m-d ');

    $sql="SELECT * from tb_order ";
    $data['result']=DB::select($sql);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report3_1',$data);
    }else{
      return redirect('admin/');
    }
  }

  public function report3_2(request $request){

    $Datex=date('Y-m-d ');

    $sql="SELECT * from tb_order ";
    $data['result']=DB::select($sql);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report3_2',$data);
    }else{
      return redirect('admin/');
    }
  }

  public function report3_3(request $request){

    $Datex=date('Y-m-d ');

    $sql="SELECT * from tb_order ";
    $data['result']=DB::select($sql);


    // $Datex=date('d-m-Y ');
    //
    // $sql2="select * from tb_products WHERE ref_id_type ='2' and Date = '$Datex' ";
    // $data['result2']=DB::select($sql2);


    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('admin.admin_report3_3',$data);
    }else{
      return redirect('admin/');
    }
  }

}//class
