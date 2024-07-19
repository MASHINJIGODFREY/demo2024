<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    use HasFactory;

    /**
     * The table name associated with the model.
     *
     * @var string
     */
    protected $table='todos';

    /**
     * The table column set as primary key.
     *
     * @var string
     */
    protected $primary_key='id';
}
