<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminProductController extends Controller
{
    public function __construct()
    {
      $this->admin=new AdminController;
    }

    public function index(){
      $Datex=date('d-m-Y ');

      $sql="select * from tb_products";
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


      $sql="select * from tb_products";
      $data['result']=DB::select($sql);
      $data['menu']=$this->admin->menu();

      return view('admin.admin_product_view',$data);
    }

    public function update($id){
      $sql="select * from tb_products where id_prd='$id'";
      $data['result']=DB::select($sql);

      $sql="select * from  tb_type";
      $data['result2']=DB::select($sql);

      $data['menu']=$this->admin->menu();
      return view('admin.admin_product_update',$data);
    }

    public function update2(Request $request){

      $id_prd=$request->input('id_prd');
      $Status=$request->input('Status');
      $name_prd=$request->input('name_prd');
      $detail_prd=$request->input('detail_prd');
      $price_prd=$request->input('price_prd');
      $photo_prd2=$request->input('photo_prd2');
      $ref_id_type=$request->input('ref_id_type');

      if($request->hasFile('photo_prd')){
        $photo_prd=$request->file('photo_prd');
        $filename=time().".".$photo_prd->extension();
        $photo_prd->move('uploads',$filename);
      }else{
        $filename=$photo_prd2;
      }

      $sql="update tb_products set
          Status='$Status',
          name_prd='$name_prd',
          detail_prd='$detail_prd',
          price_prd='$price_prd',
          photo_prd='$filename',
          ref_id_type='$ref_id_type'
          where id_prd='$id_prd'";

      DB::update($sql);

      echo "Update OK! <br/>";
      $link=url('admin/product');
      echo "<a href='$link'> Back </a>";
      }


      public function insert(){
      $sql="select * from tb_type";
      $data['result']=DB::select($sql);
      $data['menu']=$this->admin->menu();

      return view('admin.admin_product_insert',$data);
    }

    public function insert2(Request $request){
      $Status=$request->input('Status');
      $name_prd=$request->input('name_prd');
      $detail_prd="Null";
      $price_prd=$request->input('price_prd');
      $Date = date("d-m-Y");
      $ref_id_type=$request->input('ref_id_type');
      $photo_prd="Null";
      //$filename=time().".".$photo_prd->extension();
      //$photo_prd->move('uploads',$filename);

      $sql="insert into tb_products values(null,'$Status','$name_prd','$detail_prd','$price_prd','$Date','$photo_prd','$ref_id_type')";

      DB::insert($sql);

      echo "Insert OK! <br/>";
      $link=url('admin/product');
      echo "<a href='$link'> Back </a>";
    }

    public function delete($id){
    $sql="delete from tb_products where id_prd='$id'";
    DB::delete($sql);

    echo "Delete OK! <br/>";
    $link =url('admin/product');
    echo "<a href='$link'>Back<a/>";
    }

    public function BasketInsert($id,Request $request){
      if ($request->session()->exists('items')){
          $items=$request->session()->get('items');
      }else{
        $items=array();
      }

      $sql="select * from tb_products where id_prd='$id'";
      $result=DB::select($sql);

      if(count($result)>0){
        $name_prd=$result[0]->name_prd;
        $price_prd=$result[0]->price_prd;

      if(array_key_exists($id,$items)<> true){
        $items[$id]=['id'=>$id,'name'=>$name_prd,'qty'=>1,'price'=>$price_prd];
        $request->session()->put('items',$items);
      }
      }

      $data['items']=$items;

      return view('admin/basketfn',$data);
  }

  public function Basketfn(){

      echo "Insert Ok! <br/>";
      $link=url('/home');
      echo "<a href='$link'>Back </a>";
      return view('admin/basketfn');
  }

  public function BasketCal(Request $request){

      $data['username']=$request->session()->get('username');
      $complete=$request->input('complete');
      $prd_del=$request->input('prd_del');
      $prd_qty=$request->input('prd_qty');

      if(count($prd_del)==0){
        $prd_del=array();
      }

    $items=$request->session()->get('items');
    $c=0;
    $temp=array();
    foreach($items as $i){
      $id=$i['id'];
      $name=$i['name'];
      $qty=$prd_qty[$c];
      $price=$i['price'];

      if(!in_array($id,$prd_del)){
        $temp[$id]=['id'=>$id,'name'=> $name,'qty'=>$qty,'price'=>$price];
      }
      $c++;
    }
    $request->session()->put('items',$temp);
    $data['items']=$temp;
    if($complete){
      return view('admin.admin_order',$data);
    }else {
      return view('admin.admin_basket_view',$data);
    }
    //////////////////////////////////////////
    if($request->session()->get('check')=="passed"){
       $data['username']=$request->session()->get('username');

      return view('userhome',$data);
    }else{
      return redirect('login');
    }
  }

  public function basket(Request $request){
  if($request->session()->get('check')=="passed"){
     $data['username']=$request->session()->get('username');

     if($request->session()->exists('items')){
       $items=$request->session()->get('items');
     }else{
       $items=array();
     }
     $data['items']=$items;
    return view('admin.admin_basket_view',$data);
  }else{
    return redirect('login');
  }
  }

  public function orderInsert(Request $request){
      $username=$request->input('username');
      $tel=$request->input('tel');
      $district1= date("Y-m-d");
      $district2=$request->input('district2');
      $total=$request->input('total');
      $date_order = date("Y-m-d");
      $operator=$request->input('operator');

      if ($district2 =="ตลาดใหญ่") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 1 ";

      }elseif ($district2 =="ตลาดเหนือ") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 2 ";

      }elseif ($district2 =="เกาะแก้ว") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 3 ";

      }elseif ($district2 =="รัษฎา") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 4 ";

      }elseif ($district2 =="วิชิต") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 5 ";

      }elseif ($district2 =="ฉลอง") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 6 ";

      }elseif ($district2 =="ราไวย์") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 7 ";

      }elseif ($district2 =="กะรน") {
        $district1="อำเภอเมืองภูเก็ต";
        echo "Yes 8 ";

      }elseif ($district2 =="กะทู้") {
        $district1="อำเภอกะทู้";
        echo "Yes 2.1 ";

      }elseif ($district2 =="ป่าตอง") {
        $district1="อำเภอกะทู้";
        echo "Yes 2.2 ";

      }elseif ($district2 =="กมลา") {
        $district1="อำเภอกะทู้";
        echo "Yes 2.3 ";

      }elseif ($district2 =="เทพกระษัตรี") {
        $district1="อำเภอถลาง";
        echo "Yes 3.1 ";

      }elseif ($district2 =="ศรีสุนทร") {
        $district1="อำเภอถลาง";
        echo "Yes 3.2 ";

      }elseif ($district2 =="เชิงทะเล") {
        $district1="อำเภอถลาง";
        echo "Yes 3.3 ";

      }elseif ($district2 =="ป่าคลอก") {
        $district1="อำเภอถลาง";
        echo "Yes 3.4 ";

      }elseif ($district2 =="ไม้ขาว") {
        $district1="อำเภอถลาง";
        echo "Yes 3.5 ";

      }elseif ($district2 =="สาคู") {
        $district1="อำเภอถลาง";
        echo "Yes 3.6 ";

      }else{
        echo "No Dristrict";
      }




      $sql="insert into tb_order values(null,'$username','$tel','$district1','$district2','$total','$date_order','$operator')";
      DB::insert($sql);

      // DB::insert('insert into members (username,password,fname,lname,email,phone,sex,birthday,Status) values (?,?,?,?,?,?,?,?,?)',
      // [$username, $password, $fname, $lname, $email, $phone, $sex, $birthday,"member"]);

      $sql2="select max(id_order) as id from tb_order";
      $result=DB::select($sql2);
      $lastId=$result[0]->id;

      $items=$request->session()->get('items');
      foreach($items as $i){
        $id=$i['id'];
        $name=$i['name'];
        $price=$i['price'];
        $qty=$i['qty'];

        $sql3="insert into tb_detail values('$lastId','$id','$name','$qty','$price')";
        DB::insert($sql3);
      }
      $request->session()->forget('items');
      echo "ทำรายการเสร็จสิ้น<br/>";
      //$link=url('/homeuser');
      $link=url('/admin/order');
      echo "<a href='$link'>Back </a>";
    }


  }//main class
