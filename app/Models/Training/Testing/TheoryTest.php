<?php

namespace App\Models\Training\Testing;

use App\Exceptions\TheoryTestUnassignableException;
use App\Models\Training\Instructing\Students\Student;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class TheoryTest extends Model
{
    /**
     * @var string[] The mass assignable attributes.
     */
    protected $fillable = [
        'code', 'name', 'description', 'reassigns', 'reassigns_in_days', 'assignable', 'pass_percentage', 'questions_given'
    ];

    /**
     * @var string[] Attributes hidden from arrays.
     */
    protected $hidden = ['id'];

    /**
     * Questions belonging to this test.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(TheoryTestQuestion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentsAssigned(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TheoryTestStudentAssignment::class)->where('expiry', '<', now());
    }

    /**
     * Returns whether the given student is assigned to the test.
     *
     * @param Student $student
     * @return bool
     */
    public function studentIsAssigned(Student $student): bool
    {
        return TheoryTestStudentAssignment::whereStudentId($student->id)->whereTheoryTestId($this->id)->exists();
    }

    /**
     * Assigns this test to the given student.
     *
     * @param Student $student
     * @param int $expiresInDays
     * @return TheoryTestStudentAssignment|Model
     * @throws TheoryTestUnassignableException
     */
    public function assignStudent(Student $student, int $expiresInDays)
    {
        if (! $student || $this->studentIsAssigned($student)) {
            throw new TheoryTestUnassignableException('Student does not exist or student already assigned to test.');
        }

        return TheoryTestStudentAssignment::create([
            'student_id' => $student->id,
            'theory_test_id' => $this->id,
            'expiry' => $expiresInDays ?? now()->diffInDays(now()->addMonth())
        ]);
    }
}
