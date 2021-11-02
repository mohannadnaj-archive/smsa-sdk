<?php

require __DIR__.'/../vendor/autoload.php';

use SmsaSDK\Config;

$methodsAndResponses = get_methods_and_responses();
$trait = <<<'EOD'
<?php
namespace SmsaSDK;

trait MethodsRedirector {
EOD;

foreach ($methodsAndResponses as $method => $response) {
    $trait .= "\n\r".build_method($method, $response);
}

$trait .= "\n\r}";

file_put_contents(__DIR__.'/../src/MethodsRedirector.php', $trait);

function build_method($method, $response)
{
    $docBlock = "/**\n\r";
    $rawMethod = $rawMethodCopy = "public static function $method(";

    $innerMethodTemplate = file_get_contents(__DIR__.'/stubs/MethodsRedirectorInnerMethod.php');
    $innerMethodTemplate = str_replace('%method', $method, $innerMethodTemplate);

    $innerMethod = '';
    if (class_exists($methodClass = 'SmsaSDK\\Methods\\'.$method)) {
        $reflection = new ReflectionClass($methodClass);
        $params = $reflection->getConstructor()->getParameters();

        foreach ($params as $param) {
            $docBlock .= '* @param $'.$param->name."\n\r";
            $rawMethod .= '$'.$param->name.' = null, ';
            $innerMethod .= "if(!is_null(\$$param->name)) { \$arguments['$param->name'] = \$$param->name; } \n\r";
        }
    }

    $docBlock .= "* @return \SmsaSDK\Methods\\$response\n\r";
    $docBlock .= '*/';

    $innerMethodTemplate = str_replace('%innerMethod', $innerMethod, $innerMethodTemplate);

    if ($rawMethod !== $rawMethodCopy) {
        $rawMethod = substr($rawMethod, 0, -2); // remove the last comma and space ", "
    }

    $rawMethod .= ") { $innerMethodTemplate }";

    return $docBlock."\n\r".$rawMethod;
}
function get_methods_and_responses()
{
    $wsdlFile = file_get_contents(Config::get('wsdl_file_path'));

    $responseRegex = '/"([^"]+)Response"/';

    preg_match_all($responseRegex, $wsdlFile, $responseMethods);

    $responseMethods = array_filter(
        $responseMethods[1],
        function ($method) {
            return substr($method, 0, 4) != 'tns:';
        }
    );

    asort($responseMethods);

    $responseMethods = array_values(array_unique($responseMethods));

    $responseMethodsCopy = [];

    array_walk(
        $responseMethods,
        function ($method) use (&$responseMethodsCopy) {
            $responseMethodsCopy[$method] = $method.'Response';
        }
    );

    return $responseMethodsCopy;
}
