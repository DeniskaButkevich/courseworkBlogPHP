<?php
    $total_rows = NumNews();
    $count_news_page = 6;
    $last_page = ceil($total_rows/$count_news_page);
    if($last_page < 1){
    $last_page = 1;
    }

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
    function getNews ($page_namber) {
        global $count_news_page;
        $limit = 'LIMIT ' .($page_namber - 1) * $count_news_page .',' .$count_news_page;
        global $mysql_connect;
        connectDB();
        $result = $mysql_connect->query("SELECT id, title, intro_text FROM news $limit");
        closeDB();
        return resultToArray ($result);
    }

    function resultToArray ($result) {
        $array = array ();
        while (($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }

    function NumNews(){
        global $mysql_connect;
        connectDB();   
        $res = $mysql_connect->query("SELECT id FROM news ORDER BY id ASC");
               
        return $res->num_rows;   
    }
    
?>