<?php

namespace App\Models\Training\Testing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class TheoryTestStudentAssignment extends Model
{
    use HasFactory;
}
