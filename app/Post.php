<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    public $fillable = ['name', 'content'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class); 
    }

    public function saveTags(string $tags)
    {
        $tags = array_filter(array_unique(array_map(function ($item){
            return trim($item);
        },\explode(',', $tags))), function ($item){
            return !empty($item);
        });
        if (empty($tags)){
            return false;
        }

        $persisted_tags = Tag::whereIn('name', $tags)->get();

        $tags_to_create= array_diff($tags, $persisted_tags->pluck('name')->all());
        $tags_to_create = array_map(function ($tag){
            return [
                'name' => $tag,
                'slug' => Str::slug($tag),
            ];
        }, $tags_to_create);
        $created_tags = $this->tags()->createMany($tags_to_create);
        $persisted_tags = $persisted_tags->merge($created_tags);
        $this->tags()->sync($persisted_tags);
    }
}
