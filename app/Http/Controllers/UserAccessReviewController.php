<?php

namespace App\Http\Controllers;

use App\Models\UserReview;
use Illuminate\Http\Request;

class UserAccessReviewController extends Controller
{
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'staff_no' => 'required',
            'username' => 'required',
            'full_name' => 'required'
        ]);

        UserReview::create($request->all());

        return redirect()->route('home')->with('success','record created successfully.');
    }
}
