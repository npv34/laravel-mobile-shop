<?php


namespace App\Http\Services;


interface ProductServiceInterface extends BaseServiceInterface
{
    function findBySlug($slug);
}
