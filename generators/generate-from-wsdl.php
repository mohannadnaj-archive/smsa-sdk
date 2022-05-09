<?php

require __DIR__.'/../vendor/autoload.php';

use SmsaSDK\Config;
use SmsaSDK\SmsaManager as Smsa;

$smsa = new Smsa();

$uri = Config::get('smsa_uri');

$smsa->setUp(compact('uri'));

$generator = new \Wsdl2PhpGenerator\Generator();

$nameSpace = 'SmsaSDK\Methods';
$soapClient = '\SmsaSDK\SoapClient';

$outputDir = __DIR__.'/../src/Methods/';

$files = glob($outputDir.'/*.php');

echo 'Downloading WSDL File from: '.$uri."\n\r";

$wsdlFile = $smsa->downloadWsdl();

echo 'WSDL File downloaded to: ['.$wsdlFile."\n\r";

echo 'Removing Methods Classes: ['.count($files).'] file found located in ['.$outputDir."]\r\n";

foreach ($files as $file) { // iterate files
    if (is_file($file)) {
        unlink($file); // delete file
    }
}

echo "Files Removed Successfully\n\r";

echo "Generating Methods Files\n\r";

$generator->generate(
    new \Wsdl2PhpGenerator\Config(
        [
            'inputFile'                      => $wsdlFile,
            'outputDir'                      => $outputDir,
            'namespaceName'                  => $nameSpace,
            'soapClientClass'                => $soapClient,
            'constructorParamsDefaultToNull' => true,
        ]
    )
);

echo "Methods Files Generated Successfully\n\r";

$smsaWebServicePath = __DIR__.'/../src/Methods/SMSAWebService.php';

echo "Applying Changes to SMSAWebService.php\n\r";

$SMSAWebService = file_get_contents($smsaWebServicePath);

$replaceToRelativePath = str_replace("'".realpath(__DIR__.'/..//'), "__DIR__ . '", $SMSAWebService);

file_put_contents($smsaWebServicePath, $replaceToRelativePath);

echo "Changes applied successfully to SMSAWebService.php\n\r";
