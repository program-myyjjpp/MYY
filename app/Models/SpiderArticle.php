<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SpiderArticle extends Model
{

    protected $table = 'spider_article';

    protected $fillable = [
        'categoryid',
        'title',
        'content',
        'recommend',
        'popular',
        'image',
        'description',
        'top',
    ];

    protected $dates = ['datatime'];
    protected $appends = ['click'];
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        $flushCache = function () {
            Cache::flush();
        };

        static::saved($flushCache);
        static::deleted($flushCache);
    }

    public function menu()
    {
        return $this->belongsTo(SpiderMenu::class, 'categoryid', 'id');
    }

    public function getClickAttribute(): string
    {
        $num = $this->attributes['viewcount'];
        if ($num >= 1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = ['k', 'm', 'b', 't'];
            $x_count_parts = count($x_array) - 1;
            $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;
        }

        return $num;
    }

    public function incrementViewCount(): void
    {
        $this->increment('viewcount');
        $this->save();
    }


}
