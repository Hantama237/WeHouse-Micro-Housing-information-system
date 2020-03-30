<?php 
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

use App\Functions\checkerFunction;

class loginController extends Controller{
    function index(Request $req){
        return view("auth.login");
        if(checkerFunction::checkLogin($req)){
            return redirect("/");
        }else{
            return view("auth.login");
        }
    }
    function login(Request $req){
        //bcrypt(str);
        if($req->has("login")){
            $user = DB::table("users")->where("email",$req->input('email'))->first();
            if(is_null($user)){
                return redirect()->back()->withErrors(['msg', 'Invalid email/password']);
            }
            $id=$user->id;
            $email=$user->email;
            $password=$user->password;//"$2y$12\$ydblUwqOjiRtoZC1TyFgfO6R0l1mqo.e4DG4XyPxtgslo9kfBlvHm";
            $isCorrect = Hash::check($req->input('password'),$password);
            if($isCorrect){
                $loginData = [
                    "login"=>true,
                    "id"=>$id
                ];
                $req->session()->put(
                    $loginData
                );
            }
        }
        if($req->session()->get("login")){
            return redirect("/");
        }else{
            return redirect("/login")->withErrors(['msg', 'Invalid email/password']);
        }
    }
}
?>