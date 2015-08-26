<?php
include_once 'functions.php';
    class db_class{
        public function __construct() {
            $con = mysql_connect("localhost","root","");
            if (!$con)
              {
              die('Could not connect: ' . mysql_error());
              }
              else{
                  mysql_select_db('timetable');
              }
        }
        public function branch(){
            $branch_query = "SELECT *from branch";
            $branch_result = mysql_query($branch_query);
            while ($branch_row  = mysql_fetch_array($branch_result)){
                echo "<option value=\"{$branch_row['b_name']}\">".$branch_row['b_name']."</option>";
            }
        }
		public function teacher(){
            $branch_query = "SELECT *from teacher";
            $branch_result = mysql_query($branch_query);
            while ($branch_row  = mysql_fetch_array($branch_result)){
                echo "<option value=\"{$branch_row['teacher_name']}\">".$branch_row['teacher_name']."</option>";
            }
        }
        public function subject(){
            $branch_query = "SELECT sub_id,sub_name from subject";
            $branch_result = mysql_query($branch_query);
            while ($branch_row  = mysql_fetch_array($branch_result)){
                 
				echo "<option value=\"{$branch_row['sub_name']}\">".$branch_row['sub_name']."</option>";
            }
        }
		public function subjectcheck(){
            $branch_query = "SELECT sub_id,sub_name from subject";
            $branch_result = mysql_query($branch_query);
            while ($branch_row  = mysql_fetch_array($branch_result)){?>
                <?php echo $branch_row['sub_name'];?>&nbsp;&nbsp;&nbsp;<input type="checkbox" value="<?php echo $branch_row['sub_name'];?>" name="sub[]"></input></br>
				<?php 
				
            }
        }
		
        public function semester(){
            $branch_query = "SELECT *from semester";
            $branch_result = mysql_query($branch_query);
            while ($branch_row  = mysql_fetch_array($branch_result)){
                echo "<option value=\"{$branch_row['s_name']}\">".$branch_row['s_name']."</option>";
            }
        }
        
        public function login($username, $password){
            $query="select privilege,id,first_name, last_name from admin where username='{$username}' and password='$password'";
            $result = mysql_query($query);
            if(mysql_affected_rows ()==1){
             $row = mysql_fetch_array($result);
             $privilege =$row['privilege'];
              if ($privilege=="admin"){
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                  redirect_to("home.php");
              }
              else if($privilege == "manager"){
                  $_SESSION['id'] = $row['id'];
                  $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                  redirect_to("manager.php");
              }
              else{
                  redirect_to("login.php");
              }
            }
            else
                return 0;
        }
        public function get_users(){
            $query = "select * from admin order by id asc";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Privilege</th>
                    <th>Contact</th>
                    
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['first_name']}</td>
                     <td>{$row['last_name']}</td>
                     <td>{$row['username']}</td>
                     <td>{$row['password']}</td>
                     <td>{$row['privilege']}</td>
                     <td>{$row['contact']}</td>
                     
                     </tr>";
            }
            echo "</table>";
        }

        //*****************

          public function view_branch(){
            $query = "select * from branch order by b_id asc";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    
                    <th>Branch</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['b_id']}</td>
                     
                     <td>{$row['b_name']}</td>
                     <td><a href=\"home.php?pagef=editusers&id={$row['b_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }



        public function view_teacher(){
            $query = "select * from teacher order by teacher_id asc";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    
                    <th>Teacher name</th>
                    <th>Type</th>
                </tr>";
            while (@$row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['teacher_id']}</td>
                     
                     <td>{$row['teacher_name']}</td>
                     <td>{$row['type']}</td>
                     <td><a href=\"home.php?pagef=editusers&id={$row['teacher_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }
		
		public function get_asigned_subjectbyall($teacher,$subject)
		{
			$query = "select * from subject_asigned where subject_name='$subject' && teacher_name='$teacher'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    
                    <th>teacher</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['subject_name']}</td>
                     
                     <td>{$row['teacher_name']}</td>
                     
                     <td><a href=\"home.php?pagef=editsubject&id={$row['id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
		}

        public function view_semester(){
            $query = "select * from semester order by t_id asc";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    
                    <th>semester</th>
                    
                </tr>";
            while (@$row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['s_id']}</td>
                     
                     <td>{$row['s_name']}</td>
                     
                     <td><a href=\"home.php?pagef=editusers&id={$row['s_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }

        //***********
        


		public function getsubjectbysem($sem){
			//$semm=$sem;
            $query = "select * from subject where s_name='$sem'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>Semester</th>
                    <th>Branch</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['sub_id']}</td>
                     <td>{$row['sub_name']}</td>
                     
                     <td>{$row['s_name']}</td>
                     <td>{$row['b_name']}</td>
                     <td><a href=\"home.php?pagef=editsubject&id={$row['sub_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }
		
		
		public function getsubjectbybranch($branch){
			//$semm=$sem;
            $query = "select * from subject where b_name='$branch'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>Semester</th>
                    <th>Branch</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['sub_id']}</td>
                     <td>{$row['sub_name']}</td>
                     
                     <td>{$row['s_name']}</td>
                     <td>{$row['b_name']}</td>
                     <td><a href=\"home.php?pagef=editsubject&id={$row['sub_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }
		
		public function getsubjectbyall($sem,$branch){
			//$semm=$sem;
            $query = "select * from subject where s_name='$sem' && b_name='$branch'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>Semester</th>
                    <th>Branch</th>
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['sub_id']}</td>
                     <td>{$row['sub_name']}</td>
                     
                     <td>{$row['s_name']}</td>
                     <td>{$row['b_name']}</td>
                     <td><a href=\"home.php?pagef=editsubject&id={$row['sub_id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }

        public function edit_user(){

            $query="select * from admin where id = '{$_GET['id']}' limit 1";
            $result = mysql_query($query);
            $row = mysql_fetch_array($result);
            if (mysql_affected_rows ()==1){                
                include_once 'includes/editusers.php';
            }
            else "wrong user input";
        }
        public function add_user(){
            include_once '../admin/includes/add_user.php';
        }
        public function remove_user(){
            $query = "delete from admin where id='{$_GET['id']}'";
            $result = mysql_query($query);
            redirect_to('admin.php?page=users');
        }
		
		public function viewall(){
			//$semm=$sem;
            $query = "select * from subject_asigned";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>teacher</th>
                    
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['subject_name']}</td>
                     
                     <td>{$row['teacher_name']}</td>
                     
                     <td><a href=\"home.php?pagef=editsubject&id={$row['id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
        }
		
		
		public function get_asigned_subjectby_teacher($teacher){
			$query = "select * from subject_asigned where teacher_name='{$teacher}'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>teacher</th>
                    
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['subject_name']}</td>
                     
                     <td>{$row['teacher_name']}</td>
                     
                     <td><a href=\"home.php?pagef=editsubject&id={$row['id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
		}
		
		public function get_asigned_subjectby_subject($subject){
			$query = "select * from subject_asigned where subject_name='{$subject}'";
            $result = mysql_query($query);
            echo "<table border='0'>";
            echo "<tr>
                    <th>Id</th>
                    <th>Subject</th>
                    
                    <th>teacher</th>
                    
                </tr>";
            while ($row = mysql_fetch_array($result)){
                 echo "<tr>
                     <td>{$row['id']}</td>
                     <td>{$row['subject_name']}</td>
                     
                     <td>{$row['teacher_name']}</td>
                     
                     <td><a href=\"home.php?pagef=editsubject&id={$row['id']}\">edit</a></td>
                     </tr>";
            }
            echo "</table>";
		}
        
    }
?>
<?php
    $db = new db_class();
?>