<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Brandee;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Landing;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Social;
use App\Models\Subscriber;
use App\Models\Show;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAbout()
    {
        $about = About::find(1);

        return response()->json($about);
    }

    public function getLanding()
    {
        $landing = Landing::find(1);

        return response()->json($landing);

    }

    public function getCounter()
    {
        $counter = Counter::find(1);

        return response()->json($counter);

    }

    public function getPartner()
    {
        $partner = Partner::all();

        return response()->json($partner);
    }

    public function getService()
    {
        $service = Service::all();

        return response()->json($service);
    }

    public function getPortfolio()
    {
        $portfolio = Portfolio::all();

        return response()->json($portfolio);
    }

    public function getTestimonial()
    {
        $testimonial = Testimonial::all();

        return response()->json($testimonial);
    }

    public function getBlog()
    {
        $blog = Blog::all();

        return response()->json($blog);
    }

    public function getBrandee()
    {
        $brandee = Brandee::all();

        return response()->json($brandee);
    }

    public function getTeam()
    {
        $team = Team::all();

        return response()->json($team);
    }

    public function getFaq()
    {
        $faq = Faq::all();

        return response()->json($faq);
    }

    public function getSubscriber()
    {
        $subscriber = Subscriber::all();

        return response()->json($subscriber);
    }

    public function getSocial()
    {
        $social = Social::find(1);

        return response()->json($social);
    }

    public function addSubscriber(Request $request)
    {
        $subscriber = new subscriber;

        $subscriber->email = $request->email;

        $subscriber->save();

        if($subscriber->save())
        {
            return redirect('/#footer')->with('message', 'You have been added to the List');
        }
        else
        {
            return redirect('/#footer')->with('message', 'Internal Server Error');
        }

    }

    public function getShow()
    {
        $show = show::find(1);

        return response()->json($show);
    }
}
