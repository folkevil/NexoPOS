<?php

namespace App\Http\Requests;

use App\Services\CrudService;
use Hook;
use Illuminate\Foundation\Http\FormRequest;

class BaseCrudRequest extends FormRequest
{
    public function getPlainData( $namespace )
    {
        $service    =   new CrudService;
        $resource   =   $service->getCrudInstance( $this->route( 'namespace' ) );
        return $service->getPlainData( $resource, $this );
    }
}
