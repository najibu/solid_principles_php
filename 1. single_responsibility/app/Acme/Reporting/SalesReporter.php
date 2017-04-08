<?php namespace Acme\Reporting;

use DB, Exception;
use Acme\Repositories\SalesRepository;
use Acme\Reporting\SalesOutputInterface; 

class SalesReporter {
  protected $repo;

  public function __construct(SalesRepository $repo)
  {
    $this->repo = $repo;
  }

  public function between($startDate, $endDate, SalesOutputInterface $formatter)
  {

    // get sales from db
    $sales = $this->repo->between($startDate, $endDate);

    // return results
    return $this->formatter->output($sales);
  }

}
