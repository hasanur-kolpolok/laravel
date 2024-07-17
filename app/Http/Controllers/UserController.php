<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contacts;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all users with their contacts(One to One Relationship) && Joining the two tables
        // $users = User::with('contact')->get();

        //specific data with user id from the users table
        // $user = User::with('contact')->find('9c850835-9fe0-4457-9211-2c02681b408c');
        // echo $user->name;
        // return $users;


        //if we want to retrieve data from the contacts table
        // $users = User::withWhereHas('contact', function($query){
        //     $query->where('village', 'East Lilly');
        // })->get();

        //if we want to search data from both tables but show students table only
        // $users = User::where('email','qkoepp@example.com')->whereHas('contact', function($query){
        //     $query->where('city', 'Bashirianbury');
        // })->get();

        //many to many relationship
        // $users = User::find('9c8af98b-13b3-4788-82a6-80fecde699a9');


        //has one through relationship'

        // $users = User::with('userPhone')->get();

        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::create([
            'name' => 'John Doe',
            'profession' => 'Software Developer',
            'email' => 'johndow@yahoo.com',
            'phone' => '08012345678',
            'address' => 'No 1, John Doe Street, Lagos',

        ]);
        $student = Contacts::create([
            'village' => 'East Lilly',
            'thana' => 'East',
            'city' => 'Bashirianbury',
            'district' => 'Lagos',
            'user_id' => $user->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
