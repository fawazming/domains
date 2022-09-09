<?php namespace App\Controllers;

class Subdomains extends BaseController
{
	private function myUrlEncode($string) {
	    return urlencode(utf8_encode($string));
	}

	public function tester()
	{
		// $value = '{"dname":"example","ttl":14400,"record_type":"A","data":["11.22.33.44"]}';
		$this->payloader(['tld'=>'sgm.ng','site_type' => 'custom', 'domain' => 'txtcustom', 'owner' => 'Rayyan Tech', 'data'=>['data'=>'awskhhdawh8989 89786 76jjbju it88y.io', 'record_type'=> 'TXT']]);

	}

	private function payloader($data)
	{
		$Siteconfig = new \App\Models\Siteconfig();

		switch ($data['site_type']) {
			case 'vepaar':
				$site = $Siteconfig->where('site_type','vepaar')->first();
				$load = '{"dname":"'.$data['domain'].'","ttl":14400,"record_type":"'.$site['record_type'].'","data":["'.$site['data'].'"]}';
				$this->subdomain($this->myUrlEncode($load), $data);
				break;
			case 'branchbob':
				$site = $Siteconfig->where('site_type','branchbob')->first();
				$load = '{"dname":"'.$data['domain'].'","ttl":14400,"record_type":"'.$site['record_type'].'","data":["'.$site['data'].'"]}';
				$this->subdomain($this->myUrlEncode($load), $data);
				break;
			case 'github':
				$site = $Siteconfig->where('site_type','github')->first();
				$load = '{"dname":"'.$data['domain'].'","ttl":14400,"record_type":"'.$site['record_type'].'","data":["'.$data['data'].'"]}';
				$this->subdomain($this->myUrlEncode($load), $data);
				break;
			case 'alwaysdata':
				$site = $Siteconfig->where('site_type','alwaysdata')->first();
				$load = '{"dname":"'.$data['domain'].'","ttl":14400,"record_type":"'.$site['record_type'].'","data":["'.$data['data'].'"]}';
				$this->subdomain($this->myUrlEncode($load), $data);
				break;
			case 'custom':
				$site = $Siteconfig->where('site_type','custom')->first();
				$load = '{"dname":"'.$data['domain'].'","ttl":14400,"record_type":"'.$data['data']['record_type'].'","data":["'.$data['data']['data'].'"]}';
				$this->subdomain($this->myUrlEncode($load), $data);
				break;
		}
		            
	}

	private function serialCounter()
	{
		$Variables = new \App\Models\Variables();
		$serial = $Variables->where('name','old_serial')->first();

		$dt = substr($serial['value'], 0, 8);
		$cnt = substr($serial['value'], 8);

		if($dt == date('Ymd')){
			$adder = ($cnt>=9) ? $cnt + 1 : '0'.($cnt + 1);
			return ($dt.$adder);
		}else{
			return (date('Ymd').'00');
		}
	}

	private function updateCounter($response, $info)
	{
		$Variables = new \App\Models\Variables();
		$Domains = new \App\Models\Domains();

		$serialId = $Variables->where('name','old_serial')->first()['id'];

		$serial = $response->data->new_serial;

		$dt = substr($serial, 0, 8);
		$cnt = substr($serial, 8, 9);

		$adder = ($cnt>9) ? $cnt - 1 : '0'.($cnt - 1);
		$serial = $dt.$adder;

		$res = $Variables->update($serialId, ['value' => $serial]);

		//Update Domains Table
		$r = $Domains->insert($info);

		return $res;
	}

	private function subdomain(string $pay, array $info)
	{
		switch ($info['tld']) {
			case 'sgm.ng':
				$this->runSGM($pay, $info);
				break;
			case 'ijb.ng':
				$this->runIJB($pay, $info);
				break;
			case 'abk.ng':
				$this->runABK($pay, $info);
				break;
			default:
				// code...
				break;
		}
		// create Subdomain Query  https://hostname.example.com:2083/execute/SubDomain/addsubdomain?domain=khalifah&rootdomain=sgm.ng&dir=%2fkhalifah.sgm.ng
		// Update a DNS zone Query  https://hostname.example.com:2083/execute/DNS/mass_edit_zone?zone=example.com&serial=202001010100&remove=23
	}


	private function runSGM($pay, $info)
	{
		$payload = $pay;
		$query ="https://sgm.ng:2083/execute/DNS/mass_edit_zone?zone=sgm.ng&serial=".$this->serialCounter()."&add=".$payload;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$header[0] = "Authorization: cpanel ".$_ENV['SGM_USER'].":".$_ENV['SGM_TOKEN'];
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
		curl_setopt($curl, CURLOPT_URL, $query);

		$result = curl_exec($curl);
		var_dump($result);
		$result = json_decode($result);
		if($result->status){
			var_dump($this->updateCounter($result, $info));
		}

		curl_close($curl);
	}

}