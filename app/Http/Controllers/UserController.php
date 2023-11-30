<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request )
    {
        $page_content = [
            'page_title'      => __('User'),
            'module_name'     => __('User'),
            'sub_module_name' => __('List'),
            'module_route'    => route('user.create'),
            'button_type'    => 'create'
        ];
        
        $all_users = $this->user->getAllUsers($request->all());
        return view('user.index', compact('page_content', 'all_users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_content =[
            'page_title'      => __('User'),
            'module_name'     => __('User'),
            'sub_module_name' => __('Create'),
            'module_route'    => route('user.index'),
            'button_type'    => 'list'
        ];

        return view('user.create', compact('page_content'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $data = $this->user->storeUser($this->user->prepareUserData($request));
            $data->assignRole('user');

            $class = 'success';
            $message = __('User created successfully');
            return redirect()->route('user.index')->with('message', $message)->with('class', $class);
        }catch(\Exception $e){
            $class = 'danger';
            $message = (string) $e->getMessage();
            return redirect()->back()->with('message', $message)->with('class', $class);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $page_content =[
            'page_title'      => __('User'),
            'module_name'     => __('User'),
            'sub_module_name' => __('Show'),
            'module_route'    => route('user.index'),
            'button_type'    => 'list'
        ];

        return view('user.show', compact('page_content', 'user'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $page_content =[
            'page_title'      => __('User'),
            'module_name'     => __('User'),
            'sub_module_name' => __('Edit'),
            'module_route'    => route('user.index'),
            'button_type'    => 'list'
        ];
        return view('user.edit', compact('page_content', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try{
            $data = $this->user->prepareUserData($request, $user);
            $this->user->updateUser($data, $user);
            $class = 'success';
            $message = __('User updated successfully');
            return redirect()->route('user.index')->with('message', $message)->with('class', $class);
        }
        catch(\Exception $e){
            $class = 'danger';
            $message = __('Something went wrong');
            return redirect()->back()->with('message', $message)->with('class', $class);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            $this->user->deleteUser($user);
            $class = 'success';
            $message = __('User deleted successfully');
            return redirect()->route('user.index')->with('message', $message)->with('class', $class);
        }
        catch(\Exception $e){
            $class = 'danger';
            $message = __('Something went wrong');
            return redirect()->back()->with('message', $message)->with('class', $class);
        }
        
    }
}
