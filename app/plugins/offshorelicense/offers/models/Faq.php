<?php namespace Offshorelicense\Offers\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
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
    public $table = 'offshorelicense_offers_faq';
}