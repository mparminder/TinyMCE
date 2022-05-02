<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["grade_id"])){ 
    $query = "SELECT * FROM subject WHERE Grade_id = ".$_POST['grade_id']." ORDER BY ID ASC"; 
    $result = $db->query($query); 
    if($result->num_rows > 0){ 
        echo '<option value="">Select Subject</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['ID'].'">'.$row['Subject_info'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Subject not available</option>'; 
    } 
}elseif(!empty($_POST["subject_id"])){ 
    $query = "SELECT * FROM chapter WHERE Subject_id = ".$_POST['subject_id']." ORDER BY ID ASC"; 
    $result = $db->query($query); 
    
    if($result->num_rows > 0){ 
        echo '<option value="">Select Chapter</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['ID'].'">'.$row['Chapter_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Chapter not available</option>'; 
    } 
}


if(!empty($_POST["question"])){
	$ques = $_POST['question'];
	$option1=$_POST['option1'];
	$option2=$_POST['option2'];
	$option3=$_POST['option3'];
	$option4=$_POST['option4'];
	$grade=$_POST['grade'];
	$subject=$_POST['subject'];
	$difficulty=$_POST['difficulty'];
	$chapter=$_POST['chapter'];
	$answer=$_POST['answer'];
	$sql ="INSERT INTO `questions` (`Questions_info`, `Option1`, `Option2`, `Option3`, `Option4`, `Grade`, `Subject`, `Chapter`, `Difficulty`, `answer`) VALUES ('$ques', '$option1', '$option2', '$option3', '$option4', '$grade', '$subject', '$chapter','$difficulty', '$answer')";
    echo  $sql;
	$result =mysqli_query($db,$sql);
	if($result){
		 echo '1';
	} 
	else {
		 echo '0';
	}
}	
?>