<?php

namespace App\Models\ControllerBookings;

use App\Models\Network\VatsimPosition;
use App\Models\Users\UserAccount;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ControllerBookings\ControllerBooking
 *
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking query()
 * @mixin \Eloquent
 */
class ControllerBooking extends Model
{
    protected $fillable = [
        'user_id', 'position_id', 'start_time', 'end_time', 'notes',
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }

    public function position()
    {
        return $this->belongsTo(VatsimPosition::class, 'position_id');
    }
}
