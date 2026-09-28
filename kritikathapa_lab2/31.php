<?php
$conn = new mysqli("localhost","root","","college");

/* INSERT COURSE */
if(isset($_POST['course'])){
    $conn->query("INSERT INTO courses(title,duration,status)
    VALUES('$_POST[title]','$_POST[duration]','$_POST[status]')");
}

/* INSERT STUDENT */
if(isset($_POST['student'])){
    $conn->query("INSERT INTO students
    (name,course_id,fee,rollno,phone,address,dob,status)
    VALUES('$_POST[name]','$_POST[course_id]','$_POST[fee]',
    '$_POST[rollno]','$_POST[phone]','$_POST[address]',
    '$_POST[dob]','$_POST[status]')");
}

/* DELETE */
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $table=$_GET['table'];
    $conn->query("DELETE FROM $table WHERE id=$id");
}
?>

<h3>Add Course</h3>
<form method="post">
    Title: <input name="title">
    Duration: <input name="duration">
    Status: <input name="status">
    <button name="course">Add</button>
</form>

<h3>Courses</h3>
<table border="1">
<tr><th>ID</th><th>Title</th><th>Duration</th><th>Status</th><th>Action</th></tr>

<?php
$r=$conn->query("SELECT * FROM courses");
while($x=$r->fetch_assoc()){
echo "<tr>
<td>$x[id]</td><td>$x[title]</td><td>$x[duration]</td><td>$x[status]</td>
<td><a href='?delete=$x[id]&table=courses'>Delete</a></td>
</tr>";
}
?>
</table>

<h3>Add Student</h3>
<form method="post">
    Name: <input name="name"><br><br>
    Course ID: <input name="course_id"><br><br>
    Fee: <input name="fee"><br><br>
    Roll No: <input name="rollno"><br><br>
    Phone: <input name="phone"><br><br>
    Address: <input name="address"><br><br>
    DOB: <input type="date" name="dob"><br><br>
    Status: <input name="status"><br><br>
    <button name="student">Add Student</button>
</form>

<h3>Students</h3>
<table border="1">
<tr>
<th>ID</th><th>Name</th><th>Course ID</th><th>Fee</th>
<th>Roll No</th><th>Phone</th><th>Action</th>
</tr>

<?php
$r=$conn->query("SELECT * FROM students");
while($x=$r->fetch_assoc()){
echo "<tr>
<td>$x[id]</td><td>$x[name]</td><td>$x[course_id]</td>
<td>$x[fee]</td><td>$x[rollno]</td><td>$x[phone]</td>
<td><a href='?delete=$x[id]&table=students'>Delete</a></td>
</tr>";
}
?>
</table>