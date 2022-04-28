<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminTypeController extends Controller
{
    public function __construct()
    {
      $this->admin=new AdminController;
    }

    public function type(request $request){
      $sql="select * from tb_type";
      $data['result']=DB::select($sql);


      if($request->session()->get('check')=="passed"){
         $data['username']=$request->session()->get('username');

        return view('admin.admin_type_view',$data);
      }else{
        return redirect('login');
      }
    }

    public function update($id){

      $sql="select * from tb_type where id_type='$id'";
      $data['result']=DB::select($sql);

      return view('admin.admin_type_update',$data);
    }

    public function update2(Request $request){
      $id_type=$request->input('id_type');
      $name_type=$request->input('name_type');
      $price_type=$request->input('price_type');

      //$sql="update tb_type set
      //name_type='$name_type',
      //price_type='$price_type',
      //where id_type='$id_type'";

      DB::update('update tb_type set name_type=?,price_type=? where id_type=?',
    [$name_type,$price_type,$id_type]);

      echo "Update OK! <br/>";
      $link=url('admin/type');
      echo "<a href='$link'> Back </a>";
      }

      public function insert(){
        $sql="select * from tb_type";
        $data['result']=DB::select($sql);

        return view('admin.admin_type_insert',$data);
      }

      public function insert2(Request $request){
        $name_type=$request->input('name_type');
        $price_type=$request->input('price_type');


        $sql="insert into tb_type values(null,
        '$name_type','$price_type')";

        DB::insert($sql);

        echo "Insert OK! <br/>";
        $link=url('admin/type');
        echo "<a href='$link'> Back </a>";
      }

      public function delete($id){
      $sql="delete from tb_type where id_type='$id'";
      DB::delete($sql);

      echo "Delete OK! <br/>";
      $link =url('admin/type');
      echo "<a href='$link'>Back<a/>";
      }

  }//main class
