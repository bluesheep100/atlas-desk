<?php

namespace App\Models;

use App\Interfaces\Validatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Task extends Model implements Validatable
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function rules(): array
    {
        return ['name' => ['required', 'min:5']];
    }

    public function iteration(): Relation
    {
        return $this->belongsTo(Iteration::class);
    }
}
