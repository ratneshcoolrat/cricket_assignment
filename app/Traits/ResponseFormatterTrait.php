<?php

namespace App\Traits;

use Log;
use \Symfony\Component\HttpFoundation\Response;


trait ResponseFormatterTrait {

    public function responseSuccess($message = '', $data = array()) {
        $response = array(
            'status' => (int)1,
            'status_code' => Response::HTTP_OK,
            'message' => $message,
            'result' => (object) $data,
        );
        
        return $response;
    }

    public function responseCustom($statusCode, $message = '', $data = array()) {
        $response = array(
            'status' => (int)0,
            'status_code' => $statusCode,
            'message' => $message,
            'result' => (object) $data,
        );
       
        return $response;
    }

    public function responseUnauthorized($message = '', $data = array()) {
        $response = array(
            'status' => (int)0,
            'status_code' => Response::HTTP_UNAUTHORIZED,
            'message' => $message,
            'result' => (object) $data,
        );
       
        return $response;
    }

    public function responseBadRequest($message = '', $data = array()) {

        $response = array(
            'status' => (int)0,
            'status_code' => Response::HTTP_BAD_REQUEST,
            'message' => $message,
            'result' => (object) $data,
        );
      
        return $response;
    }

    public function responseNotFound($message = '', $data = array()) {
        $response = array(
            'status' => (int)0,
            'status_code' => Response::HTTP_NOT_FOUND,
            'message' => $message,
            'result' => (object) $data,
        );
       
        return $response;
    }

    public function responseServerError($message = '', $data = array()) {
        $response = array(
            'status' => (int)0,
            'status_code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            'message' => $message,
            'result' => (object) $data,
        );

        return $response;
    }

    public static function logException($method, $file, $line, $message, $isLogEnable) {
        if ($isLogEnable) {
            Log::error(['method' => $method, 'error' => ['file' => $file, 'line' => $line, 'message' => $message], 'created_at' => date("Y-m-d H:i:s")]);
        }
    }

    public static function logInfo($method, $file, $line, $message) {
        Log::error(['method' => $method, 'info' => ['file' => $file, 'line' => $line, 'message' => $message], 'created_at' => date("Y-m-d H:i:s")]);
    }

}
