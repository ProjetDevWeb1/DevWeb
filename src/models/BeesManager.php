<?php

class BeesManager
{

    public function getBees()
    {
        $con = mysqli_connect("localhost","root","","teyabeille");
        $req = mysqli_query($con, "SELECT * FROM abeille ORDER BY 2");

        $resultArray = [];
        while ($row = mysqli_fetch_array($req))
            $resultArray[] = $row;


        mysqli_close($con);
        return $resultArray;
    }

    public function create() {
        $con = mysqli_connect("localhost","root","","teyabeille");
        $name =  $_REQUEST['nom'];
        $type = $_REQUEST['type'];
        $description = $_REQUEST['description'];
        mysqli_query($con, "INSERT INTO abeille (nom,type,description) VALUES ('$name', '$type','$description')");
        var_dump("CC");
        mysqli_close($con);

    }

    public function delete() {
        $con = mysqli_connect("localhost","root","","teyabeille");
        mysqli_query($con, "DELETE FROM abeille WHERE id = $_POST");
        var_dump("CC");
        mysqli_close($con);
    }

}

?>
