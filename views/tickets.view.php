<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/header.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 ml-10 sm:px-6 lg:px-8">
        <div class="table-responsive d-flex justify-content-center"> <!-- Add this wrapper to center the table -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th class="px-4 py-2">Ticket ID</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2">Updated At</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tickets as $ticket): ?>
                        <tr>
                            <td class="border px-4 py-2"><?= $ticket['id']; ?></td>
                            <td class="border px-4 py-2"><a class="text-blue-500 hover:underline" href="/ticket?id=<?= $ticket['id']; ?>"><?= $ticket['title']; ?></a></td>
                            <td class="border px-4 py-2"><?= $ticket['status']; ?></td>
                            <td class="border px-4 py-2"><?= $ticket['created_at']; ?></td>
                            <td class="border px-4 py-2"><?= $ticket['updated_at']; ?></td>
                            <td class="border px-4 py-2 text-center">
                                <!-- Edit Button -->
                                <a href="edit_ticket.php?id=<?= $ticket['id']; ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <!-- Delete Button -->
                                <form action="delete_ticket.php" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this ticket?');">
                                    <input type="hidden" name="ticket_id" value="<?= $ticket['id']; ?>" />
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.php'; ?>