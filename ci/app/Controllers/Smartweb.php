<?php
/**
* Custom domain registrar
*/
namespace App\Controllers;

class Smartweb extends BaseController
{
    public $config = array(
        'apikey'   => null,
        'email' => null
    );

    public function __construct()
    {
        $this->config['apikey'] = $_ENV['apikey'];
        $this->config['email'] = $_ENV['email'];
    }

    public static function getConfig()
    {
        return array(
            'label' => 'Manages domains on Smartweb via API',
            'form'  => array(
                'apikey' => array('text', array(
                            'label' => 'Smartweb API key',
                            'description'=>'Smartweb API key',
                    ),
                 ),
                'email' => array('email', array(
                            'label' => 'Smartweb API email',
                            'description'=>'Smartweb API email',
                            // 'renderPassword' => true,
                    ),
                 ),
            ),
        );
    }

    public function getTlds()
    {
        $params['GET'] = true;
        $result = explode(',',$this->_process('/tlds', $params)[0]);

        echo view('response', ['lists'=>$result]);
    }

    public function isDomainCanBeTransfered(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Checking if domain can be transfered: ' . $domain->getName());
        return true;
    }

    public function isDomainAvailable()
    {
        $params['GET'] = false;
        $params['param']['searchTerm'] = 'mssnremo';
        $params['param']['tldsToInclude'] = ['ng','com.ng','.org'];
        
        $result = explode(',',$this->_process('/domains/lookup', $params));

        echo view('response', ['lists'=>$result]);
    }

    public function modifyNs(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Modifying nameservers: ' . $domain->getName());
        $this->getLog()->debug('Ns1: ' . $domain->getNs1());
        $this->getLog()->debug('Ns2: ' . $domain->getNs2());
        $this->getLog()->debug('Ns3: ' . $domain->getNs3());
        $this->getLog()->debug('Ns4: ' . $domain->getNs4());
        return true;
    }

    public function transferDomain(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Transfering domain: ' . $domain->getName());
        $this->getLog()->debug('Epp code: ' . $domain->getEpp());
        return true;
    }

    public function getDomainDetails(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Getting whois: ' . $domain->getName());

        if(!$domain->getRegistrationTime()) {
            $domain->setRegistrationTime(time());
        }
        if(!$domain->getExpirationTime()) {
            $years = $domain->getRegistrationPeriod();
            $domain->setExpirationTime(strtotime("+$years year"));
        }
        return $domain;
    }

    public function deleteDomain(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Removing domain: ' . $domain->getName());
        return true;
    }

    public function registerDomain()
    {
        $param =
        [
            "domain"       => 'mssnremo.com.ng',
            "regperiod"    => (int)'1',
            "domainfields" => '',
            "addons"       =>
                [
                    "dnsmanagement"   => 1,
                    "emailforwarding" => 1,
                    "idprotection"    => 0,
                ],
            "nameservers"  =>
                [
                    'ns1.dns-parking.com',
                    'ns2.dns-parking.com',
                ],
            "contacts"     =>
                [
                    "registrant" =>
                        [
                            'firstname'   => 'AbdulFatah',
                            'lastname'    => 'Murtadho',
                            'companyname' => 'MSSN Remo',
                            'email'       => 'rayyantechnologiesltd@gmail.com',
                            'address1'    => '12, Abiodun Ogunyanwo St. Makun',
                            'address2'    => '',
                            'city'        => 'Sagamu',
                            'state'       => 'Ogun State',
                            'postcode'    => '121001',
                            'country'     => 'NG',
                            'phonenumber' => '09031306022',
                            'tax_id'      => ''
                        ],
                ]
        ];

        $params['GET'] = false;
        $params['param'] = $param;
        
        $result = explode(',',$this->_process('/order/domains/register', $params));
        var_dump($result);
        echo view('response', [ 'lists' =>[] ]);
    }

    public function renewDomain(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Renewing domain: ' . $domain->getName());
        return true;
    }

    public function modifyContact(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Updating contact info: ' . $domain->getName());
        return true;
    }

    public function enablePrivacyProtection(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Enabling Privacy protection: ' . $domain->getName());
        return true;
    }

    public function disablePrivacyProtection(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Disabling Privacy protection: ' . $domain->getName());
        return true;
    }

    public function getEpp(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Retrieving domain transfer code: ' . $domain->getName());
        return true;
    }

    public function lock(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Locking domain: ' . $domain->getName());
        return true;
    }

    public function unlock(Registrar_Domain $domain)
    {
        $this->getLog()->debug('Unlocking: ' . $domain->getName());
        return true;
    }


    /**
     * Create authorization headers
     *
     * @return array
     */
    private function getAuthHeaders()
    {
        $time = gmdate("y-m-d H");
        $token = base64_encode(hash_hmac("sha256", $this->config['apikey'], "{$this->config['email']}:$time"));

        return
        [
            "username"  => $this->config['email'],
            "token"     => $token
        ];
    }

    /**
     * Runs an api command and returns parsed data.
     * @param string $command
     * @return array
     */
    private function _process($command, $params)
    {
        $endpoint   = "https://smartweb.com.ng/web/modules/addons/DomainsReseller/api/index.php".$command;

        $headers = $this->getAuthHeaders();
        $httpheaders = [
            "username: ".$headers['username'],
            "token: ".$headers['token']
        ];

        $param     = $params['param'];
        // var_dump(http_build_query($param));

        if($params['GET']){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheaders);
            $data = curl_exec($ch);
        }else{
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_POST, true); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheaders);
            $data = curl_exec($ch);
        }

        if ($data === false) {
            $e = new Registrar_Exception(sprintf('CurlException: "%s"', curl_error($ch)));
            $this->getLog()->err($e);
            curl_close($ch);
            throw $e;
        }
        
        curl_close($ch);

        if ($data)
            return $this->_parseResult($data);
    }

    /**
     * Parses data returned by request.
     * @param string $data
     * @return array
     */
    private function _parseResult($data)
    {

        $lines = explode("\n", $data);
        $result = $data;

        // var_dump($data);
        
        // if ((array_key_exists('status', $result))
        //     && ($result['status'] == 'FAILURE'))
        // {
        //     throw new Registrar_Exception($result['message']);
        // }
        
        return $result;
    }

}