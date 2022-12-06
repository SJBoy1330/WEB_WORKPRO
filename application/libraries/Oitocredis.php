<?php

class Oitocredis {

    var $CI;
    private $redis;
    private $config;

    function __construct()
    {
        $this->CI = & get_instance();
        $this->CI->config->load('redis');
        $this->config = $this->CI->config->item('redis_default');

        $this->redis = new Redis();

        $this->redis->connect($this->config['host'], $this->config['port']);
        if ($this->config['password'] != ""){
            $this->redis->auth($this->config['password']);
        }
    }

    function check_connection(){

        echo "Server is running ". $this->redis->ping();
    }

    function info(){
        return $this->redis->info();
    }

    function storedata($key, $result, $expire){
        if (!$this->redis->get($key)){
            $arrResult = [];
            if ($result){
                foreach($result as $row){
                    $arrResult[]= $row;
                }
            }

            $this->redis->set($key, serialize($arrResult));
            $this->redis->expire($key, $expire);
        } 
        /*** jika sudah ada tak usah melakukan apapun */
    }

    function appenddata($key, $data, $expire=0){

        if (empty($expire)){
            $expire = $this->config['ttl'];
        }

        $this->redis->set($key, $data);
        $this->redis->expire($key, $expire);
    }

    function getdata($key){
        $result = unserialize($this->redis->get($key));
        return ($result != null) ? $result : false;
    }

    function getkeys($strkey="*"){
        $resKey = $this->redis->keys($strkey);
        return $resKey;
    }

    function getdatastring($key){
        return $this->redis->get($key);
    }


    function deletekeys($thekey=NULL){
        $this->redis->del($thekey);
    }

    function getkeysvalue($strkey="*")
    {
        $arrKeys = $this->redis->keys($strkey);
        foreach($arrKeys as $valkey){
            $arrTmp[] = $this->redis->get($valkey);
        //    $i++;
        }
        return $arrTmp;
    }
}
