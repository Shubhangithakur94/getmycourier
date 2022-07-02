

<?php

if (isset($_GET['term'])) {

    $query = "SELECT * FROM  PinCode_List WHERE Pincode LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            $res[] = $user['Pincode'];
        }
    } else {
        $res = array();
    }
    //return json res
    echo json_encode($res);
}


if (isset($_GET['destinaction'])) {

    $query = "SELECT * FROM  PinCode_List WHERE Pincode LIKE '{$_GET['destinaction']}%' LIMIT 25";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($user = mysqli_fetch_array($result)) {
            $res[] = $user['Pincode'];
        }
    } else {
        $res = array();
    }
    //return json res
    echo json_encode($res);
}


?>
