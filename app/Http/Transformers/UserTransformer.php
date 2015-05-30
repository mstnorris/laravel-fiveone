<?php namespace FiveOne\Http\Transformers;


class UserTransformer extends Transformer {
    
    public function transform($user)
    {
        return [
            'id' => $user['string_id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'active' => (boolean) $user['active']
        ];
    }
}