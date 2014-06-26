<?php

require_once('AbstractPageDirector.php');

class HTMLPageDirector extends AbstractPageDirector {

    private $builder = NULL;

    public function __construct(AbstractPageBuilder $builder_in) {
        $this->builder = $builder_in;
    }

    public function buildPage() {
        //builds the page step by step (title, heading, text format)
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    public function getPage() {
        //returns the complete page
        return $this->builder->getPage();
    }

}
