<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['reason', 'amount', 'user_id'])]
class Expense extends Model
{
    //
}
