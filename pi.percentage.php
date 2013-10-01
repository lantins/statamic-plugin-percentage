<?php

class Plugin_percentage extends Plugin {

  var $meta = array(
    'name'       => 'Percentage Calculator',
    'version'    => '1.0',
    'author'     => 'Luke Antins',
    'author_url' => 'http://lividpenguin.com'
  );

  public function index() {
    // get tag params.
    $params = array(
      'given'     => $this->fetchParam('given', 0, 'is_numeric'),
      'of'        => $this->fetchParam('of', 1, 'is_numeric'),
      'precision' => $this->fetchParam('precision', 0, 'is_numeric'),
    );

    // ensure we dont try to devide by zero.
    if ($params['of'] <= 0) $params['of'] = 1;

    // calculate the percentage.
    $percentage = ($params['given'] / $params['of']) * 100.0;

    // round percentage.
    return round($percentage, $params['precision']);
  }
}
