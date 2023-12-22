<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="row mb-3">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Order Details #<?= $order->invoice ?>
							<div class="float-end">
								<?php $this->load->view('layouts/_status', ['status' => $order->status]); ?>
							</div>
						</div>
						<div class="card-body">
							<p>Date: <?= str_replace('-', '/', date("d-m-Y", strtotime($order->date))) ?></p>
							<p>Name: <?= $order->name ?></p>
							<p>Phone: <?= $order->phone ?></p>
							<p>Address: <?= $order->address ?></p>
							<table class="table">
								<thead>
									<tr>
										<th>Product</th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Subtotal</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($order_detail as $row) : ?>
										<tr>
											<td>
												<p><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url('/images/product/default.png') ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
											</td>
											<td class="text-center">Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
											<td class="text-center"><?= $row->qty ?></td>
											<td class="text-center">Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
										</tr>
									<?php endforeach ?>
									<tr>
										<td colspan="3"><strong>Total:</strong></td>
										<td class="text-center"><strong>Rp<?= number_format(array_sum(array_column($order_detail, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<form action="<?= base_url("order/update/$order->id") ?>" method="POST">
								<input type="hidden" name="id" value="<?= $order->id ?>">
								<div class="input-group">
									<select name="status" id="" class="form-control">
										<option value="waiting" <?= $order->status == 'waiting' ? 'selected' : '' ?>>Waiting for Payment</option>
										<option value="paid" <?= $order->status == 'paid' ? 'selected' : '' ?>>Paid</option>
										<option value="delivered" <?= $order->status == 'delivered' ? 'selected' : '' ?>>Delivered</option>
										<option value="cancel" <?= $order->status == 'cancel' ? 'selected' : '' ?>>Cancelled</option>
									</select>
									<button class="btn btn-primary" type="submit">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<?php if (isset($order_confirm)) : ?>
				<div class="row mb-3">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">
								Payment Proof
							</div>
							<div class="card-body">
								<p>Account Number: <?= $order_confirm->account_number ?></p>
								<p>Under the Name of: <?= $order_confirm->account_name ?></p>
								<p>Amount: Rp<?= number_format($order_confirm->nominal, 0, ',', '.') ?>,-</p>
								<p>Notes: <?= $order_confirm->note ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="<?= base_url("/images/confirm/$order_confirm->image") ?>" alt="" height="200">
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
</main>