<?php
/**
 * Created by PhpStorm.
 * User: 08121_000
 * Date: 14-Jan-16
 * Time: 12:56 PM
 */

namespace App\Http\Controllers\Api\V1;

use Symfony\Component\HttpFoundation\Response;
use App\Model\Database\Solution;
use NilPortugues\Api\JsonApi\Http\Factory\RequestFactory;
use NilPortugues\Api\JsonApi\Server\Actions\ListResource;
use NilPortugues\Laravel5\JsonApi\Eloquent\EloquentHelper;
use NilPortugues\Laravel5\JsonApi\Controller\JsonApiController;

/**
 * Class SolutionJsonApiController
 * @package App\Http\Controllers\Api\V1
 */
class SolutionJsonApiController extends JsonApiController
{
    /**
     * Return the Eloquent model that will be used
     * to model the JSON API resources.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getDataModel()
    {
        return new Solution();
    }

    /**
     * @param string $improvedId
     * @param string $preservedId
     * @return Response
     */
    public function getSolutionsByParams($improvedId, $preservedId)
    {
        $apiRequest = RequestFactory::create();
        $page = $apiRequest->getPage();

        if (!$page->size()) {
            $page->setSize(10); //Default elements per page
        }

        $resource = new ListResource(
            $this->serializer,
            $page,
            $apiRequest->getFields(),
            $apiRequest->getSort(),
            $apiRequest->getIncludedRelationships(),
            $apiRequest->getFilters()
        );

        $totalAmount = function() use ($improvedId,$preservedId) {
            $id = (new Solution())->getKeyName();
            return Solution::query()
                ->where(['improvedParam' => $improvedId, 'preservedParam' => $preservedId])
                ->get([$id])
                ->count();
        };

        $results = function()  use ($improvedId,$preservedId) {
            return EloquentHelper::paginate(
                $this->serializer,
                Solution::query()
                    ->where(['improvedParam' => $improvedId, 'preservedParam' => $preservedId])
            )->get();
        };

        $uri = route('improvements.preservations.solutions', [
            'improvedId' => $improvedId,
            'preservedId' => $preservedId,
        ]);

        return $resource->get($totalAmount, $results, $uri, Solution::class);
    }
}