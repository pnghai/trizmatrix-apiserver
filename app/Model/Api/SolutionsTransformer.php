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
     * Returns a string with the full class name, including namespace.
     *
     * @return string
     */
    public function getClass()
    {
        return Solution::class;
    }

    /**
     * Returns a string representing the resource name
     * as it will be shown after the mapping.
     *
     * @return string
     */
    public function getAlias()
    {
        return 'solutions';
    }

    /**
     * Returns an array of properties that will be renamed.
     * Key is current property from the class.
     * Value is the property's alias name.
     *
     * @return array
     */
    public function getAliasedProperties()
    {
        return [];
    }

    /**
     * List of properties in the class that will be ignored by the mapping.
     *
     * @return array
     */
    public function getHideProperties()
    {
        return [];
    }

    /**
     * Returns an array of properties that are used as an ID value.
     *
     * @return array
     */
    public function getIdProperties()
    {
        return ['id'];
    }

    /**
     * Returns a list of URLs. This urls must have placeholders
     * to be replaced with the getIdProperties() values.
     *
     * @return array
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
     * Returns an array containing the relationship mappings as an array.
     * Key for each relationship defined must match a property of the mapped class.
     *
     * @return array
     */
    public function getRelationships()
    {
        return [];
    }
}