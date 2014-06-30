<?php

require_once 'AbstractBookFactory.php';
require_once'OReillyPHPBook.php';
require_once'OReillyMySQLBook.php';

class OReillyBookFactory extends AbstractBookFactory {

    private $context = "OReilly";

    function makePHPBook() {
        return new OReillyPHPBook;
    }

    function makeMySQLBook() {
        return new OReillyMySQLBook;
    }

}
