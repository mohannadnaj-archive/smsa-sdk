$arguments = [];
$firstArgument = func_get_args()[0];

if(is_array($firstArgument))
    return static::handleStaticCalls('%method', [$firstArgument]);

%innerMethod

return static::handleStaticCalls('%method', [$arguments]);
