<?php
/**
 * Project database-mongodb.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-28
 * Time: 23:05
 */

namespace nguyenanhung\MongoDB;

/**
 * Trait VersionTrait
 *
 * @package   nguyenanhung\MongoDB
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait VersionTrait
{
    /**
     * Function getVersion
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 9/28/18 14:47
     *
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }
}
