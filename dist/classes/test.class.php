<?php

class Test extends Dbh {

	public function loopThroughEmails($emails) {
		foreach ($emails as $email) { ?>
				 <tr> 
			 		<td> <?php echo $email['email']?>
			 			<form method="post" action="delete.php">
			 				<input type="hidden" name="email" value="<?php echo $email['id']?>" />
   							<button type="submit" name="submit">Delete</button>
						</form>
			 		</td>
				</tr>  <?php
		}
	}

	public function getEmails($sort) {
		$sql = "SELECT * FROM emails ORDER BY created_at DESC";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$emails = $stmt->fetchAll();

		if ($sort) {
			sort($emails);
			$this->loopThroughEmails($emails);
		} else {
			$this->loopThroughEmails($emails);
		}
	}

	public function setEmail($email) {
		$sql = "INSERT INTO emails(email) VALUES (?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$email]);
	}

	public function deleteEmail($emailId) {
		$sql = "DELETE FROM emails WHERE id='$emailId'";
		$this->connect()->query($sql);
	}
}