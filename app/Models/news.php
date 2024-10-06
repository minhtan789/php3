<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class news extends Model
{
    protected $table ='news';
    protected $attribute = [
        'is_breaking_news' => 0,
        'is_approved' => 0,
        'status' => 0,
        'views' => 0,
    ];
    protected $fillable = [
        'category_id',
        'image',
        'title',
        'slug',
        'content',
        'is_breaking_news',
        'is_approved',
        'status',
        'views',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Giả sử cột khóa ngoại là 'category_id'
    }
}
