<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 14-Jan-16
 * Time: 12:44 PM
 */

namespace App\Model\Api;

use App\Model\Database\Solution;
use App\Model\Database\Parameter;
use App\Model\Database\Principle;
use NilPortugues\Api\Mappings\JsonApiMapping;

class SolutionsTransformer implements JsonApiMapping
{
    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return Solution::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'solutions';
    }

    /**
     * {@inheritdoc}
     */
    public function getAliasedProperties()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getHideProperties()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getIdProperties()
    {
        return ['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function getUrls()
    {
        return [
            'self' => ['name' => 'solutions.show', 'as_id' => 'id'],
            'principle' => ['name' => 'principles.show', 'as_id' =>'principleId'],
            'improvedParam' => ['name' => 'parameters.show', 'as_id' =>'improvedParam'],
            'preservedParam' => ['name' => 'parameters.show', 'as_id' =>'preservedParam'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationships()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredProperties()
    {
        return [];
    }
}