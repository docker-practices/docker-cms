<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// here use DB is only for when we use query builder
use DB;

// bt in this case we are useing model so allocate the location
use App\Adduser;
class UserController extends Controller
{
    
	 public function ShowUsers()
	    {
    		// using mvc model 
	        $users = Adduser::all(); // or use ::get();
        	return view('users')->with('AllUsers',$users);
    	}

    public function AddUser()
	    {
    		return view('addUser');
    	}

    public function InsertUser(Request $request)
	    {
	        
	     //    $data=array();
	    	// $data['name']=$request->name;
	    	// $data['address']=$request->address;
	    	// $data['email']=$request->email;
	    	// $data['password']=$request->password;
	    	// $data['phone']=$request->phone;
	    	// $st=DB::table('addusers')
    		// ->insert($data);

    		$user= new Adduser;
	        $user->name=$request->name;
	        $user->address=$request->address;
	        $user->email=$request->email;
	        $user->password=$request->password;
	        $user->phone=$request->phone;
	        $user->save();
	        
	        if($user->save())
	        {
	            
	            //return view('addUser');
	            return Redirect()->back();
	        }
	        else
	        {
	            echo "error";
	        }

    	}

    	public function EditUser($id)
	    {
	    	$adduser = Adduser::find($id);
        	return view('editUser')->with('single_data',$adduser);
	    }

	    public function UpdateUser(Request $request,$id)
	    {
	        $user = Adduser::find($id);
	        $user->name=$request->name;
	        $user->address=$request->address;
	        $user->email=$request->email;
	        $user->password=$request->password;
	        $user->phone=$request->phone;
	        $user->save();

        	if($user->save())
         	{
	            return Redirect()->back();
	        }
	        else
	        {
	            echo "error";
	        }

	    }

	    public function UserShow($id)
	    {
	    	$adduser = Adduser::find($id);
        	return view('usershow')->with('single_data',$adduser);
	    }

		public function DeleteUser($id)
	    {
	    	$del=Adduser::find($id)->delete();
	    	if($del)
         	{
            return Redirect()->back();
        	}
        	else
        		{
    	        echo "error";
	        	}
	    }


}
