<?php
namespace App\Http\Controllers;

use Response;

/**
 * @OA\Info(
 *     version="1.0.0",
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description"
 * )
 * @OA\Server(
 *     description="Local Server",
 *     url="http://local.apicodal.com/"
 * ),
 * @OA\Server(
 *     description="Dev Server",
 *     url="http://ssw-api.stage-codal.net/api/"
 * ),
 * @OA\Server(
 *     description="Stage Server",
 *     url="http://stage-api.simplistormwater.com/api/"
 * )
 */

/**
 * @OA\Get(
 *     path="/",
 *     description="Home page",
 *     @OA\Response(response="default", description="Welcome page")
 * )
 */

/**
 * @group Swagger Controller
 *
 * Managing swagger calls
 */

/**
 *
 * @OA\Schema(schema="SuccessResponse",
 *     @OA\Property(property="data", type="array", @OA\Items()),
 *     @OA\Property(property="message", type="string"),
 * )
 */

class SwaggerController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $swagger = \OpenApi\scan(base_path('app/'));
        // $swagger = \Swagger\scan(base_path('app/'));

        return response()->json($swagger);
    }

}
