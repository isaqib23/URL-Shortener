<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests\UrlStoreRequest;
use App\Models\URLShortener;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $codes = URLShortener::all();

        return view('welcome', compact('codes'));
    }

    /**
     * @param UrlStoreRequest $request
     * @return JsonResponse
     */
    public function store(UrlStoreRequest $request)
    {
        $validatedData = $request->validated();
        URLShortener::create($validatedData);

        return redirect()->back();
    }
}
