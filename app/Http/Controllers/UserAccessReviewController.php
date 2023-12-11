<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserReview;
use Illuminate\Http\Request;

class UserAccessReviewController extends Controller
{
    public function index()
    {

 $user_reviews = UserReview::all();
        return view('index',compact('user_reviews'));
    }



    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'staff_no' => 'required',
            'username' => 'required',
            'full_name' => 'required',
        ]);

       $id = UserReview::create($request->all());

        return redirect()->route('access.index', ['item_id'=> $id] )->with('success','record created successfully.');
    }
    public function edit(UserReview $userReview)
    {

        $user_reviews_detail= UserReview::where('id',$userReview->id)-get();
        return view('edit',compact('user_reviews_detail'));
    }
    public function view($item_id)
    {
        //get the item model using the id

       $user_review = UserReview::find($item_id);

        return view('view',compact('user_review')) ;
    }
    public function invoice()
    {

 $user_reviews = UserReview::all();
        return view('invoice',compact('user_reviews'));
    }


}
