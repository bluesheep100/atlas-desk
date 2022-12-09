<?php

namespace App\Models;

use App\Interfaces\Validatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Task extends Model implements Validatable
{
    use HasFactory;

    protected $fillable = ['iteration_id', 'user_id', 'name', 'description', 'status'];

    public static function rules(): array
    {
        return [
            'name' => ['required', 'min:5'],
            'description' => ['present'],
            'status' => ['in:open,progress,hold,closed']
        ];
    }

    public function user(): Relation
    {
        return $this->belongsTo(User::class);
    }

    public function iteration(): Relation
    {
        return $this->belongsTo(Iteration::class);
    }

    public function scopeStatus(Builder $query, $status): Builder
    {
        return $query->where('status', $status);
    }
}
