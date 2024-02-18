<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function show_team()
    {
        $team = Team::latest()->paginate(10);

        $show = show::find(1);

        return view('admin.team.show_team' , compact('team', 'show'));
    }

    public function add_team(Request $request)
    {
        $team = new Team;

        $img = $request->img;
        $team->name = $request->name;
        $team->role_en = $request->role_en;
        $team->role_fr = $request->role_fr;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->insta = $request->insta;

        if($img)
        {
                $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

                //Save the original image
                $request->img->move('team', $imgname);

                //change the image quality using Intervention Image
                $img = Image::make(public_path('team/' . $imgname));

                $img->encode($img->extension, 10)->save(public_path('team/' . $imgname));

                $team->img = $imgname;
        }

        $team->save();

        return redirect('admin/show_team')->with('message' , 'Team Added');
    }

    public function update_team($id)
    {
        $team = Team::find($id);

        return view('admin.team.update_team' , compact('team'));

    }

    public function update_team_confirm(Request $request, $id)
    {
        $team = Team::find($id);

        $img = $request->img;
        $team->name = $request->name;
        $team->role_en = $request->role_en;
        $team->role_fr = $request->role_fr;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->insta = $request->insta;

        if($img)
        {
        $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

        //Save the original image
        $request->img->move('team', $imgname);

        //change the image quality using Intervention Image
        $img = Image::make(public_path('team/' . $imgname));

        $img->encode($img->extension, 10)->save(public_path('team/' . $imgname));

        $team->img = $imgname;
        }

        $team->save();

        return redirect('admin/show_team')->with('message' , 'Team Updated');
    }

    public function delete_team($id)
    {
        $team = Team::find($id);

        $team->delete();

        return redirect()->back()->with('message' , 'Delete Team');
    }
}
