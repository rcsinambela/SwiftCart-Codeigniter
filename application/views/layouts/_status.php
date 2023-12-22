<?php
if ($status == 'waiting') {
	$badge_status	= 'badge text-bg-info';
	$status			= 'Waiting Payment';
}

if ($status == 'paid') {
	$badge_status	= 'badge text-bg-secondary';
	$status			= 'Paid';
}

if ($status == 'delivered') {
	$badge_status	= 'badge text-bg-success';
	$status			= 'Deliverd';
}

if ($status == 'cancel') {
	$badge_status	= 'badge text-bg-danger';
	$status			= 'Canceled';
}
?>

<?php if ($status) : ?>
	<span class="badge rounded-pill <?= $badge_status ?>"><?= $status ?></span>
<?php endif ?>