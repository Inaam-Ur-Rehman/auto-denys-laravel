<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Product extends Model
{
    use HasFactory;
    use FilterQueryString;

    protected $guarded = [];
    protected $filters = ['in', 'sort'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function body_work()
    {
        return $this->belongsTo(BodyWork::class);
    }
    public function emission()
    {
        return $this->belongsTo(Emission::class);
    }



    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
