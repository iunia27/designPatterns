<?php

require_once 'AbstractBookFactory.php';
require_once 'SamsPHPBook.php';
require_once 'SamsMySQLBook.php';

class SamsBookFactory extends AbstractBookFactory {

    private $context = "Sams";

    function makePHPBook() {
        return new SamsPHPBook;
    }

    function makeMySQLBook() {
        return new SamsMySQLBook;
    }

}
