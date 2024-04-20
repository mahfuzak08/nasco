<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Page extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = ['page_name','section_name','key','value','value2','value3','user_id', 'status', 'authorize_by'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
