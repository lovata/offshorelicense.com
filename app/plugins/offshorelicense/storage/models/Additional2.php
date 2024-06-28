<?php namespace Offshorelicense\Storage\Models;

use Model;

/**
 * Model
 */
class Additional2 extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'offshorelicense_storage_additional';
}