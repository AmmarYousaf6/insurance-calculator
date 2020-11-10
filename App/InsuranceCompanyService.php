<?php
namespace App;

use App\MyInterface\InsuranceInterface;
use PHPUnit\Util\Exception;

class InsuranceCompanyService implements InsuranceInterface
{
    private $curl;
    /** @var string  */
    const INSTANCE_URL = "http://demo9084693.mockable.io/insurance";

    /**
     * @return mixed
     */
    public function getQuote()
    {
        $this->getCurlInitOptions( self::INSTANCE_URL , ['month' => 3]);
        try {
            $prices = json_decode(curl_exec($this->curl));
        }
        catch(Exception $ex){
            throw new Exception(0,$ex);
        }
        curl_close($this->curl);
        return $prices;
    }

    /**
     * @param $curlUrl
     * @param array $curlOptions
     * @return false|resource
     */
    private function getCurlInitOptions($curlUrl, array $curlOptions)
    {
        $this->curl = curl_init();
        curl_setopt_array($this->curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $curlUrl,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $curlOptions
        ));
        return $this->curl;
    }
}