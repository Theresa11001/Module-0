<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body>
 <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?=$contact['id']?>" id="id" readonly>
        <input type="text" name="name" placeholder="Name" value="<?=$contact['name']?>" id="name">
        <label for="email">Address</label>
        <label for="phone">Phone</label>
        <input type="text" name="email" placeholder="Address" value="<?=$contact['email']?>" id="email">
        <input type="text" name="phone" placeholder="Phone" value="<?=$contact['phone']?>" id="phone">
        <label for="title">Gender</label>
        <label for="created">Date and Time</label>
        <input type="text" name="title" placeholder="Gender" value="<?=$contact['title']?>" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i', strtotime($contact['created']))?>" id="created">
        <input type="submit" value="Update">
    </form>

</body>
</html>