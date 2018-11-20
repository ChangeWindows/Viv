<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Release;

class TimelineController extends Controller
{
    public function index() {
        $releases = Release::orderBy('date', 'desc')->orderBy('build', 'desc')->orderBy('delta', 'desc')->orderBy('ring', 'desc')->paginate(50);

        $flights['pc']['skip'] = Release::where([['platform', '=', '1'], ['ring', '=', '1']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['active'] = Release::where([['platform', '=', '1'], ['ring', '=', '2']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['slow'] = Release::where([['platform', '=', '1'], ['ring', '=', '3']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['release'] = Release::where([['platform', '=', '1'], ['ring', '=', '5']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['target'] = Release::where([['platform', '=', '1'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['broad'] = Release::where([['platform', '=', '1'], ['ring', '=', '7']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['pc']['ltsc'] = Release::where([['platform', '=', '1'], ['ring', '=', '8']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['xbox']['skip'] = Release::where([['platform', '=', '3'], ['ring', '=', '1']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['xbox']['active'] = Release::where([['platform', '=', '3'], ['ring', '=', '2']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['xbox']['slow'] = Release::where([['platform', '=', '3'], ['ring', '=', '3']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['xbox']['preview'] = Release::where([['platform', '=', '3'], ['ring', '=', '4']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['xbox']['release'] = Release::where([['platform', '=', '3'], ['ring', '=', '5']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['xbox']['target'] = Release::where([['platform', '=', '3'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['server']['slow'] = Release::where([['platform', '=', '4'], ['ring', '=', '3']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['server']['target'] = Release::where([['platform', '=', '4'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['server']['ltsc'] = Release::where([['platform', '=', '4'], ['ring', '=', '8']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['iot']['slow'] = Release::where([['platform', '=', '6'], ['ring', '=', '3']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['iot']['target'] = Release::where([['platform', '=', '6'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['iot']['broad'] = Release::where([['platform', '=', '6'], ['ring', '=', '7']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['holo']['active'] = Release::where([['platform', '=', '5'], ['ring', '=', '2']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['holo']['slow'] = Release::where([['platform', '=', '5'], ['ring', '=', '3']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['holo']['target'] = Release::where([['platform', '=', '5'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['holo']['broad'] = Release::where([['platform', '=', '5'], ['ring', '=', '7']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['holo']['ltsc'] = Release::where([['platform', '=', '5'], ['ring', '=', '8']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['team']['target'] = Release::where([['platform', '=', '7'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['team']['broad'] = Release::where([['platform', '=', '7'], ['ring', '=', '7']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['mobile']['target'] = Release::where([['platform', '=', '2'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['mobile']['broad'] = Release::where([['platform', '=', '2'], ['ring', '=', '7']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        $flights['sdk']['target'] = Release::where([['platform', '=', '9'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();
        $flights['iso']['target'] = Release::where([['platform', '=', '8'], ['ring', '=', '6']])->orderBy('date', 'desc')->orderBy('build', 'desc')->first();

        return view('timeline', compact('releases', 'flights'));
    }
}