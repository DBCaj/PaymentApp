<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use App\Helpers\HasComments;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
{
    use HasFactory, HasComments;
    
    use SoftDeletes;
    
    protected $table = 'users';
    protected $fillable = [
      'id',
      'name',
      'age',
      'created_at',
      'updated_at',
      ];
      
    // public function comments(): MorphToMany
    // {
    //   return $this->morphToMany(Comment::class, 'commentable');
    // }
}
