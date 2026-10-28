<?php

namespace App\Http\Controllers;

use App\Services\ProjectRepository;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct(
        protected ProjectRepository $projects
    ) {}

    /**
     * Show the portfolio home page.
     */
    public function __invoke(): View
    {
        $featuredProjects = $this->projects->featured();
        $skills = config('portfolio.skills', []);
        $owner = config('portfolio.owner', []);

        return view('home', [
            'owner' => $owner,
            'skills' => $skills,
            'featuredProjects' => $featuredProjects,
        ]);
    }
}
