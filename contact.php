<!-- CONTACT -->
<div class="container-fluid p-5" id="contact">

    <div class="container w-md-50 contact-box">

        <h1 class="display-5 fw-bold my-logo text-center gradient-text heading-ani animate__animated">Contact Me</h1>

        <form class="" method="POST" action="index.php#contact" id="contact-form">

            <div class="mb-3">
                <label for="fullName" class="form-label">Name</label>
                <input
                        type="text"
                        class="form-control"
                        id="fullName"
                        name="fullName"
                        placeholder="Name"
                        value="<?php echo htmlspecialchars($fullName); ?>"
                >
            </div>
			<?php if ($errors['fullName'] != '') : ?>
                <div class="alert alert-danger" role="alert">
					<?php echo $errors['fullName']; ?>
                </div>
			<?php endif; ?>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="name@example.com"
                        name="email"
                        value="<?php echo htmlspecialchars($email); ?>"
                >
            </div>
			<?php if ($errors['email'] != '') : ?>
                <div class="alert alert-danger" role="alert">
					<?php echo $errors['email']; ?>
                </div>
			<?php endif; ?>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea
                        class="form-control"
                        id="message"
                        rows="3"
                        name="message"
                ><?php echo htmlspecialchars($message); ?></textarea>
            </div>
			<?php if ($errors['message'] != '') : ?>
                <div class="alert alert-danger" role="alert">
					<?php echo $errors['message']; ?>
                </div>
			<?php endif; ?>

			<?php if ($success) : ?>
                <div class="alert alert-success" role="alert">
                    Thanks <?php echo $fullName ?> for reaching out, I will be in contact soon.
                </div>
			<?php endif; ?>

            <div class="mb-3 phone-form-box">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input
                        type="number"
                        class="form-control"
                        id="phoneNumber"
                        placeholder="name@example.com"
                        name="phoneNumber"
                >
            </div>
            <div class="col-auto text-center">
                <button
                        name="submit"
                        type="submit"
                        class="btn-primary m-3 background-grad submit-button g-recaptcha"
                        data-sitekey="6LdC18caAAAAAKabgGgCoWCC7gA-6_HhwYHtIb8O"
                        data-callback='onSubmit'
                        data-action='submit'
                >Submit
                </button>
            </div>
        </form>
    </div>
</div>
