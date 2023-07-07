<?php 
	namespace MosxTech\DnsInfoService;			  

	$result = dns_get_record('google.com');

	/**
	 * Get the Dns Info by Url
	 *	 
	 *
	 * @see DnsInfoServiceTest::testing_to_get_valid_data just testing returned info	 
	 *
	 * @author Slawik Sivinyuk <s.sivinyuk@gmail.com>
	 */
	final class DnsInfoService{
		public function __construct()
		{
		}
		/** 
		 * @param string
		 * @return mixed
		 */
		public function getDnsInfo($url){
			$result = dns_get_record($url);
			return $result;
		}
	}
?>