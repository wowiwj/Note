<?php

namespace App\Http\Controllers\Api;

use App\Base\Api\ApiResponse;
use App\Base\Api\ApiSerializer;
use App\Http\Controllers\Controller;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Response;
use Symfony\Component\HttpFoundation\Response as Foundationresponse;


/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    use ApiResponse;
}