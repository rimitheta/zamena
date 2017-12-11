<?php
namespace Zawena\ZWallet\model;
use Illuminate\Database\Eloquent\Model;
class TransactionTypeModel extends Model
{
    protected $table = 'ztransaction_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','code','status'];
    protected $connection = 'mysql';
    public $timestamps = false;
}
