<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Community\Discord{
/**
 * App\Models\Community\Discord\DiscordBan
 *
 * @property int $id
 * @property int $user_id
 * @property int $moderator_id
 * @property string|null $deleted_at
 * @property string $reason
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon|null $end_time
 * @property int|null $discord_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read UserAccount $moderator
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereDiscordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiscordBan whereUserId($value)
 * @mixin \Eloquent
 */
	class DiscordBan extends \Eloquent {}
}

namespace App\Models\ControllerBookings{
/**
 * App\Models\ControllerBookings\ControllerBooking
 *
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBooking query()
 * @mixin \Eloquent
 */
	class ControllerBooking extends \Eloquent {}
}

namespace App\Models\ControllerBookings{
/**
 * App\Models\ControllerBookings\ControllerBookingsBan
 *
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerBookingsBan query()
 * @mixin \Eloquent
 */
	class ControllerBookingsBan extends \Eloquent {}
}

namespace App\Models\ControllerBookings{
/**
 * App\Models\ControllerBookings\ReservedBookingSlot
 *
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ReservedBookingSlot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservedBookingSlot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservedBookingSlot query()
 * @mixin \Eloquent
 */
	class ReservedBookingSlot extends \Eloquent {}
}

namespace App\Models\Events{
/**
 * App\Models\Events\ControllerApplication
 *
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property string $start_availability_timestamp
 * @property string $end_availability_timestamp
 * @property string|null $comments
 * @property string $submission_timestamp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Events\Event $event
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereEndAvailabilityTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereStartAvailabilityTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereSubmissionTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ControllerApplication whereUserId($value)
 * @mixin \Eloquent
 */
	class ControllerApplication extends \Eloquent {}
}

namespace App\Models\Events{
/**
 * App\Models\Events\CtpSignUp
 *
 * @property int $id
 * @property int $user_id
 * @property string $availability
 * @property string $times
 * @property string $submitted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp query()
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CtpSignUp whereUserId($value)
 * @mixin \Eloquent
 */
	class CtpSignUp extends \Eloquent {}
}

namespace App\Models\Events{
/**
 * App\Models\Events\Event
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $start_timestamp
 * @property \Illuminate\Support\Carbon $end_timestamp
 * @property int $user_id
 * @property string $description
 * @property string|null $image_url
 * @property int $controller_applications_open
 * @property string|null $departure_icao
 * @property string|null $arrival_icao
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $allow_not_certified_sign_ups
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Events\ControllerApplication[] $controllerApplications
 * @property-read int|null $controller_applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Events\EventUpdate[] $updates
 * @property-read int|null $updates_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Query\Builder|Event onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAllowNotCertifiedSignUps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereArrivalIcao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereControllerApplicationsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDepartureIcao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Event withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Event withoutTrashed()
 * @mixin \Eloquent
 */
	class Event extends \Eloquent {}
}

namespace App\Models\Events{
/**
 * App\Models\Events\EventUpdate
 *
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property string|null $title
 * @property string $content
 * @property string $created_timestamp
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Events\Event $event
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereCreatedTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventUpdate whereUserId($value)
 * @mixin \Eloquent
 */
	class EventUpdate extends \Eloquent {}
}

namespace App\Models\Feedback{
/**
 * App\Models\Feedback\FeedbackSubmission
 *
 * @var id                    Incremental ID of feedback.
 * @var user_id               User foreign key for whoever submitted the feedback.
 * @var type_id               Feedback type foreign key for the type of feedback it is.
 * @var submission_content    Content of the submission in Markdown format.
 * @var permission_to_publish Has the user given permission for this feedback to be published?
 * @var slug                  URL slug of type.
 * @var created_at            Time feedback submitted at.
 * @var updated_at            Time feedback last updated at.
 * @property int $id
 * @property string $slug
 * @property int $user_id
 * @property int $type_id
 * @property string $submission_content
 * @property int $permission_to_publish
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Feedback\FeedbackTypeFieldSubmission[] $fields
 * @property-read int|null $fields_count
 * @property-read \App\Models\Feedback\FeedbackType $type
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission newQuery()
 * @method static \Illuminate\Database\Query\Builder|FeedbackSubmission onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission wherePermissionToPublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereSubmissionContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackSubmission whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|FeedbackSubmission withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FeedbackSubmission withoutTrashed()
 * @mixin \Eloquent
 */
	class FeedbackSubmission extends \Eloquent {}
}

namespace App\Models\Feedback{
/**
 * App\Models\Feedback\FeedbackType
 *
 * @var id                 Incremental ID of the feedback type.
 * @var name               Name of the feedback type.
 * @var description        Description of the feedback type.
 * @var visible_to_role_id ID of role that can view submissions of this type.
 * @var slug               URL slug of type.
 * @var created_at         Time created at.
 * @var updated_at         Time last updated at.
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property int $visible_to_role_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Feedback\FeedbackTypeField[] $fields
 * @property-read int|null $fields_count
 * @property-read Role $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Feedback\FeedbackSubmission[] $submissions
 * @property-read int|null $submissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackType whereVisibleToRoleId($value)
 * @mixin \Eloquent
 */
	class FeedbackType extends \Eloquent {}
}

namespace App\Models\Feedback{
/**
 * App\Models\Feedback\FeedbackTypeField
 *
 * @var id         Incremental ID of the feedback type field.
 * @var name       Name of the feedback type field.
 * @var required   Is the field required to submit feedback of this type?
 * @var type_id    ID of feedback type this field belongs to.
 * @var created_at Time created at.
 * @var updated_at Time last updated at.
 * @property int $id
 * @property int $type_id
 * @property string $name
 * @property int $required
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Feedback\FeedbackType $type
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class FeedbackTypeField extends \Eloquent {}
}

namespace App\Models\Feedback{
/**
 * App\Models\Feedback\FeedbackTypeFieldSubmission
 *
 * @var id            Incremental ID of the feedback type field submission.
 * @var name          Name of the feedback type field.
 * @var type_id       ID of feedback type this field belongs to.
 * @var submission_id ID of feedback submission this belongs to.
 * @var content       Content of submission for field.
 * @var created_at    Time created at.
 * @var updated_at    Time last updated at.
 * @property int $id
 * @property int $type_id
 * @property int $submission_id
 * @property string $name
 * @property string $content
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Feedback\FeedbackSubmission $submission
 * @property-read \App\Models\Feedback\FeedbackType $type
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereSubmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedbackTypeFieldSubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class FeedbackTypeFieldSubmission extends \Eloquent {}
}

namespace App\Models\Network{
/**
 * App\Models\Network\MonthlyHours
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyHours newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyHours newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyHours query()
 * @mixin \Eloquent
 */
	class MonthlyHours extends \Eloquent {}
}

namespace App\Models\Network{
/**
 * App\Models\Network\SessionLog
 *
 * @property int $id
 * @property int $cid
 * @property \Illuminate\Support\Carbon $session_start
 * @property \Illuminate\Support\Carbon|null $session_end
 * @property float|null $duration
 * @property int $emails_sent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $monitored_position_id
 * @property int|null $roster_member_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Network\MonitoredPosition|null $position
 * @property-read RosterMember|null $rosterMember
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereEmailsSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereMonitoredPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereRosterMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereSessionEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereSessionStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SessionLog extends \Eloquent {}
}

namespace App\Models\News{
/**
 * App\Models\News\Announcement
 *
 * @property int $id
 * @property int $user_id
 * @property string $target_group
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property string|null $reason_for_sending
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereReasonForSending($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereTargetGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUserId($value)
 * @mixin \Eloquent
 */
	class Announcement extends \Eloquent {}
}

namespace App\Models\News{
/**
 * App\Models\News\CarouselItem
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CarouselItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarouselItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarouselItem query()
 * @mixin \Eloquent
 */
	class CarouselItem extends \Eloquent {}
}

namespace App\Models\News{
/**
 * App\Models\News\HomeNewControllerCert
 *
 * @property int $id
 * @property int $controller_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $timestamp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read UserAccount $controller
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereControllerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeNewControllerCert whereUserId($value)
 * @mixin \Eloquent
 */
	class HomeNewControllerCert extends \Eloquent {}
}

namespace App\Models\News{
/**
 * App\Models\News\News
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property int $show_author
 * @property string|null $image
 * @property string|null $content
 * @property string|null $summary
 * @property \Illuminate\Support\Carbon $published
 * @property \Illuminate\Support\Carbon|null $edited
 * @property int $visible
 * @property int $email_level
 * @property int $certification
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCertification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereEdited($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereEmailLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereShowAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereVisible($value)
 * @mixin \Eloquent
 */
	class News extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\AtcResource
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @property string|null $description
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $atc_only
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource query()
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereAtcOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AtcResource whereUserId($value)
 * @mixin \Eloquent
 */
	class AtcResource extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\CustomPage
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $content
 * @property string|null $description
 * @property string|null $thumbnail
 * @property int $response_form_enabled
 * @property string|null $response_form_email
 * @property string|null $response_form_title
 * @property string|null $response_form_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\CustomPagePermission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Publications\CustomPageResponse[] $responses
 * @property-read int|null $responses_count
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereResponseFormDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereResponseFormEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereResponseFormEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereResponseFormTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CustomPage extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\CustomPagePermission
 *
 * @property int $id
 * @property int $role_id
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Role $role
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPagePermission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CustomPagePermission extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\CustomPageResponse
 *
 * @property int $id
 * @property int $page_id
 * @property int $user_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Publications\CustomPage $page
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageResponse whereUserId($value)
 * @mixin \Eloquent
 */
	class CustomPageResponse extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\MeetingMinutes
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes newQuery()
 * @method static \Illuminate\Database\Query\Builder|MeetingMinutes onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes query()
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MeetingMinutes whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|MeetingMinutes withTrashed()
 * @method static \Illuminate\Database\Query\Builder|MeetingMinutes withoutTrashed()
 * @mixin \Eloquent
 */
	class MeetingMinutes extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\Policy
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newQuery()
 * @method static \Illuminate\Database\Query\Builder|Policy onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Policy withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Policy withoutTrashed()
 * @mixin \Eloquent
 */
	class Policy extends \Eloquent {}
}

namespace App\Models\Publications{
/**
 * App\Models\Publications\UploadedImage
 *
 * @property int $id
 * @property int $user_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage newQuery()
 * @method static \Illuminate\Database\Query\Builder|UploadedImage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UploadedImage whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|UploadedImage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UploadedImage withoutTrashed()
 * @mixin \Eloquent
 */
	class UploadedImage extends \Eloquent {}
}

namespace App\Models\Roster{
/**
 * App\Models\Roster\RosterMember
 *
 * @property int $id
 * @property int $cid
 * @property int $user_id
 * @property string $certification
 * @property string|null $date_certified
 * @property int $active
 * @property float|null $monthly_hours
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereCertification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereCid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereDateCertified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereMonthlyHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterMember whereUserId($value)
 * @mixin \Eloquent
 */
	class RosterMember extends \Eloquent {}
}

namespace App\Models\Roster{
/**
 * App\Models\Roster\SoloCertification
 *
 * @property int $id
 * @property int $roster_member_id
 * @property \Illuminate\Support\Carbon|null $expires
 * @property int $instructor_id
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $expiry_notification_sent
 * @property \Illuminate\Support\Carbon|null $expiry_notification_time
 * @property-read UserAccount $instructor
 * @property-read \App\Models\Roster\RosterMember $rosterMember
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification query()
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereExpiryNotificationSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereExpiryNotificationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereRosterMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SoloCertification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class SoloCertification extends \Eloquent {}
}

namespace App\Models\Settings{
/**
 * App\Models\Settings\AuditLogEntry
 *
 * @property int $id
 * @property int $user_id
 * @property string $action
 * @property int $affected_id
 * @property string $time
 * @property int $private
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read UserAccount $affectedUser
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry query()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereAffectedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLogEntry whereUserId($value)
 * @mixin \Eloquent
 */
	class AuditLogEntry extends \Eloquent {}
}

namespace App\Models\Settings{
/**
 * App\Models\Settings\CoreSettings
 *
 * @property int $id
 * @property string $sys_name
 * @property string $release
 * @property string $sys_build
 * @property string $copyright_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $banner
 * @property string $bannerMode
 * @property string $bannerLink
 * @property string $emailfirchief
 * @property string $emaildepfirchief
 * @property string $emailcinstructor
 * @property string $emaileventc
 * @property string $emailfacilitye
 * @property string $emailwebmaster
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings query()
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereBannerLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereBannerMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereCopyrightYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmailcinstructor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmaildepfirchief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmaileventc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmailfacilitye($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmailfirchief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereEmailwebmaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereSysBuild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereSysName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CoreSettings whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CoreSettings extends \Eloquent {}
}

namespace App\Models\Settings{
/**
 * App\Models\Settings\MaintenanceIPExemption
 *
 * @property int $id
 * @property string $label
 * @property string $ipv4
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption query()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption whereIpv4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintenanceIPExemption whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class MaintenanceIPExemption extends \Eloquent {}
}

namespace App\Models\Settings{
/**
 * App\Models\Settings\RotationImage
 *
 * @property int $id
 * @property int $user_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationImage whereUserId($value)
 * @mixin \Eloquent
 */
	class RotationImage extends \Eloquent {}
}

namespace App\Models\Training{
/**
 * App\Models\Training\Application
 *
 * @property int $id
 * @property string|null $reference_id
 * @property int $user_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $applicant_statement
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Training\ApplicationComment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Training\ApplicationReferee[] $referees
 * @property-read int|null $referees_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Training\ApplicationUpdate[] $updates
 * @property-read int|null $updates_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Query\Builder|Application onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereApplicantStatement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Application withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Application withoutTrashed()
 * @mixin \Eloquent
 */
	class Application extends \Eloquent {}
}

namespace App\Models\Training{
/**
 * App\Models\Training\ApplicationComment
 *
 * @property int $id
 * @property int $application_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training\Application $application
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|ApplicationComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationComment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ApplicationComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ApplicationComment withoutTrashed()
 * @mixin \Eloquent
 */
	class ApplicationComment extends \Eloquent {}
}

namespace App\Models\Training{
/**
 * App\Models\Training\ApplicationReferee
 *
 * @property int $id
 * @property int $application_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string $referee_full_name
 * @property string|null $referee_email
 * @property string|null $referee_staff_position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training\Application $application
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee newQuery()
 * @method static \Illuminate\Database\Query\Builder|ApplicationReferee onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereRefereeEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereRefereeFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereRefereeStaffPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationReferee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ApplicationReferee withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ApplicationReferee withoutTrashed()
 * @mixin \Eloquent
 */
	class ApplicationReferee extends \Eloquent {}
}

namespace App\Models\Training{
/**
 * App\Models\Training\ApplicationUpdate
 *
 * @property int $id
 * @property int $application_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string $update_title
 * @property string|null $update_content
 * @property string|null $update_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training\Application $application
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate newQuery()
 * @method static \Illuminate\Database\Query\Builder|ApplicationUpdate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereUpdateContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereUpdateTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereUpdateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationUpdate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ApplicationUpdate withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ApplicationUpdate withoutTrashed()
 * @mixin \Eloquent
 */
	class ApplicationUpdate extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Instructors{
/**
 * App\Models\Training\Instructing\Instructors\Instructor
 *
 * @property int $id
 * @property int $user_id
 * @property int $current
 * @property int $assessor
 * @property string|null $staff_email
 * @property string|null $staff_page_tagline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|OTSSession[] $otsSessions
 * @property-read int|null $ots_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|InstructorStudentAssignment[] $studentsAssigned
 * @property-read int|null $students_assigned_count
 * @property-read \Illuminate\Database\Eloquent\Collection|TrainingSession[] $trainingSessions
 * @property-read int|null $training_sessions_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereAssessor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereStaffEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereStaffPageTagline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor whereUserId($value)
 * @mixin \Eloquent
 */
	class Instructor extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Links{
/**
 * App\Models\Training\Instructing\Links\InstructorStudentAssignment
 *
 * @property int $id
 * @property int $student_id
 * @property int $instructor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Instructor $instructor
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstructorStudentAssignment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class InstructorStudentAssignment extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Links{
/**
 * App\Models\Training\Instructing\Links\StudentStatusLabelLink
 *
 * @property int $id
 * @property int $student_status_label_id
 * @property int $student_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink whereStudentStatusLabelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabelLink whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class StudentStatusLabelLink extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\InstuctorRecommendation
 *
 * @property int $id
 * @property int $student_id
 * @property int $instructor_id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Instructor $instructor
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation query()
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InstuctorRecommendation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class InstuctorRecommendation extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\OTSSession
 *
 * @property int $id
 * @property int $student_id
 * @property int $assessor_id
 * @property \Illuminate\Support\Carbon $scheduled_time
 * @property string|null $remarks
 * @property string $result
 * @property int|null $position_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $reminder_sent
 * @property-read Instructor $instructor
 * @property-read \App\Models\Training\Instructing\Records\OTSSessionPassFailRecord|null $passFailRecord
 * @property-read MonitoredPosition|null $position
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession newQuery()
 * @method static \Illuminate\Database\Query\Builder|OTSSession onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereAssessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereReminderSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereScheduledTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSession whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|OTSSession withTrashed()
 * @method static \Illuminate\Database\Query\Builder|OTSSession withoutTrashed()
 * @mixin \Eloquent
 */
	class OTSSession extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\OTSSessionPassFailRecord
 *
 * @var ots_session_id The ID of the OTS Session this belongs to.
 * @var result         Enum for the result of the session. (passed/failed/pending)
 * @var assessor_id    The Id of the Assessor (Instructor) who wrote this record.
 * @var report_url     URL to the report for this session.
 * @var remarks        Remarks from assessor.
 * @property int $id
 * @property int $ots_session_id
 * @property string $result
 * @property int $assessor_id
 * @property string|null $report_url
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Instructor $assessor
 * @property-read \App\Models\Training\Instructing\Records\OTSSession $session
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereAssessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereOtsSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereReportUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OTSSessionPassFailRecord whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class OTSSessionPassFailRecord extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\StudentNote
 *
 * @property int $id
 * @property int $student_id
 * @property int $instructor_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $staff_only
 * @property-read Instructor $instructor
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote newQuery()
 * @method static \Illuminate\Database\Query\Builder|StudentNote onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereStaffOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StudentNote withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StudentNote withoutTrashed()
 * @mixin \Eloquent
 */
	class StudentNote extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\StudentNoteEdit
 *
 * @property int $id
 * @property int $instructor_id
 * @property int $student_note_id
 * @property string $content_as_of_edit
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereContentAsOfEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereStudentNoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentNoteEdit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class StudentNoteEdit extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Records{
/**
 * App\Models\Training\Instructing\Records\TrainingSession
 *
 * @property int $id
 * @property int $student_id
 * @property int $instructor_id
 * @property \Illuminate\Support\Carbon $scheduled_time
 * @property string|null $remarks
 * @property int|null $position_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $reminder_sent
 * @property-read Instructor $instructor
 * @property-read MonitoredPosition|null $position
 * @property-read Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession newQuery()
 * @method static \Illuminate\Database\Query\Builder|TrainingSession onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereInstructorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereReminderSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereScheduledTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingSession whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TrainingSession withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TrainingSession withoutTrashed()
 * @mixin \Eloquent
 */
	class TrainingSession extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Students{
/**
 * App\Models\Training\Instructing\Students\Student
 *
 * @property int $id
 * @property int $user_id
 * @property int $current
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Training\Instructing\Students\StudentAvailabilitySubmission[] $availability
 * @property-read int|null $availability_count
 * @property-read \Illuminate\Database\Eloquent\Collection|StudentStatusLabelLink[] $labels
 * @property-read int|null $labels_count
 * @property-read \Illuminate\Database\Eloquent\Collection|StudentNote[] $notes
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|OTSSession[] $otsSessions
 * @property-read int|null $ots_sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|InstuctorRecommendation[] $recommendations
 * @property-read int|null $recommendations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|TrainingSession[] $trainingSessions
 * @property-read int|null $training_sessions_count
 * @property-read UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUserId($value)
 * @mixin \Eloquent
 */
	class Student extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Students{
/**
 * App\Models\Training\Instructing\Students\StudentAvailabilitySubmission
 *
 * @property int $id
 * @property int $student_id
 * @property string $submission
 * @property string|null $extra_information
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Training\Instructing\Students\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereExtraInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereSubmission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAvailabilitySubmission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class StudentAvailabilitySubmission extends \Eloquent {}
}

namespace App\Models\Training\Instructing\Students{
/**
 * App\Models\Training\Instructing\Students\StudentStatusLabel
 *
 * @property int $id
 * @property string $name
 * @property string|null $fa_icon
 * @property string|null $colour
 * @property string|null $description
 * @property int $restricted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|StudentStatusLabelLink[] $students
 * @property-read int|null $students_count
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereFaIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereRestricted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStatusLabel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class StudentStatusLabel extends \Eloquent {}
}

namespace App\Models\Training\Testing{
/**
 * App\Models\Training\Testing\TheoryTest
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property int $reassigns
 * @property int|null $reassigns_in_days
 * @property int $assignable
 * @property float $pass_percentage
 * @property int|null $questions_given
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereAssignable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest wherePassPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereQuestionsGiven($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereReassigns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereReassignsInDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTest whereUpdatedAt($value)
 */
	class TheoryTest extends \Eloquent {}
}

namespace App\Models\Training\Testing{
/**
 * App\Models\Training\Testing\TheoryTestQuestion
 *
 * @property int $id
 * @property int $theory_test_id
 * @property string $question
 * @property string $type
 * @property int $required
 * @property string|null $description
 * @property int $auto_fail_if_incorrect
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereAutoFailIfIncorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereTheoryTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestQuestion whereUpdatedAt($value)
 */
	class TheoryTestQuestion extends \Eloquent {}
}

namespace App\Models\Training\Testing{
/**
 * App\Models\Training\Testing\TheoryTestStudentAssignment
 *
 * @property int $id
 * @property int $student_id
 * @property int $theory_test_id
 * @property string|null $expiry
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereTheoryTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheoryTestStudentAssignment whereUpdatedAt($value)
 */
	class TheoryTestStudentAssignment extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\StaffGroup
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $can_receive_tickets
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Users\StaffMember[] $members
 * @property-read int|null $members_count
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereCanReceiveTickets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class StaffGroup extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\StaffMember
 *
 * @property int $id
 * @property string $position
 * @property string $group
 * @property string $description
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $shortform
 * @property int $user_id
 * @property int|null $group_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Users\UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereShortform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaffMember whereUserId($value)
 * @mixin \Eloquent
 */
	class StaffMember extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\User
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property int|null $rating_id
 * @property string|null $rating_short
 * @property string|null $rating_long
 * @property string|null $rating_GRP
 * @property string|null $reg_date
 * @property string|null $region_code
 * @property string|null $region_name
 * @property string|null $division_code
 * @property string|null $division_name
 * @property string|null $subdivision_code
 * @property string|null $subdivision_name
 * @property int $gdpr_subscribed_emails
 * @property int $deleted
 * @property int $init
 * @property string $avatar
 * @property string|null $bio
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $display_cid_only
 * @property string|null $display_fname
 * @property int $display_last_name
 * @property int|null $discord_user_id
 * @property int|null $discord_dm_channel_id
 * @property int $avatar_mode
 * @property int $used_connect
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Application[] $applications
 * @property-read int|null $applications_count
 * @property-read Instructor|null $instructorProfile
 * @property-read \Illuminate\Database\Eloquent\Collection|News[] $news
 * @property-read int|null $news_count
 * @property-read \App\Models\Users\UserNotificationPreferences|null $notificationPreferences
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Users\UserPreferences|null $preferences
 * @property-read \App\Models\Users\UserPrivacyPreferences|null $privacyPreferences
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read RosterMember|null $rosterProfile
 * @property-read \App\Models\Users\StaffMember|null $staffProfile
 * @property-read Student|null $studentProfile
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAvatarMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDiscordDmChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDiscordUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayCidOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDisplayLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDivisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereDivisionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereGdprSubscribedEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereInit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereLname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingGRP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRatingShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereSubdivisionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereSubdivisionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUsedConnect($value)
 * @mixin \Eloquent
 * @property-read int $account_age
 * @property-read bool $bot
 * @property-read mixed $discord_profile_image
 * @property-read mixed $discord_user
 * @property-read string $f_name
 * @property-read string $full_name
 * @property-read string $full_name_cid
 * @property-read bool $member_of_discord_guild
 * @property-read Role $highest_role
 * @property-read object $vatsim_membership_data
 * @property-read bool $discord_linked
 * @property-read mixed $initials_profile_image
 * @property-read mixed $profile_image
 */
	class UserAccount extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\UserNote
 *
 * @property int $id
 * @property int $user_id
 * @property int $author
 * @property string $content
 * @property int $confidential
 * @property string $timestamp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Users\UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereConfidential($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNote whereUserId($value)
 * @mixin \Eloquent
 */
	class UserNote extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\UserNotification
 *
 * @property int $id
 * @property int $user_id
 * @property string $notification_id
 * @property string $dateTime
 * @property string $content
 * @property string $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Users\UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereUserId($value)
 * @mixin \Eloquent
 */
	class UserNotification extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\UserNotificationPreferences
 *
 * @property int $id
 * @property int $user_id
 * @property string $training_notifications
 * @property string $event_notifications
 * @property string $news_notifications
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereEventNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereNewsNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereTrainingNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotificationPreferences whereUserId($value)
 * @mixin \Eloquent
 */
	class UserNotificationPreferences extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\UserPreferences
 *
 * @property int $id
 * @property int $user_id
 * @property int $enable_beta_components
 * @property string $ui_mode
 * @property int $enable_discord_notifications
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $accent_colour
 * @property-read \App\Models\Users\UserAccount $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereAccentColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereEnableBetaComponents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereEnableDiscordNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereUiMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPreferences whereUserId($value)
 * @mixin \Eloquent
 */
	class UserPreferences extends \Eloquent {}
}

namespace App\Models\Users{
/**
 * App\Models\Users\UserPrivacyPreferences
 *
 * @property int $id
 * @property int $user_id
 * @property int $avatar_public
 * @property int $biography_public
 * @property int $session_logs_public
 * @property int $certification_details_public
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereAvatarPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereBiographyPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereCertificationDetailsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereSessionLogsPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPrivacyPreferences whereUserId($value)
 * @mixin \Eloquent
 */
	class UserPrivacyPreferences extends \Eloquent {}
}

