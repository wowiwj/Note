<?php

namespace App\Models;

use App\Base\Service\Markdowner;
use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Draft extends Model
{
    protected $guarded = [];

    protected $hidden = ['id'];

    protected $appends = ['ref','source'];



    public function relation()
    {
        return $this->morphTo();
    }

    public function children(){

        return $this->hasMany(Draft::class,'parent_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function resolveRouteBinding($value)
    {
        $value = Hashids::decode($value);
        return parent::resolveRouteBinding($value);
    }

    public function getRefAttribute(){
        return Hashids::encode($this->id);
    }

    public static function getWithRef($ref){
        $id = Hashids::decode($ref);
        return Draft::query()->find($id)->first();
    }

    public static function relationIdWithRef($ref,$refId){
        $draft = self::getWithRef($ref);
        $draft->relation_id = $refId;
        $draft->save();
        $draft->children()->each(function ($draft) use ($refId) {
            $draft->relation_id = $refId;
            $draft->save();
        });
    }

    public function getLastUpdateAttribute(){
        return $this->getLastUpdate();
    }


    public function getLastUpdate(){
        $draft = $this;
        if ($this->children()->count() > 0){
            $draft = $this->children()->latest()->first();
        }
        return $draft;
    }

    public function getBriefAttribute(){

        $body = $this->body;
        $html = (new Markdowner())->convertMarkdownToHtml($body);
        $text = strip_tags($html);
        return mb_substr($text,0,200);
    }

    public function getSourceAttribute(){

        $type = $this->relation_type;
        return snake_case(class_basename($type));

    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($draft){
            $relation = $draft->relation;
            if ($relation){
                $relation->draft_id = null;
                $relation->save();
            }
            $draft->children->each->delete();
        });

    }


}
