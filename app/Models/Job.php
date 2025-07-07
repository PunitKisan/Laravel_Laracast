<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];
}
