<?php
namespace apps\common;
use \th\co\bpg\cde\core\COAuthClient;
class AuthClient extends COAuthClient {
   /* public function __construct($params) {
       parent::__construct($params);
       if(isset($_COOKIE['token'])){
        $this->token= $_COOKIE['token'];
       }
    }
    
    public function authorization() {
        return parent::authorization();
    }
    
    public function authenticate(){
        $token=parent::authenticate();
        if($token){
            setcookie("token", $token,0, "/");
            return true;
        }
        return false;
    }*/
    
    protected $token;
    protected $params;

    public function __construct($params) {
        $this->params = $params;
    }

    public function authenticate() {
        $key=$this->params["OAUTH2_ACCESS_KEY"];
        $code=null;
        if (!$code && isset($_GET[$key])) {
            $code = $_GET[$key];
        }
       // echo $code;
        if ($code) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->params['OAUTH2_TOKEN_URI']);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$this->params["OAUTH2_ACCESS_KEY"]."=" . $code);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            //echo $server_output;
            $this->token=$server_output;
            curl_close($ch);
            return $this->token;
        } else {
            $this->authorization();
            return false;
        }
    }

    public function authorization() {
        $p = array(
            "OAUTH2_CALLBACK_URL" => $this->params["OAUTH2_CALLBACK_URL"]
        );
        $data = JWT::encode($p, $this->params["OAUTH2_CLIENT_SECRET"]);
        $data = base64_encode($this->params["OAUTH2_CLIENT_ID"] . "|" . $data);
        $authUrl= $this->params["OAUTH2_AUTH_URL"] . "?".$this->params["OAUTH2_ACCESS_KEY"]."=" . $data;
        header('Location: ' . $authUrl);
        exit();
    }

    public function getAccessToken() {
        return $this->token;
    }

    public function getUserInfo() {
        $data = base64_decode($this->token);
        return JWT::decode($data, $this->params["OAUTH2_CLIENT_SECRET"], array('HS256'));
    }
    
}
