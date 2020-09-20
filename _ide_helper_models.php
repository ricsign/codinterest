<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Problems
 *
 * @property int $pid problem id
 * @property string $ptit problem title
 * @property string $pdesc problem description
 * @property int $pterrid problem coresponding territory id, foreign
 * @property string $pans problem expected answer
 * @property string $psol problem code solution
 * @property int $preward Problem Reward Point
 * @property int $psub Problem Total Submission
 * @property int $pacc Problem Total Acceptance
 * @method static \Illuminate\Database\Eloquent\Builder|Problems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Problems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Problems query()
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePacc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePans($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePreward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePsol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePsub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePterrid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Problems wherePtit($value)
 */
	class Problems extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Submission
 *
 * @property int $sid Submission ID
 * @property int $uid
 * @property int $pid
 * @property int $status
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Submission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereSid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereUpdatedAt($value)
 */
	class Submission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserInfo
 *
 * @property int $uid User ID, foriegn key
 * @property int $usercoins User Coins
 * @property int $userac User Total Acceptance
 * @property int $usersubmission User Total Submission
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Submission[] $submission
 * @property-read int|null $submission_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUserac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUsercoins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInfo whereUsersubmission($value)
 */
	class UserInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSign
 *
 * @property int $uid User's Only ID
 * @property string $username Username
 * @property string $email User's Email
 * @property string $usertoken User's token, the token used for validation
 * @property int $is_activated Activated?
 * @property string $password Password
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \App\Models\UserInfo|null $user_info
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereIsActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSign whereUsertoken($value)
 */
	class UserSign extends \Eloquent {}
}

