 <?php
    function displaynews(){
        global $id;
        $con=mysql_connect("localhost","root","samuraii");
        mysql_select_db("mydb",$con);
        $result=mysql_query('select * from news where id = '.$id);
        $row = mysql_fetch_array($result);    
        echo '<div class="timeline-panel">
                <div class="timeline-heading">
                  <h2><center><span style="color:yellow">'.$row[1].'</span></center></h2>
                  <h4 class="subheading"><center><span style="color:red">'.strtoupper($row[2]).'</span></center></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><center><span style="color:black">'.$row[3].'</span></center></p>
                </div>
              </div>';
        mysql_close($con);
    }
                   
?>