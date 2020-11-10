<?php
namespace App;
require '../vendor/autoload.php';
class Insurance
{
    /** @var string  */
    const PROVIDER_BANK = 'bank';
    /** @var string  */
    const PROVIDER_INSURANCE_COMPANY = 'insurance-company';

    /**
     * @param null $providers
     * @return mixed
     */
    public function getQuote($providers = null) {
        if (!$providers) {
            $providers = [self::PROVIDER_BANK, self::PROVIDER_INSURANCE_COMPANY];
        } else {
            $providers = [$providers];
        }

        for ($i = 0; $i < count($providers); $i++) {
            switch ($providers[$i]) {
                case self::PROVIDER_BANK:
                    /** @var BankService $bank */
                    $bank = new BankService();
                    $prices = $bank->getQuote();
                case 'insurance-company':
                    /** @var InsuranceCompanyService $insurance */
                    $insurance = new InsuranceCompanyService();
                    $prices = $insurance->getQuote();
            }
            $quote[$providers[$i]] = $prices;
        }
        return $quote;
    }
}
$obj = new Insurance();
var_dump($obj->getQuote());
