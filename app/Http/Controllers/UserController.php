<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
  public function index()
  {
    return view('paymentForm');
  }
  
  
    public function list()
    {
      $users = User::all();
      return view('list', compact('users'));
    }
    
    
    public function addAuth(Request $req)
    {
      $validator = Validator::make($req->all(), [
        'name' => 'required | alpha:ascii | min:3',
        'age' => 'required | gte:18 | lte:65',
        ]);
        
      if($validator->fails())
      {
        return redirect()->route('user.add_form')->withErrors($validator)->withInput();
      }
      
      $data = new User;
      $data->name = $req->input('name');
      $data->age = $req->input('age');
      $data->save();
      
      return redirect()->back()->with('success', 'Form saved successfully');
    }
    
    
    public function add()
    {
      $faker = Faker::create();
      foreach(range(1,3) as $index)
      {
        $result = User::create([
          'name' => $faker->name,
          'age' => mt_rand(18, 65),
        ]);
      }
    }
    
    
    public function softDelete(string $key) {
      $result = User::find($key);
      $result->delete();
      
      if($result) 
      {
        return "User successfully deleted";
      } else {
        return "user deletetion failed";
      }
    }
    
    
    public function showDeletedID() 
    {
      return User::withTrashed()->get();
      // return User::onlyTrashed()->get();
    }
    
    
    public function restore()
    {
      $user = User::onlyTrashed()->restore();
      return $user." records restored successfully";
    }
}
