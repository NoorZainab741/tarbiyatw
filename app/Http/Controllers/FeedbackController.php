<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::get();
        return view('feedback.index',compact('feedbacks'));
    }

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $feedback = Feedback::create($request->except('attachment'));

        if ($request->hasFile('attachment'))
        {
            $image_path = $request->file('attachment')->store('feedback/'.$feedback->id.'/attachments', 'public');
            $feedback->update([
                'attachment' => $image_path
            ]);
        }

//        $admin = Admin::where('email', 'admin@system.com')->first();
//        $admin->notify(new PostCreationNotification($post));
        return redirect(route('feedback.index'));    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.show', compact('feedback'));
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.edit', compact('feedback'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($request->except('attachment'));
        if ($request->hasFile('attachment'))
        {
            $image_path = $request->file('attachment')->store('feedback/'.$feedback->id.'/attachments', 'public');
            $feedback->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('feedbacks.index'));
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return redirect()->back();
    }
    public function changeStatus(Feedback $feedback){

        // dd($adminShop->status);
        if($feedback->status==1){
            // dd('verified');
            $feedback->update([
                'status'=> '0'
            ]);
        }
        else{
            // dd('unverified');
            $feedback->update([
                'status'=> '1'
            ]);
        }
        return redirect()->back();

    }
}
