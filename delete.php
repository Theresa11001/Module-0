<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

	<div class="content delete">
    <h2>Delete Contact #<?=$contact['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
    <p>Are you sure you want to delete contact #<?=$contact['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

</body>
</html>