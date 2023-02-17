<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Jobs;

class UserController extends Controller
{


    function login(Request $req)
    {
        // return $req;
        $user = User::where(['email' => $req->email])
            ->where(['password' => $req->password])
            ->first();

            if($user == true)
            {
                $req->session()->put('user', $user);
                return redirect('/index');
            }
            else
            {
                return redirect('/')->with('error','Login Failed ! Try Again');       
            }
        }

    //     // if(!$user){
    //     //     return redirect('/login/?failed=true')->with
    //     //     ('failed', 'Username or password is not matched');
    //     // }else{
    //     //     $req->session()->put('user', $user);
    //     //     return redirect('/?success=true');
    //     // }
    // }

    function signup(Request $req)
    {
        // return $req->input();
        
        try
        {
        DB::insert('INSERT INTO users(name,email,password,gender,dob,address,phone,position, created_at) VALUES(?,?,?,?,?,?,?,?,?)',
        [$req->fullname,$req->email,$req->password,$req->gender,$req->dob,$req->address,$req->phone,$req->position, now()]);
            return redirect('/')->with('success','Successfully Registered!');       
        } catch(\Exception)
        {
            return redirect('/signup')->with('error','Register Failed!');       

        }
    }


    //admin
    function userprofile(Request $req)
    {
        $data=DB::table('users')
        //->join('table2','table2.id', '=', 'users=id')
        ->first();
        return view('userprofile',['user'=>$data]);
    }

     public function edituser(Request $req)
    {
        DB::table('users')->where('id',$req->rid)
        ->update(array(
        'name'=>$req->fullname,
        'email'=>$req->email,
        'password'=>$req->password,
        'gender'=>$req->gender,
        'dob'=>$req->dob,
        'address'=>$req->address,
        'phone'=>$req->phone,
        'position'=>$req->position,
        // 'updated_at'=>now()));
        'updated_at'=>DB::raw('now()')));
        return redirect('/userprofile')->with('success','User Profile Updated! Please Login Again!');           
    }
   
    // function editpassword(Request $req)
    // {
    // DB::table('users')->where('id',$req->rid)
    // ->update(array(
    //     'password'=>$req->password,
    //     'updated_at'=>DB::raw('now()')));         
    //     return redirect('/userprofile')->with('success','Password Updated!');           

    // }

    // public function deleteeuser(Request $req)
    // {
    //     DB::table('users')
    //         ->where('id', $req->rid)
    //         ->delete();
    //     return redirect('/logout')->with('success','User Successfully Deleted !');           
    // }
    
    //admin

    //employees
    public function employeeprofile(Request $req){
        $data=DB::table('employees')
        //->join('table2','table2.id', '=', 'users=id')
        ->where('id',$req->rid)
        ->first();
        return view('employeesview',['users'=>$data]);
    }

    public function insertform(Request $req){
        DB::insert('INSERT INTO employees(name,email,password,gender,dob,address,phone,position,startdate, created_at) VALUES(?,?,?,?,?,?,?,?,?,?)',
        [$req->fullname,$req->email,$req->password,$req->gender,$req->dob,$req->address,$req->phone,$req->position,$req->startdate, now()]);
        return redirect('/employeeslist')->with('success','New Employee Added!');           
    }   
    
    public function search (Request $req)
    {
        return view('employeeslist',['emp'=>DB::table('employees')
        ->select(DB::raw('id,name,email,password,gender,dob,address,phone,position,startdate,created_at,updated_at'))
        ->where('email', 'like', '%' . $req->q . '%')
        ->orwhere('name', 'like', '%' . $req->q . '%')
        ->paginate(5)]);
    }

    public function getemployee(Request $req)
    {
        $data=DB::table('employees')
        //->join('table2','table2.id', '=', 'users=id')
        ->where('id',$req->rid)
        ->first();
        return view('employeesedit',['users'=>$data]);
    }

    public function editemployee(Request $req)
    {
    DB::table('employees')->where('id',$req->rid)
    ->update(array(
        'name'=>$req->fullname,
        'password'=>$req->password,
        'email'=>$req->email,
        'gender'=>$req->gender,
        'dob'=>$req->dob,
        'address'=>$req->address,
        'phone'=>$req->phone,
        'position'=>$req->position,
        'startdate'=>$req->startdate,
        // 'updated_at'=>now()));
        'updated_at'=>DB::raw('now()')));
        return redirect('employeesview?rid='.$req->rid) ->with ('success','Employee Profile Updated');
        
    }

    public function deleteemployee(Request $req)
    {
        DB::table('employees')
            ->where('id', $req->rid)
            ->delete();
        return redirect('/employeeslist')->with('success','Employee Profile Successfully Deleted !');           
    }
    //end employees

}
