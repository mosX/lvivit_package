<?php 
    namespace MosxTech\DnsInfoService\Tests;

    use MosxTech\DnsInfoService\DnsInfoService;
    use PHPUnit\Framework\TestCase;

    class DnsInfoServiceTest extends TestCase
    {
        protected function setUp(): void
        {
            $this->unit = new DnsInfoService();
        }

        public function testing_to_get_valid_data(): void
        {
            $response = $this->unit->getDnsInfo('google.com');
            $this->assertIsArray($response);
        }
    }
?>