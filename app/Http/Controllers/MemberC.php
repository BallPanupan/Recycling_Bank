<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use App\members;

class MemberC extends Controller
{

    public function all(){
    //$data['result']=DB::select("select * from members");
    //$data['result']=DB::table('members')->get();
    $data['result'] = Members::all();
      return view ('member_all',$data);
    }

public function show($id){
  //$data['result']=DB::select("select * from members where id=?",[$id]);
  //$data['result']=DB::table('members')->where('id',$id)->get();
  $data['result']=Members::find($id);

  return view('member_show',$data);
}

public function insert(){
  return view('member_insert');
}

public function insert2(Request $Request){
  $fname = $Request->input('fname');
  $lname = $Request->input('lname');
  $address = $Request->input('address');

//echo "$fname,$lname,$address <br/>";
//DB::insert('insert into members (fname,lname,address) values (?,?,?)',
//[$fname, $lname, $address]);

echo "Data from save into database. <br/>";

echo "<a href='all'><p>Back </a>";
//DB::table('members')->insert(array(
//  'fname'=>$fname,
//  'lname'=>$lname,
//  'address'=>$address,
//));

$member = new Members;
$member->fname = $fname;
$member->lname = $lname;
$member->address = $address;
$member->save();

return " ";
}

public function delete($id){
  //DB::delete('delete from members where id=?',[$id]);
  //DB::table('members')->where('id',$id)->delete();
$member=Members::find($id);
$member->delete();

  echo "<p>Delete OK.<br/>";
  echo "<a href='../all'><p>Back </a>";
    return " ";
}

public function update($id){
  //$data['result']=DB::select("select * from members where id=?",[$id]);
  $data['result']=Members::find($id);
  return view ('member_update',$data);
}


public function index(){
  return view('login2');
}

public function price_list(request $request){
  $sql="select * from tb_type";
  $data['result']=DB::select($sql);


  if($request->session()->get('check')=="passed"){
     $data['username']=$request->session()->get('username');

    return view('price_list',$data);
  }else{
    return redirect('login');
  }
}


public function tran(){
    $data['header'] ="SEKITORI";
    $data['content'] ="krabi Thailand";
    $data['footer'] ="mung krabi";
    return view('hello',$data);
  }

  public function login(){
      $data['header'] ="";
      $data['content'] =" ";
      $data['footer'] =" ";
      return view('login',$data);


        $username = $request->input('username');
        $password = $request->input('password');

        $result=DB::select("select * from members where username=? and password=?",[$username,$password]);

      //echo count($result);
      //ตัวอย่าง login 1
        if(count($result)>0){
                //echo "OK";
                $request->session()->put('username',$username);
                $request->session()->put('check',"passed");
                return redirect('homeuser');
        }else{
            return redirect('login');
          }

    }

    public function register(){
        $data['header'] ="";
        $data['content'] =" ";
        $data['footer'] =" ";
        return view('register',$data);
      }

      public function register2(Request $Request){
        $username = $Request->input('username');
        $password = $Request->input('password');
        $fname = $Request->input('fname');
        $lname = $Request->input('lname');

        $email = $Request->input('email');
        $phone = $Request->input('phone');
        $sex = $Request->input('sex');
        $birthday = $Request->input('birthday');



      //echo "$fname,$lname,$address <br/>";
      //DB::insert('insert into members (fname,lname,address) values (?,?,?)',
      //[$fname, $lname, $address]);

      //echo "Data from save into database. <br/>";
      //echo "<a href='login'><p>Back </a>";


      $member = new members;
      $member->username = $username;
      $member->password = $password;
      $member->fname = $fname;
      $member->lname = $lname;

      $member->email = $email;
      $member->phone = $phone;
      $member->sex = $sex;
      $member->birthday = $birthday;
      $member->save();

      //return " ";
      return view('Done_x');
      }

      public function Done_x(){
        return view('Done_x');
      }

    public function registerx1(){
      $data['result']=DB::table('members')->get();
      return view('registerx1',$data);
    }

  public function registerx2(Request $Request){
    $username = $Request->input('username');
    $password = $Request->input('password');
    $fname = $Request->input('fname');
    $lname = $Request->input('lname');

    $email = $Request->input('email');
    $phone = $Request->input('phone');
    $sex = $Request->input('sex');
    $birthday = $Request->input('birthday');



  //echo "$fname,$lname,$address <br/>";
  //DB::insert('insert into members (fname,lname,address) values (?,?,?)',
  //[$fname, $lname, $address]);

  //echo "Data from save into database. <br/>";
  //echo "<a href='login'><p>Back </a>";

  $member = new members;
  $member->username = $username;
  $member->password = $password;
  $member->fname = $fname;
  $member->lname = $lname;

  $member->email = $email;
  $member->phone = $phone;
  $member->sex = $sex;
  $member->birthday = $birthday;
  $member->save();

  return " ";
  }

public function login2(request $request){

  $username = $request->input('username');
  $password = $request->input('password');

  $result=DB::select("select * from members where username=? and password=?",[$username,$password]);

//echo count($result);
//ตัวอย่าง login 1
  if(count($result)>0){
          //echo "OK";
          $request->session()->put('username',$username);
          $request->session()->put('check',"passed");
          return redirect('homeuser');
  }else{
      return redirect('login');
    }
}

//echo $result;เช็คค่า
//echo "$username,$password";แสดงค่าที่รับเข้ามา


public function home(request $request){
  if($request->session()->get('check')=="passed"){
     $data['username']=$request->session()->get('username');

    return view('userhome',$data);
  }else{
    return redirect('login');
  }
}

public function homeuser2(request $request ){
  if($request->session()->get('check')=="passed"){
     $data['username']=$request->session()->get('username');

     $sql="select*from tb_order where fullname ='sss'";
     $data2['result']=DB::select($sql);

    return view('homeuser',$data,$data2);
  }else{
    return redirect('login');
  }
}



public function logout(request $request){
      $request->session()->forget('check');
      $request->session()->forget('username');
    return redirect('login');
}

public function type2(){
  $data['header'] ="";
  $data['content'] =" ";
  $data['footer'] =" ";
  return view('type2',$data);
}



}
