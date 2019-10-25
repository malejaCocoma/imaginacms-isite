<?php

namespace Modules\Isite\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Ihelpers\Http\Controllers\Api\BaseApiController;
use Mockery\CountValidator\Exception;
use Modules\Setting\Contracts\Setting;

class CaptchaMiddleware extends BaseApiController
{
  private $setting;

  public function __construct(Setting $setting)
  {
    $this->setting = $setting;
  }


  public function handle(Request $request, Closure $next)
  {
    try {
      //Get data
      $data = (object)$request->input('attributes');
      if (isset($data->captcha)) {
        $dataCaptcha = (object)$data->captcha;
        if (isset($dataCaptcha->version) && isset($dataCaptcha->token)) {
          $version = $dataCaptcha->version;//Get version of catpcha
          $token = $dataCaptcha->token;//Get token f captcha

          //Define keys according to version of captcha
          $secret = ($version) == 3 ?
            $this->setting->get('isite::reCaptchaV3Secret') :
            $this->setting->get('isite::reCaptchaV2Secret');
          $sitekey = ($version) == 3 ?
            $this->setting->get('isite::reCaptchaV3Site') :
            $this->setting->get('isite::reCaptchaV2Site');

          //Define class captcha
          $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha($secret, $sitekey);
          $isValid = $captcha->verifyResponse($token);//Validate token captcha
          if (!$isValid)
            throw new Exception();
        }
      }
    } catch (\Exception $error) {
      $response = ["errors" => 'Invalid Captcha'];
      return response()->json($response, 400);
    }

    return $next($request);
  }
}