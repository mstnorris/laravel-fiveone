<?php namespace FiveOne\Http\Transformers;


class JobTransformer extends Transformer {
    
    public function transform($job)
    {
        return [
            'id' => $job['string_id'],
            'name' => $job['name'],
            'address' => $job['address'],
        ];
    }
}