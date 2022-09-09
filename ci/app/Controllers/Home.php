<?php namespace App\Controllers;

class Home extends BaseController
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

	public function index()
	{
		return view('new');
	}
	// public function serp()
	// {
	// 	return view('serp');
	// }
	public function payment()
	{
		return view('payment');
	}
	public function webhook()
	{
		$Variables = new \App\Models\Variables();
		$serial = $Variables->update(3,['value'=>$this->request->getGet('status')]);
		echo 'done';
	}
    public function serp()
    {
        $params['GET'] = false;
        $params['param']['searchTerm'] = $this->request->getPost('dname');
        $params['param']['tldsToInclude'] = [$this->request->getPost('tld')];

        $resData = [];
        $result = $this->_process('/domains/lookup', $params);

        // echo view('response', ['lists'=>$result]);
        foreach (json_decode($result[0]) as $key => $res) {
            $resData[$key] = ['dname' => $res->domainName, 'isAvailable' => $res->isAvailable] ;
        }
        return view('serp', ['data'=>$resData]);

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

        return $lines;
    }

	//--------------------------------------------------------------------

}
