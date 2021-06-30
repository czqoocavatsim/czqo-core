<?php

namespace App\Models\Training\Testing;

use App\Enums\Training\TheoryTestQuestionType;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class TheoryTestQuestion extends Model
{
    /**
     * @var string[] The mass assignable attributes.
     */
    protected $fillable = [
        'theory_test_id', 'question', 'type', 'required', 'description', 'auto_fail_if_incorrect'
    ];

    /**
     * @var string[] Attributes hidden from arrays.
     */
    protected $hidden = ['id'];

    /**
     * @var string[] Attribute casting
     */
    protected $casts = [
        'type' => TheoryTestQuestionType::class,
        'multiple_choice_answers' => 'array'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function testBelongingTo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TheoryTest::class);
    }
}
