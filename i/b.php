<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>แสดงจังหวัด</title>

<style>
table{
    border-collapse: collapse;
    width: 900px;
}
th, td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}
th{
    background:#4158D0;
    color:white;
}
img{
    border-radius:10px;
    box-shadow:0 4px 8px rgba(0,0,0,0.3);
}
</style>

</head>
<body>

<h2>แสดงข้อมูลจังหวัด เศรษฐ์ตพงษ์ คำเสนาะ</h2>
<form method="post" action="" enctype="multipart/form-data"> ชื่อจังหวัด: <input type="text" name="pname" required><br>
    
    เลือกภาค: 
    <select name="rid">
        <?php
            include_once("connectDB.php");
            $sql3 = "SELECT * FROM `regions` ORDER BY `r_name` ASC";
            $rs3 = mysqli_query($conn, $sql3);
            while($data3 = mysqli_fetch_array($rs3)) {
        ?> 
            <option value="<?php echo $data3['r_id']; ?>"><?php echo $data3['r_name']; ?></option>
        <?php } ?> 
    </select><br>

    เลือกรูปภาพ: <input type="file" name="pimage" accept="image/*" required><br><br>
    
    <button type="submit" name="Submit"> บันทึก </button>
</form>

<table>
<tr>
    <th>ID</th>
    <th>ชื่อจังหวัด</th>
    <th>รูปภาพ</th>
    <th>ชื่อภาค</th>
</tr>

<?php
include_once("connectDB.php");

$sql = "SELECT p.p_id, p.p_name, r.r_name
        FROM provinces p
        INNER JOIN regions r ON p.r_id = r.r_id
        ORDER BY p.p_name ASC";

$rs = mysqli_query($conn,$sql);

while($data = mysqli_fetch_assoc($rs)){

    // ใช้ p_id เป็นชื่อไฟล์ เช่น 2.jpg หรือ 3.jpg
    $imgPath = "images/".$data['p_id'].".jpg";
?>

<tr>
    <td><?php echo $data['p_id']; ?></td>
    <td><?php echo $data['p_name']; ?></td>

    <td>
        <img src="<?php echo $imgPath; ?>" width="150">
    </td>

    <td><?php echo $data['r_name']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
