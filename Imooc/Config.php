<?php
/**
 * Created by PhpStorm.
 * User: zhaozhiliang
 * Date: 2019/1/12
 * Time: 下午4:38
 */

namespace Imooc;


class Config implements \ArrayAccess
{
    protected $path;
    protected $configs = array();

    //$path 是目录
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $key <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $key <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($key)
    {
        if(empty($this->configs[$key]))
        {
            $file_path = $this->path.'/'.$key.'.php';
            $config = require $file_path;
            echo "include###";
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $key <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($key, $value)
    {
        throw new \Exception("cannot write config file");
    }

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $key <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($key)
    {
        unset($this->configs[$key]);
    }
}