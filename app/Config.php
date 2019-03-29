<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    const FEE = 'FEE';

    const LIMIT_TXN_DOWN = 'LIMIT_TXN_DOWN';

    const LIMIT_TXN_UP = 'LIMIT_TXN_UP';
}
