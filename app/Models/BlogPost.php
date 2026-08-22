<?php

namespace App\Models;

use App\BlogPostLanguage;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

#[Fillable(['title', 'content', 'lang', 'published_at'])]
class BlogPost extends Model
{
    public $timestamps = false;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'content' => 'array',
            'lang' => BlogPostLanguage::class,
            'published_at' => 'datetime',
        ];
    }

    /**
     * Get the tags assigned to the blog post.
     *
     * @return MorphToMany<Tag, $this>
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'model', 'taggables');
    }
}
