<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'fullname' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'fullname' => 'Sarah Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'fullname' => 'Michael Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'fullname' => 'Anna Santos',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff02',
                'fullname' => 'Mark Lopez',
                'role' => 'Staff'
            ]
        ];

        return view('users', compact('users'));
    }
}