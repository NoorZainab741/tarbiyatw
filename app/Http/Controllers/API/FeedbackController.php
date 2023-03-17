<?php

namespace App\Http\Controllers\API;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        $feedback = Feedback::create($request->except('attachment'));

        if ($request->hasFile('attachment')) {
            $image_path = $request->file('attachment')->store('feedback/' . $feedback->id . '/attachments', 'public');
            $feedback->update([
                'attachment' => $image_path
            ]);
        }
        if($feedback)
        {
            return response()->json(['feedback' => 'yes']);
        }
        else
        {
            return response()->json(['feedback' => 'no']);
        }
    }
}
