<main class="container">
	<?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">
					Registration Form
				</div>
				<div class="card-body">
					<?= form_open('register', ['method' => 'POST']) ?>
					<div class="form-label">
						<label for="">Name</label>
						<?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
						<?= form_error('name') ?>
					</div>
					<div class="form-label">
						<label for="">Email</label>
						<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Type your active email ', 'required' => true]) ?>
						<?= form_error('email') ?>
					</div>
					<div class="form-label">
						<label for="">Password</label>
						<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Type a password of at least 8 characters', 'required' => true]) ?>
						<?= form_error('password') ?>
					</div>
					<div class="form-label">
						<label for="">Confirm Password</label>
						<?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Type the same password', 'required' => true]) ?>
						<?= form_error('password_confirmation') ?>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</main>