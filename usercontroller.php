<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $data = [
          'name' => 'Elon',
          'email' => 'elon@gmail.com',
          'password' =>'password',
        ];
      User::create($data);







       /* DB:: insert('insert into users(name,email,password) values(?,?,?)',[
            'sarthak','sarthak@gmail.com','password',
        ]);*/

      /* $users= DB::select('select * from users');                 //Raw Query of inserting, dleting, updating databse
        return $users;*/

       // DB::update('update users set name = ? where id =1',['srijan']);

        //DB::delete('delete from users where id =1');
       
        /* $user = new user();
        $user ->name = 'srijan';
        $user->email = 'srijan@gmail.com';      //Inserting part of the database using Eloquent
        $user ->password = bcrypt('password');
        $user ->save();*/

       $user = User::all();         //  To fetch data from the table in databse using ELOQUENT.
       return $user;
       

       // User::where('id',2)-> delete();     //  Deleting data from database using 'ELOQUENT'.




        //var_dump($user);
        //dd($user);

        return view('Home');
    }
}
