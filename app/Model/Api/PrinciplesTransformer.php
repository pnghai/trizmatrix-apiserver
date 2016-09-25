<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 14-Jan-16
 * Time: 12:44 PM
 */

namespace App\Model\Api;

use App\Model\Database\Principle;
use NilPortugues\Api\Mappings\JsonApiMapping;

class PrinciplesTransformer implements JsonApiMapping
{
    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        return Principle::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'principles';
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
            'self' => ['name' => 'principles.show', 'as_id' => 'id'],
            'principles' => ['name' => 'principles.index']
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