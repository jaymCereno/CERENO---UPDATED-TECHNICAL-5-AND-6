<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@email.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@email.com',
                'phone' => '09234567890'
            ],
            [
                'fullname' => 'Pedro Reyes',
                'email' => 'pedro@email.com',
                'phone' => '09345678901'
            ],
            [
                'fullname' => 'Ana Garcia',
                'email' => 'ana@email.com',
                'phone' => '09456789012'
            ],
            [
                'fullname' => 'Mark Lopez',
                'email' => 'mark@email.com',
                'phone' => '09567890123'
            ]
        ];

        return view('customers', compact('customers'));
    }
}