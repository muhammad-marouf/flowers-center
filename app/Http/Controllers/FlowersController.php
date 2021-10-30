<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlowersRequest;
use App\Models\Branch;
use App\Models\Flower;
use App\Models\Occasion;
use Illuminate\Http\Request;

class FlowersController extends Controller
{
    public function index(Request $request)
    {
        $occasion = $request->input('occasion');
        $flowers = Flower::when($occasion, function ($q) use ($occasion) {
            $q->where('occasion_id', $occasion);
        })
            ->with('occasion', 'branch')
            ->get();
        $occasions = Occasion::all();
        return view('flowers.index', compact('flowers', 'occasions'));
    }

    public function create()
    {
        $occasions = Occasion::all();
        $branches = Branch::all();

        return view('flowers.create', compact('occasions', 'branches'));
    }

    public function store(FlowersRequest $request)
    {
        $input = $request->validated();
        $image = $request->file('image');
        $uploads_dir = storage_path('app/public/flowers');
        is_dir($uploads_dir) || mkdir($uploads_dir);
        $input['image'] = time() . '.' . $image->getClientOriginalExtension();
        $image->move($uploads_dir, $input['image']);

        Flower::create($input);

        return redirect('flowers/create');
    }
}
