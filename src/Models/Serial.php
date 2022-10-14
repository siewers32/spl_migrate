<?php

namespace App\Models;

class Serial extends Model
{
    public function __construct() {
        $this->table = "serials";
        $this->fields= [
            'street_address_number',
            'date_of_birth',
            'student_id',
            'serial',
            'email'
        ];
        $this->pk = 'id';
    }
}