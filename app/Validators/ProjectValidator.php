<?php
/**
 * Created by PhpStorm.
 * User: edujr
 * Date: 7/28/15
 * Time: 23:19
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{

    protected $rules = [
        'owner_id' => 'requided|max:100',
        'client_id' => 'requided|max:100',
        'name' => 'required|max:100',
        'description' => 'required|',
        'progress' => 'required|',
        'status' => 'required|',
        'due_date' => 'required|',
    ];



}