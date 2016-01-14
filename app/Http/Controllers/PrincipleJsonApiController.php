<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 14-Jan-16
 * Time: 12:56 PM
 */

namespace App\Http\Controllers;

use App\Model\Database\Principle;
use NilPortugues\Laravel5\JsonApi\Controller\JsonApiController;

class PrincipleJsonApiController extends JsonApiController
{
    /**
     * Return the Eloquent model that will be used
     * to model the JSON API resources.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getDataModel()
    {
        return new Principle();
    }
}