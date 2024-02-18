<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Show;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function show_faq()
    {
        $faq = Faq::latest()->paginate(10);

        $show = show::find(1);

        return view('admin.faq.show_faq' , compact('faq', 'show'));

    }

    public function add_faq(Request $request)
    {
        $faq = new Faq();

        $faq->quest_en = $request->quest_en;
        $faq->quest_fr = $request->quest_fr;
        $faq->ans_en = $request->ans_en;
        $faq->ans_fr = $request->ans_fr;

        $faq->save();

        return redirect()->back()->with('message' , 'FAQ Added');

    }

    public function update_faq(Request $request , $id)
    {
        $faq = Faq::find($id);

        $faq->quest_en = $request->quest_en;
        $faq->quest_fr = $request->quest_fr;
        $faq->ans_en = $request->ans_en;
        $faq->ans_fr = $request->ans_fr;

        $faq->save();

        return redirect()->back()->with('message' , 'FAQ Updated');

    }

    public function delete_faq($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect()->back()->with('message' , 'FAQ Deleted');
    }
}
