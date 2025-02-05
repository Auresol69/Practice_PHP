<?php 
include("database.php");

$sql = "Select count(*) as total from product";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$total = $row['total'];
$itemPerPage = 2;



$sumPage = ceil($total/$itemPerPage);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1 ;
$offset = ($page-1)*$itemPerPage;

$offset = (int)$offset;
$itemPerPage = (int)$itemPerPage;

$sql = "Select * from product limit ?,?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii",$offset,$itemPerPage);
$stmt->execute();
$result = $stmt->get_result();

$products= [];
while ($row=$result->fetch_assoc()){
    $products[]= "<div class='product'>" . $row['name'] . "</div>";
}
$stmt->close();

$response = [
    'html' => implode("",$products),
    'sumPage' => $sumPage,
    'currentPage' => $page
];

echo json_encode($response);

$conn->close();