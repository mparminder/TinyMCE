<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="math,science" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Rich HTML editor to create">
	<meta name="author" content="WIRIS">
    <!-- Bootstrap CSS -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
    <script type="text/javascript">
		if (window.location.search !== '') {
		    var urlParams = window.location.search;
		    if (urlParams[0] == '?') {
		        urlParams = urlParams.substr(1, urlParams.length);
		        urlParams = urlParams.split('&');
		        for (i = 0; i < urlParams.length; i = i + 1) {
		            var paramVariableName = urlParams[i].split('=')[0];
		            if (paramVariableName === 'language') {
		                _wrs_int_langCode = urlParams[i].split('=')[1];
		                break;
		            }
		        }
		    }
		}
    </script>
	<!-- Editor Plugin -->
	<link type="text/css" rel="stylesheet" href="''"/>
	<script type="text/javascript" src="./tinymce4/tinymce.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/prism.css" />
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Welcome to Quest World</title>
  </head>
  <body>
    <div class="text-center bg-primary py-2">
        <a href="#"><img src="assets/quest.png" width="48px"></a>
    </div>
    <div class="container">
        <div class="row justify-content-evenly my-5"> 
<form method="post">
            <div class="col-md-8 col-12 mb-5">
                <div class="row mb-4">
                    <div class="col-xs-12">
                        <div class="wrs_content">
			<div class="wrs_container">
				<div class="wrs_row">
					
					<div class="wrs_col wrs_s12">
						<div id="editorContainer">
							<div id="toolbarLocation"></div>
							<textarea id="example" name="mytextarea"></textarea>
						</div>
					</div>
				</div>


				
			</div>
		</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12 mb-4">
                        <div><label class="form-label">Option 1</label></div>
                        <div><input type="radio" name="option" value="1"> Mark as correct answer</input></div>
                        <br />
                        <textarea class="myeditablediv" id="myeditablediv" ></textarea>
                    </div>
                    <div class="col-md-6 col-xs-12 mb-4">
                        <div><label class="form-label">Option 2</label></div>
                        <div><input type="radio" name="option" value="2"> Mark as correct answer</input></div>
                        <br />
                        <textarea class="myeditablediv" id="myoption2div" ></textarea>
                    </div>
                    <div class="col-md-6 col-xs-12 mb-4">
                        <div><label class="form-label">Option 3</label></div>
                        <div><input type="radio" name="option" value="3"> Mark as correct answer</input></div>
                        <br />
                        <textarea class="myeditablediv" id="myoption3div" ></textarea>
                    </div>
                    <div class="col-md-6 col-xs-12 mb-4">
                        <div><label class="form-label">Option 4</label></div>
                        <div><input type="radio" name="option" value="4"> Mark as correct answer</input></div>
                        <br />
                        <textarea class="myeditablediv" id="myoption4div" ></textarea>
                    </div>
                </div>
            </div>
			<?php 
              // Include the database config file 
                  include_once 'dbConfig.php';
                  $table_grade = 'grade';
                  $table_subject = 'subject';
                  $table_chapter = 'chapter';				  
              // Fetch all the Grade data 
               $query = "SELECT * FROM $table_grade ORDER BY ID ASC"; 
               $result = $db->query($query); 
			?>
            <div class="col-md-3 col-12 my-3">
                <div class="row bg-light p-3">
                    <div class="col-12">
                      <label for="ddnGrade" class="form-label">Grade</label><br />
                      <select name="ddnGrade" id="ddnGrade" class="form-control mb-2">
					  <option value="">Select Grade</option>
                        <?php 
                          if($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){  
                            echo '<option value="'.$row['ID'].'">'.$row['Grade_info'].'</option>'; 
                            } 
                            }else{ 
                            echo '<option value="">Grade are not available</option>'; 
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="ddnSubject" class="form-label">Subject</label><br />
                        <select name="ddnSubject" id="ddnSubject" class="form-control mb-2">
                            <option value="">Select Subject</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="ddnChapter" class="form-label">Chapter</label><br />
                        <select name="dd  vcccccccccnChapter" id="ddnChapter" class="form-control mb-2">
                            <option value="">Select Chapter</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="ddnDifficulty" class="form-label">Difficulty</label><br />
                        <select name="ddnDifficulty" id="ddnDifficulty" class="form-control mb-2">
                        <option value="">Select Difficulty</option>
                            <option>Easy</option>
                            <option>Medium</option>
                            <option>Hard</option>
                        </select>
                    </div>
                    <div class="col-12 my-3">
                        <input type="submit" class="form-control btn-primary" id="btnAddQuestion" name="btnAddQuestion"></input>
                    </div>
                </div>
            </div>
			</form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/prism.js"></script>
        <script type="text/javascript" src="js/wirislib.js"></script>
		<script type="text/javascript" src="js/wirisliboption.js"></script>
		<script type="text/javascript" src="js/wirisliboption2.js"></script>
		<script type="text/javascript" src="js/wirisliboption3.js"></script>
		<script type="text/javascript" src="js/wirisliboption4.js"></script>
        <script src="js/google_analytics.js"></script>
        <script>
			if(typeof urlParams !== 'undefined') {
				var selectLang = document.getElementById('lang_select');
				selectLang.value = urlParams[1];
			}
		</script>	
  </body>
</html>
