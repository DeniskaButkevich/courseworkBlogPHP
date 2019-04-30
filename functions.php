<?php
    $mysql_connect = false;
    function connectDB () {
        global $mysql_connect;
        $mysql_connect = new mysqli("localhost","root","","blogbd");
        $mysql_connect->query('SET NAMES "utf8"');
    }

    function closeDB () {
        global $mysql_connect;
        $mysql_connect->close ();
    }
    // ORDER BY 'if' DESC LIMIT $limit
    function getNews ($limit) {
        global $mysql_connect;
        connectDB();
        $result = $mysql_connect->query("SELECT * FROM `news` ORDER BY 'if' DESC LIMIT $limit");
        closeDB();
        return resultToArray ($result);
    }

    function resultToArray ($result) {
        $array = array ();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
            echo "number of rows: " . $result->num_rows;
        return $array;
    }

    function NumNews(){
        global $mysql_connect;
        connectDB();   
        $res = $mysql_connect->query("SELECT id FROM news ORDER BY id ASC");
               
        return $res->num_rows;   
    }
    
?>