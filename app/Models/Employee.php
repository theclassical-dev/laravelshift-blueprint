<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $identification
 * @property \Carbon\Carbon $birth
 * @property int $salary
 * @property string $martial_status
 * @property float $bonus
 * @property int $order
 * @property int $department_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identification',
        'birth',
        'salary',
        'martial_status',
        'bonus',
        'order',
        'department_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'birth' => 'datetime',
        'bonus' => 'decimal:2',
        'order' => 'integer',
        'department_id' => 'integer',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(\App\Models\Project::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfo()
    {
        return $this->hasOne(\App\Models\ContactInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }
}
