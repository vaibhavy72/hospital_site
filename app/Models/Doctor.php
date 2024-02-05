<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'service_id',
        'specialty',
        'bio',
        'status',
        'image',
        'slug',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getStatusAttribute($attribute)
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
        ][$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 0);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('specialty', 'like', '%' . $search . '%')
                ->orWhere('bio', 'like', '%' . $search . '%');
        });
    }

    public function getDoctorImageAttribute()
    {
        return ($this->image) ? asset('storage/' . $this->image) : asset('storage/images/doctor.png');
    }

    public function getDoctorServiceAttribute()
    {
        return ($this->service_id) ? $this->service->name : 'General';
    }

    public function getDoctorDepartmentAttribute()
    {
        return $this->department->name;
    }

    public function getDoctorStatusAttribute()
    {
        return ($this->status == 1) ? 'Active' : 'Inactive';
    }

    public function getDoctorSpecialtyAttribute()
    {
        return $this->specialty;
    }

    public function getDoctorBioAttribute()
    {
        return $this->bio;
    }

    public function getDoctorSlugAttribute()
    {
        return $this->slug;
    }
}