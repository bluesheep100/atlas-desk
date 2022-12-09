<?php

namespace App\Models;

use App\Interfaces\Validatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Iteration extends Model implements Validatable
{
    use HasFactory;

    protected $fillable = ['name', 'count'];

    public static function rules(): array
    {
        return ['name' => ['required', 'min:5']];
    }

    public function project(): Relation
    {
        return $this->belongsTo(Project::class);
    }

    public function tasks(): Relation
    {
        return $this->hasMany(Task::class);
    }
}
