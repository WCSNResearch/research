<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','年份','投入渠道_中央财政','投入渠道_地方财政','投入渠道_其他','投入类别_年度运行费',
        '投入类别_固定资产投入','投入类别_科研项目经费','投入类别_其他'];

}
