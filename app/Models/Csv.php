<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    use HasFactory;
    protected $fillable = [
        'NPI',
        'Provider Organization Name (Legal Business Name)',
        'Provider Last Name (Legal Name)',
        'Provider First Name',
        'Provider Middle Name',
        'Provider Other Organization Name'];
}
