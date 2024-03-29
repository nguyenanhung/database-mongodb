<?php
/**
 * Project database-mongodb.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-28
 * Time: 23:06
 */

namespace nguyenanhung\MongoDB;

/**
 * Interface ProjectInterface
 *
 * @package   nguyenanhung\MongoDB
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface ProjectInterface
{
    const VERSION             = '2.1.0';
    const LAST_MODIFIED       = '2021-09-07';
    const AUTHOR_NAME         = 'Hung Nguyen';
    const AUTHOR_EMAIL        = 'dev@nguyenanhung.com';
    const PROJECT_NAME        = 'Database MongoDB Abstraction Layer';
    const TIMEZONE            = 'Asia/Ho_Chi_Minh';
    const REQUEST_TIMEOUT     = 60;
    const EXIT_SUCCESS        = 0; // no errors
    const EXIT_ERROR          = 1; // generic error
    const EXIT_CONFIG         = 3; // configuration error
    const EXIT_UNKNOWN_FILE   = 4; // file not found
    const EXIT_UNKNOWN_CLASS  = 5; // unknown class
    const EXIT_UNKNOWN_METHOD = 6; // unknown class member
    const EXIT_USER_INPUT     = 7; // invalid user input
    const EXIT_DATABASE       = 8; // database error
    const EXIT__AUTO_MIN      = 9; // lowest automatically-assigned error code
    const EXIT__AUTO_MAX      = 125; // highest automatically-assigned error code
    const USE_BENCHMARK       = FALSE;
    const USE_DEBUG           = FALSE;

    /**
     * Hàm lấy thông tin phiên bản Package
     *
     * @author  : 713uk13m <dev@nguyenanhung.com>
     * @time    : 10/13/18 15:12
     *
     * @return mixed|string Current Project Version, VD: 0.1.0
     */
    public function getVersion();
}
