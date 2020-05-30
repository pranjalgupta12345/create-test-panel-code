<!DOCTYPE html>
<?php
session_start(); 
if (session_id() == '' || !isset($_SESSION['name'])) 
    { 
  header('Location:student_login.php');
}
else
    {     
  echo "Hi, " . $_SESSION['name'];
}

?>

                            <?php 
                            include 'connection.php';
                            $sql="SELECT * from test where now() between startdate and enddate and category='II'";
                            $result=mysqli_query($conn, $sql);
                             $rows=mysqli_fetch_assoc($result);
//                             echo($rows);exit;
                             if($rows>0){                            
                             $duration = $rows['duration'];}
                             else{
                             echo "<script>alert('please try at scheduled time');</script>";exit;}
//                             echo($duration);exit;
//                                 $testtime = 20; 
                             ?> 
                             <script type="text/javascript"> 
                                 var x = "<?php echo"$duration"?>"; 
                             </script>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        function timeout(){
        var minute=Math.floor(timeLeft/60);
        var second=timeLeft%60;
        if(timeLeft<=0)
        {
            clearTimeout(tm);
            document.getElementById("quiz").submit();
        }
        else
        {
            document.getElementById("time").innerHTML=minute=minute+":"+second;
        }
        timeLeft--;
        
        var tm= setTimeout(function(){timeout()},1000);
        }
        </script>
            
	<title>PHP QUIZ </title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body onload="timeout()">
    <script>
        var timeLeft=x*60;
    </script>
	<div id="time" style="float:right">timeout</div>
 
	<h1>CATEGORY II</h1>
                <h3>NOTE- Each question carry 1 mark each, no negative marking, all ques. are mandatory to attemt</h3>

		
	<form action="result.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>An open-source website creation platform that is written in PHP and uses a MySQL database.</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Software </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Web App</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) CMS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Search Engine Opt, which increasing the quantity traffic to your website through organic search engine results. is Part Of...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Web Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Digital Marketing</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Hypertext Preprocessor is a widely-used, open source scripting language is a</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None Of Above These</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Internet pritocol is a</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 192.168.0.1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 127.0.0.0</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 1080:80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>category we share free Web Design source code & tutorials  Is For</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Web Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Web Developer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Graphic Designer</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
                
                </li>
            
            </ol>
            
            <center><input type="submit" value="Submit" class="submitbtn" /></center>
		
		</form>
	
	</div>
 
 
</body>
 
</html>
<script>
    
    </script>
    