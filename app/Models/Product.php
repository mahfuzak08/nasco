<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Product extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable =['name', 'image', 'cat_id', 'details', 'specifications', 'features', 'price', 'user_id'];
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
