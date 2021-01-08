<!DOCTYPE html>
<html>
<head>
	<title>COVID-19 ESTABLISHMENT LOGBOOK</title>
</head>
<body>


<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Gender</td>
                <td>Date And Time</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['name']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['phone']?></td>
                <td><?=$contact['title']?></td>
                <td><?=$contact['created']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>