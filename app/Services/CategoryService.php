<?php


namespace App\Services;


interface CategoryService
{
    /*
     * 前台
     */
    public function listAll() : array ;

    /*
     * 后台
     */
    public function search(array $data) : array;

    public function list(array $data) : array ;

    public function add(array $fields) : void;

    public function update(int $id, array $fields) : void;

    public function delete(int $id) : void;
}
