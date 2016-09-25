<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 14-Jan-16
 * Time: 12:44 PM
 */

namespace App\Model\Api;

use App\Model\Database\Parameter;
use NilPortugues\Api\Mappings\JsonApiMapping;

class ParametersTransformer implements JsonApiMapping
{
    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return Parameter::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'parameters';
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
            'self' => ['name' => 'parameters.show', 'as_id' => 'id'],
            'parameters' => ['name' => 'parameters.index']
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