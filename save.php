<?php
	if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']))
	{	
		$users_json = file_get_contents('users.json');
		$users = json_decode($users_json, true);
		$total_users = count($users);
		$matched = 0;

		if($total_users)
		{	
			$all_user_names = array_column($users, 'username');

			if(in_array($_POST['username'], $all_user_names))
			{
				header("Location: register.php?exist=true");
			}
			else
			{	
				$new = ['username' => $_POST['username'],'password' => $_POST['password'],'name' => $_POST['name']];
				
				array_push($users, $new);
				$json = json_encode($users);
				file_put_contents('users.json', $json);
				header("Location: register.php?register=true");
			}
		}
		else
		{	
			$users[] = ['username' => $_POST['username'],'password' => $_POST['password'],'name' => $_POST['name']];
			$json = json_encode($users);
			file_put_contents('users.json', $json);
			header("Location: index.php?register=true");
		}
	}
	else
	{
		header("Location: index.php?register=false");
	}
?>