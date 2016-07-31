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
     * Override the default index function to get many resources.
     * @property int filters['improvedId']
     * @property int filters['preservedId']
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $apiRequest = RequestFactory::create();

        $page = $apiRequest->getPage();
        if (!$page->size()) {
            $page->setSize($this->pageSize);
        }

        $fields = $apiRequest->getFields();
        $sorting = $apiRequest->getSort();
        $included = $apiRequest->getIncludedRelationships();
        $filters = $apiRequest->getFilters();
        $resource = new ListResource($this->serializer, $page, $fields, $sorting, $included, $filters);

        if ($filters==NULL) {
            $totalAmount = $this->totalAmountResourceCallable();
            $results = $this->listResourceCallable();

            $controllerAction = '\\' . get_called_class() . '@index';
            $uri = $this->uriGenerator($controllerAction);

            return $this->addHeaders($resource->get($totalAmount, $results, $uri, get_class($this->getDataModel())));
        }
        else {
            $improvedId = $filters['improvedParam'];
            $preservedId = $filters['preservedParam'];
            $totalAmount = function () use ($improvedId,$preservedId) {
                $id = (new Solution())->getKeyName();
                return Solution::query()
                    ->where(['improvedParam' => $improvedId, 'preservedParam' => $preservedId])
                    ->get([$id])
                    ->count();
            };

            $results = function () use ($improvedId, $preservedId) {
                return EloquentHelper::paginate(
                    $this->serializer,
                    Solution::query()
                        ->where(['improvedParam' => $improvedId, 'preservedParam' => $preservedId])
                )->get();
            };

            $params=array(
                'improvedParam' => $improvedId,
                'preservedParam' => $preservedId
            );
            $queryString = http_build_query($params);

            $controllerAction = '\\' . get_called_class() . '@index';
            $uri = $this->uriGenerator($controllerAction);

            return $resource->get($totalAmount, $results, $uri, Solution::class);
        }
    }
}