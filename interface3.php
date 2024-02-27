<?php

interface t1 {
    function acceptc($dno, $dname);
    function dispd();
    function accepts($sno, $sname);
    function disps();
    function acceptf($fno, $fname);
    function disp();
}

class college implements t1 {
    public $dno, $dname;

    function acceptc($dno, $dname) {
        $this->dno = $dno;
        $this->dname = $dname;
    }

    function dispd() {
        echo("<br>college no=" . $this->dno);
        echo("<br>department name=" . $this->dname);
    }
}

class student implements t1 {
    public $sno, $sname;

    function accepts($sno, $sname) {
        $this->sno = $sno;
        $this->sname = $sname;
    }

    function disps() {
        echo("<br>student no=" . $this->sno);
        echo("<br>student name=" . $this->sname);
    }
}

class faculty extends college {
    public $fno, $fname;

    function acceptf($fno, $fname) {
        $this->fno = $fno;
        $this->fname = $fname;
    }

    function disp() {
        echo("<br>faculty no=" . $this->fno);
        echo("<br>faculty name=" . $this->fname);
    }
}

$ob = new college();
$ob->acceptc(101, "rsmdp");
$ob->dispd();

$ob = new student();
$ob->accepts(10, "aditya");
$ob->disps();

$ob = new faculty();
$ob->acceptf(1, "computer");
$ob->disp();
?>

