<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brandee;
use App\Models\Show;
use Illuminate\Http\Request;

class BrandeeController extends Controller
{
    public function show_brandee()
    {
        $brandee = Brandee::latest()->paginate(10);

        $show = show::find(1);

        return view('admin.brandee.show_brandee' , compact('brandee', 'show'));
    }

    public function add_brandee(Request $request)
    {
        $brandee = new Brandee();

        $brandee->title_en = $request->title_en;
        $brandee->title_fr = $request->title_fr;

        $brandee->save();

        return redirect()->back()->with('message' , 'Brandee Added');
    }

    public function update_brandee(Request $request , $id)
    {
        $brandee = Brandee::find($id);

        $brandee->title_en = $request->title_en;
        $brandee->title_fr = $request->title_fr;

        $brandee->save();

        return redirect()->back()->with('message' , 'Brandee Updated');

    }

    public function delete_brandee($id)
    {
        $brandee = Brandee::find($id);

        $brandee->delete();

        return redirect()->back()->with('message' , 'Brandee Delete');

    }
}
