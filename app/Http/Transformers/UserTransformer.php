<?php namespace FiveOne\Http\Transformers;


class UserTransformer extends Transformer {
    
    public function transform($job)
    {
        return [
            'id' => $job['string_id'],
            'name' => $job['name'],
            'email' => $job['email'],
            'active' => (boolean) $job['active']
        ];
    }
}