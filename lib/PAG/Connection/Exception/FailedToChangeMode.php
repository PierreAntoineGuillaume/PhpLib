<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Antoine
 * Date: 01/08/2018
 * Time: 20:50
 */

namespace PAG\Connection\Exception;

use RuntimeException;

class FailedToChangeMode extends RuntimeException implements FtpException
{

}