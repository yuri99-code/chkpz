<?php

use MODX\Revolution\Rest\modRestController;

class MyControllerItems extends modRestController {
    public $classKey = 'modResource';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
}