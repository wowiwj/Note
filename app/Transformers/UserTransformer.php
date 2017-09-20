<?php
/**
 * Created by PhpStorm.
 * User: wangju
 * Date: 2017/6/1
 * Time: 下午11:51
 */

namespace App\Transformers;


use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user){
        return [
            'id' => $user->id,
            'name' => $user->name,
            'avatar' => $user->avatar,
        ];
    }

}