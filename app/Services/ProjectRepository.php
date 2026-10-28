<?php

namespace App\Services;

class ProjectRepository
{
    /**
     * Get all projects.
     *
     * @return array<int, array<string, mixed>>
     */
    public function all(): array
    {
        return config('portfolio.projects', []);
    }

    /**
     * Get featured projects for home showcase.
     *
     * @return array<int, array<string, mixed>>
     */
    public function featured(): array
    {
        return array_values(array_filter($this->all(), fn ($p) => ! empty($p['featured'])));
    }

    /**
     * Find a single project by its URL slug.
     *
     * @return array<string, mixed>|null
     */
    public function findBySlug(string $slug): ?array
    {
        foreach ($this->all() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    /**
     * Find the next project in the sequence.
     *
     * @return array<string, mixed>|null
     */
    public function next(string $currentSlug): ?array
    {
        $all = $this->all();
        $count = count($all);

        foreach ($all as $index => $project) {
            if ($project['slug'] === $currentSlug) {
                $nextIndex = ($index + 1) % $count;

                return $all[$nextIndex];
            }
        }

        return null;
    }

    /**
     * Find the previous project in the sequence.
     *
     * @return array<string, mixed>|null
     */
    public function prev(string $currentSlug): ?array
    {
        $all = $this->all();
        $count = count($all);

        foreach ($all as $index => $project) {
            if ($project['slug'] === $currentSlug) {
                $prevIndex = ($index - 1 + $count) % $count;

                return $all[$prevIndex];
            }
        }

        return null;
    }
}
