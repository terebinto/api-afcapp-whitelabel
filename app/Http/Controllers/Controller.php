<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="v1",
 *      title="Api Seguros",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email=""
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 * ),
 *
 * @OA\Server(
 *      url="http://apisegtest-env.eba-itbzbssm.us-east-1.elasticbeanstalk.com/api",
 *      description="V1 API Server"
 * )
 *
 * @OA\Tag(
 *     name="Auth",
 *     description="Auth endpoints",
 * )
 * @OA\Tag(
 *     name="Users",
 *     description="Users endpoints",
 * )
 * @OA\Tag(
 *     name="Api Seguros",
 *     description="API Endpoints of Projects"
 * )
 */


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
