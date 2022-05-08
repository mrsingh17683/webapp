<?php
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{	
		$users_json = file_get_contents('users.json');
		$users = json_decode($users_json, true);
		$unmatched = 0;
		$total_users = count($users);

		if($total_users)
		{	
			foreach($users as $user)
			{
				if($user['username'] == $_POST['username'] && $user['password'] == $_POST['password'])
				{
					header("Location: index.php?match=true");
				}
				else
				{
					$unmatched++;
				}
			}
			
			if($total_users == $unmatched)
			{
				header("Location: index.php?match=false");
			}
		}
		else
		{
			header("Location: index.php?match=false");
		}
	}
	else
	{
		header("Location: index.php?match=false");
	}
?>