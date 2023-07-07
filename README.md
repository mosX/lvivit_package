# lvivit_package
Test Task Package

For using this sophisticated package you should:
1. Add dependency with composer

        composer require mosx/dnsinfo-service
2. Install dependency
        composer install

3. require_once("vendor/autoload.php"); If you did not do it already
4. connect it with 

        use MosxTech\DnsInfoService\DnsInfoService;
        
5.  Create instance of the object and use its functionality )

        $dns = new DnsInfoService();
        $result =  $dns->getDnsInfo('google.com');
6. In result you will get an array with data        
