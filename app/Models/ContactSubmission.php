<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasUlids;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'ip_address',
    ];
}
