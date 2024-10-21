<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    public function section_post($section) {
        return DB::table('posts')
                ->join('sections','section_id','=','sections.id')
                ->where('sections.id','=',$section)
                ->select('posts.id','posts.title','posts.image','posts.section_id','posts.date','posts.count_views')
                ->get();
    }

    public function update_count_views($id,$views) {
        DB::table('posts')->where('id','=',$id)->update(['count_views'=>$views]);
    }
}

