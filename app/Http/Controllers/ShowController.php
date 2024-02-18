<?php

namespace App\Http\Controllers;
use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function partner(Request $request)
    {

        $showall = show::find(1);

        $showall->partner_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'partner Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'partner Section Hidden');
        }
    }

    public function testimonial(Request $request)
    {

        $showall = show::find(1);

        $showall->testimonial_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'testimonial Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'testimonial Section Hidden');
        }
    }
    public function portfolio(Request $request)
    {

        $showall = show::find(1);

        $showall->portfolio_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'portfolio Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'portfolio Section Hidden');
        }
    }
    public function blog(Request $request)
    {

        $showall = show::find(1);

        $showall->blog_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'Blog Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'Blog Section Hidden');
        }
    }
    public function team(Request $request)
    {

        $showall = show::find(1);

        $showall->team_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'team Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'team Section Hidden');
        }
    }
    public function faq(Request $request)
    {

        $showall = show::find(1);

        $showall->faq_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'faq Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'faq Section Hidden');
        }
    }
    public function counter(Request $request)
    {

        $showall = show::find(1);

        $showall->counter_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'counter Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'counter Section Hidden');
        }
    }
    public function brandee(Request $request)
    {

        $showall = show::find(1);

        $showall->brandee_sh = $request->datash;

        $showall->save();

        if ($request->datash == 1)
        {
            return redirect()->back()->with('message', 'brandee Section Visible');
        }
        else
        {
            return redirect()->back()->with('message', 'brandee Section Hidden');
        }
    }
}
