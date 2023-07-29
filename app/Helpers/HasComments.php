<?php

namespace App\Helpers;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasComments {
  public function commentsRelation(): MorphToMany
    {
      return $this->morphToMany(Comment::class, 'commentable')->withTimeStamps();
    }
    
    
    public function comments()
    {
      return $this->commentsRelation;
    }
    
    
    public function syncTags(array $comments)
    {
      $this->save();
      $this->commentsRelation()->sync($comments);
      $this->unsetRelation('commentsRelation');
    }
    public function removeTags()
    {
      $this->commentsRelation()->attach();
      $this->unsetRelation('commentsRelation');
    }
}