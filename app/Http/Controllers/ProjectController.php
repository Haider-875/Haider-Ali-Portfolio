<?php

namespace App\Http\Controllers;

use App\Services\ProjectRepository;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    public function __construct(
        protected ProjectRepository $projects
    ) {}

    /**
     * Display a listing of all showcased projects.
     */
    public function index(): View
    {
        $projects = $this->projects->all();
        $owner = config('portfolio.owner', []);

        return view('projects.index', [
            'projects' => $projects,
            'owner' => $owner,
        ]);
    }

    /**
     * Display the specified project case study.
     */
    public function show(string $slug): View
    {
        $project = $this->projects->findBySlug($slug);

        if (! $project) {
            abort(404, 'Project not found');
        }

        $nextProject = $this->projects->next($slug);
        $prevProject = $this->projects->prev($slug);

        return view('projects.show', [
            'project' => $project,
            'nextProject' => $nextProject,
            'prevProject' => $prevProject,
            'owner' => config('portfolio.owner', []),
        ]);
    }
}
