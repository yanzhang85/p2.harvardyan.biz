<?php
class practice_controller extends base_controller{

    public function test_db()  {
    	/*
		*insert practice
    	$q = "INSERT INTO users SET 
    	first_name = 'Sam', 
    	last_name = 'Seaborn',
    	email = 'seaborn@whitehouse.gov'";


    	echo $q;


    	*/


    	/*
    	$q = 'UPDATE users
    	SET email = "samseaborn@whitehouse.gov"
    	WHERE email = "seaborn@whitehouse.gov"';

    	DB::instance(DB_NAME) -> query($q);*/

    	$data = Array(
    'first_name' => 'Sam', 
    'last_name' => 'Seaborn', 
    'email' => 'seaborn@whitehouse.gov');

/*
Insert requires 2 params
1) The table to insert to
2) An array of data to enter where key = field name and value = field data

The insert method returns the id of the row that was created
*/
$user_id = DB::instance(DB_NAME)->insert('users', $data);

echo 'Inserted a new row; resulting id:'.$user_id;

    }






    public function test1() {

    require(APP_PATH.'/libraries/Image.php');
    $imageObj = new Image('http://placekitten.com/1000/1000');

    $imageObj->resize(200,200);

    $imageObj->display();


    }


    public function test2(){

        echo Time::now();
    }


} # end of the class