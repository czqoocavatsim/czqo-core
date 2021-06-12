<?php

namespace App\Models\ControllerBookings;

use App\Models\Users\UserAccount;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ControllerBookings\ControllerBookingsBan
 *
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan query()
 * @mixin \Eloquent
 */
class ControllerBookingsBan extends Model
{
    protected $fillable = [
        'user_id', 'reason', 'timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }
}
