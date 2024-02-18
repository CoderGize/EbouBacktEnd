<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Show;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function show_counter()
    {
        $counter = Counter::find(1);

        $show = show::find(1);

        return view('admin.counter.show_counter' , compact('counter', 'show'));
    }

    public function update_counter($id)
    {
        $counter = Counter::find($id);

        return view('admin.counter.update_counter' , compact('counter'));
    }

    public function update_counter_confirm(Request $request , $id)
    {
        $counter = Counter::find($id);

        $counter->number_1 = $request->number_1;
        $counter->number_2 = $request->number_2;
        $counter->number_3 = $request->number_3;
        $counter->number_4 = $request->number_4;

        $counter->text_1_en = $request->text_1_en;
        $counter->text_1_fr = $request->text_1_fr;
        $counter->text_2_en = $request->text_2_en;
        $counter->text_2_fr = $request->text_2_fr;
        $counter->text_3_en = $request->text_3_en;
        $counter->text_3_fr = $request->text_3_fr;

        $counter->save();

        return redirect('/admin/show_counter')->with('message' , 'Counter Updated');
    }
}
