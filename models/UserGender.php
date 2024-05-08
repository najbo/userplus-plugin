<?php namespace Rainlab\Userplus\Models;

use Model;

/**
 * Gender Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class UserGender extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'rainlab_userplus_genders';

    /**
     * @var array rules for validation
     */
    public $rules = [
        'name' => 'required'
    ];
}
