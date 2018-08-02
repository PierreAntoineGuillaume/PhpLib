<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Antoine
 * Date: 01/08/2018
 * Time: 20:38
 */

namespace PAG\Connection\Ftp;


use PAG\Connection\Ftp;
use PAG\Connection\RemoteFileTransferTool;

class AsciiFtp implements RemoteFileTransferTool
{
    private $ftp;

    public function __construct(Ftp $ftp)
    {
        $this->ftp = $ftp;
    }

    public function copyLocalToRemote($local, $remote)
    {
        $this->ftp->put_ascii($local, $remote);
    }

    public function copyRemoteToLocal($remote, $local)
    {
        $this->ftp->get_ascii($remote, $local);
    }
}