<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionClaimed extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oollah_promotion_claimed';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}