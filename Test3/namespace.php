<?php
namespace SoftUni {
    function getTopStudent() {
        return "Pesho";
    }
}

namespace NASA {
    use SoftUni;
    $topSoftUniStudent = SoftUni\getTopStudent();
    echo $topSoftUniStudent; // Pesho
}
