<?php
/**
 * Created by PhpStorm.
 * User: owlet
 * Date: 2018/9/21
 * Time: 10:45
 */

namespace App\Middlewares;

use Swoft\Bean\Annotation\Bean;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\Http\Message\Middleware\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * @Bean()
 * @uses MiaoMidedleware
 * @version 2018年09月21日
 * @author owlet
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class MiaoMidedleware implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     * @throws InvalidArgumentException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // TODO: Implement process() method.
        $response = $handler->handle($request);
        return $response->withAddedHeader('miao', 'xiao');
    }
}