<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function show()
    {
        $reviews = Review::all();

        return view('reviews', compact('reviews'));
    }

    public function store(ReviewRequest $request)
    {
        Review::create($request->validated());

        return redirect('reviews');
    }
}
