<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2020-02-20
 * Time: 12:48
 */

namespace api\sns\model;


use think\Model;
use think\model\concern\SoftDelete;

class SnsLikesPostModel extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_at';
    protected $defaultSoftDelete = 0;

    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_at';
    protected $updateTime = 'update_at';
}