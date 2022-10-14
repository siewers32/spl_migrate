<?php
namespace App\Controllers;
use App\Application\Container;
use App\Models\Serial;

class MigrationController extends Controller
{
    private $dbh;
    private $serial;
    
    public function __construct(Container $c)
    {
        parent::__construct($c);
        $this->dbh = $c->get('db')->getConnection();
        $this->serial = new Serial;
    }

    public function migrate() {
        $aantal = 2;
        $email_addresses = ['jsiewers@deltion.nl', 'siewers32@gmail.com', 'janjaap@siewers.org'];
        for($i = 0; $i < $aantal; $i++) {
            $day = str_pad(random_int(1,28), 2, '0', STR_PAD_LEFT);
            $month = str_pad(random_int(1,12), 2, '0', STR_PAD_LEFT);
            $year = random_int(1980,2010);
            $args = [
                'street_address_number' => random_int(1,200),
                'date_of_birth' => $year."-".$month."-".$day,
                'student_id' => 999900 + $i,
                'serial' => 'WTFL'.(2500 + $i),
                'email' => $email_addresses[array_rand($email_addresses)],
            ];    
            $this->serial->store($this->dbh, $args);
        }
    }


}