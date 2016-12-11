<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TestData extends Model
{
    protected $table = 'test_data';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
}
