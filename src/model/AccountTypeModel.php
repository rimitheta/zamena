<?php
namespace Zamena\ZWallet\model;
use Illuminate\Database\Eloquent\Model;
class AccountTypeModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zaccount_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name','code','status'];
    protected $connection = 'mysql';
    public $timestamps = false;
}
