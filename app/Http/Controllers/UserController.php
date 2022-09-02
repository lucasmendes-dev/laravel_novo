<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::get();

        return view('users.index', compact('users'));

    }

    public function show($id) {

        //$user = User::where('id', $id)->first();
        if(!$user = User::find($id))
            return redirect()->route('users.index');
        
        return view('users.show', compact('user'));

    }

    public function create() {

        return view('users.create');

    }
    
    public function store(StoreUpdateUserFormRequest $request) {

        // $user = new User;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = encrypt($request->password);

        // $user->save();

        $data = $request->all();
        $data['password'] = bcrypt($request->passord);

        User::create($data);

        return redirect(route('users.index'))->with('msg', 'Usuário cadastrado com sucesso!');

    }

    public function edit($id) {

        if(!$user = User::find($id))
            return redirect()->route('users.index');
        
        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id) {
        
        if(!$user = User::find($id)) 
            return redirect()->route('users.index');
 
        $data = $request->only('name', 'email');
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect(route('users.index'))->with('msg', 'Usuário atualizado com sucesso!');

    }

    public function destroy($id) {

        if(!$user = User::find($id)) 
            return redirect()->route('users.index');
        
        $user->delete();

        return redirect(route('users.index'))->with('msg', 'Usuário deletado com sucesso!');

    }
}
