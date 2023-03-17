<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        $about_us = AboutUs::get();
        return view('about_us.index', compact('about_us'));
    }

    public function create()
    {
        return view('about_us.create');
    }

    public function store(Request $request)
    {
        $about_us = AboutUs::create($request->all());

        return redirect(route('about_us.index'));
    }

    public function show(AboutUs $about_us)
    {

        return view('about_us.show', compact('about_us'));
    }

    public function edit(AboutUs $about_u)
    {
        return view('about_us.edit', compact('about_u'));
    }

    public function update(Request $request, AboutUs $about_u)
    {
        $about_u->update($request->all());

        return redirect(route('about_us.index'));
    }

    public function destroy(AboutUs $about_us)
    {
        $about_us->delete();
        return redirect(route('about_us.index'));
    }

}
