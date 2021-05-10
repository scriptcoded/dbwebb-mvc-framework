<?php

namespace App\Http\Controllers;

use App\Http\Classes\Game21\Game;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Game21Controller extends BaseController
{
    public function index(Request $request) {
        if (!$request->session()->has('game21')) {
            $request->session()->put('game21', new Game());
        }

        return view('game21', [
            'game' => $request->session()->get('game21')
        ]);
    }

    public function reset(Request $request) {
        $request->session()->forget('game21');

        return redirect()->route('game21');
    }

    public function setDice(Request $request) {
        $game = $request->session()->get('game21');
        $game->set_dice_count(intval($request->input('dice')));

        return redirect()->route('game21');
    }

    public function roll(Request $request) {
        $game = $request->session()->get('game21');
        $game->roll();

        return redirect()->route('game21');
    }

    public function stop(Request $request) {
        $game = $request->session()->get('game21');
        $game->play_computer();

        return redirect()->route('game21');
    }

    public function nextRound(Request $request) {
        $game = $request->session()->get('game21');
        $game->next_round();

        return redirect()->route('game21');
    }
}
