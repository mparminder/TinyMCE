jQuery(document).ready(function(){
    $('#ddnGrade').on('change', function(){
        var gradeID = $(this).val();
        if(gradeID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'grade_id='+gradeID,
                success:function(html){
                    $('#ddnSubject').html(html);
                    $('#ddnChapter').html('<option value="">Select Subject first</option>'); 
                }
            }); 
        }else{
            $('#ddnSubject').html('<option value="">Select Grade first</option>');
            $('#ddnChapter').html('<option value="">Select Subject first</option>'); 
        }
    });
    
    $('#ddnSubject').on('change', function(){
        var subjectID = $(this).val();
        if(subjectID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'subject_id='+subjectID,
                success:function(html){
                    $('#ddnChapter').html(html);
                }
            }); 
        }else{
            $('#ddnChapter').html('<option value="">Select Subject first</option>'); 
        }
    });
	$('form').on('submit', function (e) {
		
		e.preventDefault();
        tinyMCE.init({
        mode : "specific_textareas",
        editor_selector : "mceEditor"  
    });
    var question = tinyMCE.get('example').getContent();
	var option1 = tinyMCE.get('myeditablediv').getContent();
	var option2 = tinyMCE.get('myoption2div').getContent();
	var option3 = tinyMCE.get('myoption3div').getContent();
	var option4 = tinyMCE.get('myoption4div').getContent();
	
    var formData = {
      question: question,
      option1: option1,
	  option2: option2,
	  option3: option3,
	  option4: option4,
	  grade: $("#ddnGrade").val(),
	  subject: $("#ddnSubject").val(),
	  chapter: $("#ddnChapter").val(),
	  difficulty: $("#ddnDifficulty").val(),
	  answer:$('input[name="option"]:checked').val(),
    };

    $.ajax({
      type: "POST",
      url: "ajaxData.php",
      data: formData,
      cache: false,
                    success: function(response) {
                        alert('Data store successfuly');
                    }
   
  });
});

});