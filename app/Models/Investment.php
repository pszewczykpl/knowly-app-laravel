<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'group_code',
        'group_name',
        'name',
        'code',
        'code_owu',
        'code_toil',
        'is_subscriptions',
        'subscription_code',
        'subscription_status',
        'subscription_date_from',
        'subscription_date_to',
        'kind',
        'type',
        'partner_name',
        'partner_code',
        'min_age',
        'max_age',
        'period_of_insurance',
        'sell_status',
        'published_at',
    ];

}
