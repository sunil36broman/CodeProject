<?php
/**
 * Created by PhpStorm.
 * User: edujr
 * Date: 7/28/15
 * Time: 23:19
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{

    protected $rules = [
        'name' => 'max:100'
    ];



}