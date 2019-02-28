<?php
namespace App\Http\Controllers;

use OpenApi\Annotations\Contact;
use OpenApi\Annotations\Info;
use OpenApi\Annotations\PathItem;
use OpenApi\Annotations\Property;
use OpenApi\Annotations\Schema;
use OpenApi\Annotations\Server;

/**
 *
 * @Info(
 *     version="1.0.0",
 *     title="演示服务",
 *     description="这是演示服务，该文档提供了演示swagger api的功能",
 *     @Contact(
 *         email="mylxsw@aicode.cc",
 *         name="mylxsw"
 *     )
 * )
 * @PathItem(
 *  path="test"
 * )
 * @Server(
 *     url="http://localhost",
 *     description="开发环境",
 * )
 *
 * @Schema(
 *     schema="ApiResponse",
 *     type="object",
 *     description="响应实体，响应结果统一使用该结构",
 *     title="响应实体",
 *     @Property(
 *         property="code",
 *         type="string",
 *         description="响应代码"
 *     ),
 *     @Property(property="message", type="string", description="响应结果提示")
 * )
 *
 *
 * @package App\Http\Controllers
 */
class SwaggerController
{}