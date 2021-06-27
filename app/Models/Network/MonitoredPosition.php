<?php

namespace App\Models\Network;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

// A position monitored by the activity bot
/**
 * App\Models\Network\MonitoredPosition
 *
 * @property int $id
 * @property string $identifier
 * @property int $staff_only
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Network\SessionLog[] $sessions
 * @property-read int|null $sessions_count
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition whereIdentifier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition whereStaffOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonitoredPosition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MonitoredPosition extends Model
{
    use LogsActivity;

    protected $fillable = [
        'id', 'identifier', 'staff_only', 'polygon_coordinates',
    ];

    public function sessions()
    {
        return $this->hasMany(SessionLog::class);
    }

    public function lastOnline()
    {
        $session = $this->sessions->last();
        if (!$session) {
            return null;
        }

        return Carbon::create($session->session_end);
    }

    public function activeSession()
    {
        if ($session = $this->sessions->where('session_end', null)->first()) {
            return $session;
        } else {
            return null;
        }
    }
}
