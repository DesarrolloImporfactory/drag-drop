<?php

namespace Larabuild\Pagebuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $connection = 'suit';
    use HasFactory;

    protected $table;

    protected $fillable = ['id', 'name', 'title', 'description', 'slug', 'settings', 'status', 'user_id'];

    protected $casts = [
        'settings' => 'array'
    ];

    public function __construct()
    {
        $this->connection = config('pagebuilder.db_connection');
        $this->table = config('pagebuilder.db_prefix') . 'pages';
        parent::__construct();
    }
}
