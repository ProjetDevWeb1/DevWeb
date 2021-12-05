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
        $description = $_REQUEST['description'];
        mysqli_query($con, "INSERT INTO abeille (nom,type,description) VALUES ('$name', '$type','$description')");
        mysqli_close($con);

    }

    public function delete($id) {
        $con = mysqli_connect("localhost","root","root","teyabeille");
        mysqli_query($con, "DELETE FROM abeille WHERE id = $id");
        mysqli_close($con);
    }

}

?>
