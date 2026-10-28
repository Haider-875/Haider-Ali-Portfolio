<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * Show the about page.
     */
    public function __invoke(): View
    {
        $owner = config('portfolio.owner', []);
        $skills = config('portfolio.skills', []);

        return view('about', [
            'owner' => $owner,
            'skills' => $skills,
        ]);
    }
}
