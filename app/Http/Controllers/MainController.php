<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Events\UserCreated;
use Illuminate\Http\Request;
use App\Imports\ProjectImports;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        $user = User::sortable()->paginate(3);
        //dd($user);
        return view('Main.index', compact('user'));
    }

    public function create()
    {
        return view('Main._File');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|min:4|max:10',
            'email' => 'email:rfc,dns|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required',
            'role_id' => 'Required',
        ]);
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->role_id = $request->get('role_id');
        $user->save();
        // dd($user);
        return redirect('user')->with('success', 'User Added Successfully');
    }

    public function edit($id)
    {
        //dd($user);
        $user = User::find($id);
        return view('Main._File', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        
        $validated = $request->validate([
            'name' => 'required|min:4|max:10',
            'email' => 'email:rfc,dns|unique:users,email,'.$user->id
            
        
        ]);
        //$user = User::find($id)->update($request->all());
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role_id = $request->get('role_id');
        $user->save();
        //dd($user);
        return redirect('user')->with('success', 'Updated successfully');

    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
        return redirect('user')->with('success', 'Deleted successfully');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('Main.view', compact('user'));
    }

    public function search(Request $request)
    {
        $user = User::query();

        if ($request->has('name')) {
            $user->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('email')) {
            $user->where('email', 'like', '%' . $request->input('email') . '%');
        }

        if ($request->has('role_id')) {
            $user->where('role_id', 'like', '%' . $request->input('role_id') . '%');
        }

        if (!$user || !$user->count()) {
            Session::flash('no-results', 'Data Not Found');
        }

        $user = $user->paginate('10');

        return view('Main.index', compact('user'));

    }

//     public function eventTask() {
// //event(new UserCreated("Email has been send your email Address"));
//         event(new UserCreated($user));
// }

}
