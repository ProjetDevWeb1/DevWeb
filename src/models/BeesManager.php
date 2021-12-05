<?php

class BeesManager
{

    public function getBees()
    {
        $con = mysqli_connect("localhost","root","root","teyabeille");
        $req = mysqli_query($con, "SELECT * FROM abeille ORDER BY 2");

        $resultArray = [];
        while ($row = mysqli_fetch_array($req))
            $resultArray[] = $row;


        mysqli_close($con);
        return $resultArray;
    }

    public function create() {
        $con = mysqli_connect("localhost","root","root","teyabeille");
        $name =  $_REQUEST['nom'];
        $type = $_REQUEST['type'];
        mysqli_query($con, "INSERT INTO abeille (nom, type) VALUES ('$name', '$type')");
        var_dump("CC");
        mysqli_close($con);

    }
}

?>
