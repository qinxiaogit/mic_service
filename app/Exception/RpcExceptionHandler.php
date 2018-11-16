<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/11/15
 * Time: 17:44
 */

namespace App\Exception;

use Swoft\App;
use Swoft\Bean\Annotation\ExceptionHandler;
use Swoft\Bean\Annotation\Handler;
use Swoft\Rpc\Exception\RpcStatusException;
use Swoft\Rpc\Exception\RpcResponseException;
use Swoft\Rpc\Server\Rpc\Response;

/**
 * @ExceptionHandler()
 * Class RpcExceptionHandler
 * @package App\Exception
 */
class RpcExceptionHandler
{
    /**
     * @Handler(RpcResponseException::class)
     *
     * @param Response   $response
     * @param \Throwable $throwable
     *
     * @return Response
     */
    public function handlerException(Response $response, \Throwable $throwable)
    {
        $file      = $throwable->getFile();
        $line      = $throwable->getLine();
        $code      = $throwable->getCode();
        $exception = $throwable->getMessage();

        $data = ['msg' => $exception, 'file' => $file, 'line' => $line, 'code' => $code];
        App::error(json_encode($data));
        return $response->json($data);
    }
}