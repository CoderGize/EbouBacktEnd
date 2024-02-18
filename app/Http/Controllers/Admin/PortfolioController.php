<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Show;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function show_portfolio()
    {
        $portfolio = Portfolio::latest()->paginate(10);
        $serviceId = Service::all();

        $show = show::find(1);

        return view('admin.portfolio.show_portfolio' , compact('portfolio' , 'serviceId', 'show'));
    }

    public function add_portfolio(Request $request)
    {
        $portfolio = new Portfolio;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('portfolio', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('portfolio/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('portfolio/' . $imgname));

            $portfolio->img = $imgname;
        }

        $portfolio->service_id = $request->service_id;
        $portfolio->title_en = $request->title_en;
        $portfolio->title_fr = $request->title_fr;

        $portfolio->save();

        return redirect()->back()->with('message' , 'Portfolio Added');
    }

    public function update_portfolio(Request $request , $id)
    {
        $portfolio = Portfolio::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('portfolio', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('portfolio/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('portfolio/' . $imgname));

            $portfolio->img = $imgname;
        }

        $portfolio->service_id = $request->service_id;
        $portfolio->title_en = $request->title_en;
        $portfolio->title_fr = $request->title_fr;

        $portfolio->save();

        return redirect()->back()->with('message' , 'Portfolio Updated');

    }

    public function delete_portfolio($id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect()->back()->with('message' , 'Portfolio Deleted');

    }
}
