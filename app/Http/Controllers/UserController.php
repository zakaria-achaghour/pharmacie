<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',['users' => $users]);
    }

    /*
    public function archive()
    {
        $users = User::onlyTrashed();
        return view('user.index',['users' => $users]);
    }
    public function all()
    {
        $users = User::withTrashed();
        return view('user.index',['users' => $users]);
    }

    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->except(['_token']);

        $slug= $data['nom'][0].' '.$data['prenom']  ;
        $data['login'] = Str::slug($slug , ".");
        //$password = Str::random();
        $data['password'] = Hash::make('password');
      
        
       $user = User::create($data);

   
  // $this->generateRecuInscription($user,$data2['reste'],$data2['avance'],$formation);
    // todo : Send Email To User include cin&password
    //Mail::to($user->email)->send(new ParticipantSessionMarkdown($user,$designation,$password));
    return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = (int)$id;
        
     
        return view('user.edit',['user'=>User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $slug= $request->input('nom')[0].' '.$request->input('prenom');
        $user->email = $request->input('email');
        $user->login = Str::slug($slug , ".");
        $user->role = $request->input('role');
        $user->genre = $request->input('genre');





       
        if($user->save()){
            $request->session()->flash('success' , 'User Updated !! ');
        }else{
            $request->session()->flash('error' , 'Error Updating user !! ');
        }
       
        

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return redirect('users.index');
    }
}
