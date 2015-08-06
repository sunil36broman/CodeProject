<?php

namespace CodeProject\Http\Middleware;

use Closure;
use CodeProject\Repositories\ProjectRepository;

class CheckProjectOwner
{

    private $repository;

    public function __construct (ProjectRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $userId =  \Authorizer::getResourceOwnerId();
        $projectId = $request->project; //project é o nome do request da rota

        if ($this->repository->isOwner($projectId, $userId) == false) {
            return ['error' => 'Access forbidden'];
        }

        return $next($request);
    }
}
