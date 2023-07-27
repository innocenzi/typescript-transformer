<?php

namespace Spatie\TypeScriptTransformer\Laravel\Routes;

use Spatie\TypeScriptTransformer\TypeScript\TypeScriptNode;
use Spatie\TypeScriptTransformer\TypeScript\TypeScriptObject;
use Spatie\TypeScriptTransformer\TypeScript\TypeScriptProperty;
use Spatie\TypeScriptTransformer\TypeScript\TypeScriptRaw;

class RouteInvokableController implements RouterStructure
{
    /**
     * @param  array<string>  $methods
     */
    public function __construct(
        public RouteParameterCollection $parameters,
        public array $methods,
        public string $url,
    ) {
    }

    public function toJsObject(): array
    {
        return [
            'url' => $this->url,
            'methods' => array_values($this->methods),
        ];
    }
}
