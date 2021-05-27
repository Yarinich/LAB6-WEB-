<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function forLend() {
        return view('Lend');
    }

    public function forCP() {
        return view('ConteinerPage');
    }

    public function forIP() {
        return view('InfoPage');
    }

    public function example() {
        return view('example');
    }



    public function check(Request $request) {
        $valid = $request->validate([
            'username' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ]);
//        dd($request);

        $review = new MyModel();
        $review->username = $request->input('username');
        $review->email = $request->input('email');
        $review->message = $request->input('message');

        $review->save();



        return redirect()->route('yourReview');

    }

    public function review() {
        return view('yourReview', ['reviews' => MyModel::all()]);
    }
}
