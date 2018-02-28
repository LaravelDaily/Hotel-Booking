<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 *
 * @package App
 * @property string $shortcode
 * @property string $title
 * @property string $name
*/
class Country extends Model
{
    use SoftDeletes;

    protected $fillable = ['shortcode', 'title', 'name'];
    
    
    
}
