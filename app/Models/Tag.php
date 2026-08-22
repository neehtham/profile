<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

#[Fillable(['name'])]
class Tag extends Model
{
    public $timestamps = false;

    /**
     * Get the blog posts assigned this tag.
     *
     * @return MorphToMany<BlogPost, $this>
     */
    public function blogPosts(): MorphToMany
    {
        return $this->morphedByMany(BlogPost::class, 'model', 'taggables');
    }

    /**
     * Get the projects assigned this tag.
     *
     * @return MorphToMany<Project, $this>
     */
    public function projects(): MorphToMany
    {
        return $this->morphedByMany(Project::class, 'model', 'taggables');
    }
}
