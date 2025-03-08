<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpiderMenu extends Model
{
    protected $table = 'spider_menu';

    protected  $fillable = [
        'name',
        'subtitle',
        'keywords',
        'description',
        'banner',
        'link',
        'blade',
        'link_name',
    ];

    public  $timestamps = false;

    public function articles()
    {
        return $this->hasMany(SpiderArticle::class, 'categoryid', 'id');
    }

}
