<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Api\ApiSerializer;
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


    /**
     * ApiController constructor.
     */
    public function __construct()
    {
        $this->fractal = new Manager();
        $this->fractal->setSerializer(new ApiSerializer());

    }

    /**
     * @var int
     */
    protected $statusCode = Foundationresponse::HTTP_OK;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function responseNotFond($message = 'Not Fond!')
    {
        return $this->setStatusCode(Foundationresponse::HTTP_NOT_FOUND)->respondWithError($message);
    }


    /**
     * @param $data
     * @param array $header
     * @return mixed
     */
    public function respond($data, $header = [])
    {

        return Response::json($data,$this->getStatusCode(),$header);
    }


    /**
     * @param $status
     * @param array $data
     * @return mixed
     */
    public function respondWithStatus($status, array $data)
    {
        $status = [
            'status' => $status,
            'code' => $this->statusCode
        ];
        $data = array_merge($status,$data);
        return $this->respond($data);

    }


    /**
     * @param $data
     * @param string $status
     * @return mixed
     */
    public function respondWithSuccess($data, $status = "success")
    {

        return $this->respondWithStatus($status,compact('data'));
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondCreated($message = "created")
    {
        return $this->setStatusCode(Foundationresponse::HTTP_CREATED)
            ->respondWithMessage($message);

    }

    /**
     * @param $item
     * @param $callback
     * @return mixed
     */
    public function respondWithItem($item, $callback)
    {
        $resource = new Item($item,$callback);
        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithSuccess($rootScope->toArray());

    }

    /**
     * @param $collection
     * @param $callback
     * @return mixed
     */
    public function respondWithCollection($collection, $callback)
    {
        $resource = new Collection($collection,$callback);
        $rootScope = $this->fractal->createData($resource);
        return $this->respondWithStatus('success',$rootScope->toArray());

    }

    /**
     * @param $paginator
     * @param $callback
     * @param string $status
     * @return mixed
     */
    public function respondWithPaginator($paginator, $callback, $status='success')
    {
        $resource = new Collection($paginator->getCollection(),$callback);
        $resource->setPaginator(new IlluminatePaginatorAdapter($paginator));
        $rootScope = $this->fractal->createData($resource);

        return $this->respondWithStatus($status,$rootScope->toArray());

    }




    /**
     * @param $message
     * @param string $status
     * @return mixed
     */
    public function respondWithMessage($message, $status = "success")
    {
        return $this->respondWithStatus($status,[
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithError($message,$status = "error")
    {
        return $this->respondWithStatus($status,[
            'message' => $message
        ]);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInteralError($message = "Interal Error!")
    {
        return $this->setStatusCode(Foundationresponse::HTTP_INTERNAL_SERVER_ERROR)
            ->respondWithError($message);

    }

    /**
     * 响应所有的validation验证错误
     * @param  \Illuminate\Validation\Validator $validator the validator that failed to pass
     * @return \Illuminate\Http\Response the appropriate response containing the error message
     */
    protected function respondWithFailedValidation(\Illuminate\Validation\Validator $validator)
    {
        // 只取出一条错误信息
        return $this->setStatusCode(400)->respondWithError($validator->messages()->first(), 'error');
    }

    /**
     * @var Manager
     */
    protected $fractal;


}