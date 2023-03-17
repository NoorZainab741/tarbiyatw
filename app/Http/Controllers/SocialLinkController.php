<?php

namespace App\Http\Controllers;

use App\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $social_links = SocialLink::get();
        return view('social_link.index', compact('social_links'));
    }

    public function create()
    {
        return view('social_link.create');
    }

    public function store(Request $request)
    {
        $social_link = SocialLink::create($request->all());

        return redirect(route('social_links.index'));
    }

    public function show(SocialLink $social_link)
    {

        return view('social_link.show', compact('social_link'));
    }

    public function edit(SocialLink $social_link)
    {
        return view('social_link.edit', compact('social_link'));
    }

    public function update(Request $request, SocialLink $social_link)
    {
        $social_link->update($request->all());

        return redirect(route('social_links.index'));
    }

    public function destroy(SocialLink $social_link)
    {
        $social_link->delete();
        return redirect(route('social_link.index'));
    }
}
