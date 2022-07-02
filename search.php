
<?php
include "config.php";

// Get search term 
$searchTerm = $_GET['term'];

// Fetch matched data from the database 
$query = $conn->query("SELECT Pincode FROM  PinCode_List WHERE Pincode LIKE '%" . $searchTerm . "%'  ORDER BY Pincode ASC LIMIT 25");

// Generate array with skills data 
$skillData = array();
if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $data['id'] = $row['Pincode'];
        $data['value'] = $row['Pincode'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array 
echo json_encode($skillData);
?>


