<?php

namespace Asifmuztaba1\LaravelSeer\App\Http\Middleware\ApiLogger;

use Closure;
use Illuminate\Support\Facades\Log;

class ApiLoggerMiddleware
{

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if ($this->shouldMonitorRequest($request)) {
            $this->logRequestAndResponse($request, $response);
        }

        return $response;
    }

    protected function shouldMonitorRequest($request): bool
    {
        return true;
    }

    protected function logRequestAndResponse($request, $response): void
    {
        Log::info('API Request', [
            'method' => $request->method(),
            'url' => $request->url(),
            'payload' => $request->all(),
            'response' => $response->getContent(),
            'timestamp' => now(),
        ]);
    }
}
