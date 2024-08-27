<main class="main-section-page report-page">
    <section class="inner_banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="innerbanner_caption text-center">
                        <h1 class="text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-3">Get in touch</h4>
                    <!-- Alert placeholder -->
                    <div id="alertPlaceholder"></div>
                    
                    <form id="contactForm" class="contact_form" method="post">
                        <div class="form_group">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form_group">
                            <input type="email" name="email" id="email" placeholder="Business Email address" class="form-control">
                        </div>
                        <div class="form_group">
                            <input type="number" name="phone" id="phone" placeholder="Phone" class="form-control">
                        </div>
                        <div class="form_group">
                            <input type="text" name="company" id="company" placeholder="Company Name" class="form-control">
                        </div>
                        <div class="form_group">
                            <textarea name="message" id="message" placeholder="How can our research experts help you?" class="form-control"></textarea>
                        </div>
                        <button type="button" id="submitButton" class="custom_btn w-100 mt-3">Submit</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121035.98916821826!2d73.6514200972656!3d18.557140200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf40d9256c7b%3A0xc8463252a4508e6e!2sMark%20%26%20Spark%20Solutions!5e0!3m2!1sen!2sin!4v1724417956890!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('contactForm');
        var submitButton = document.getElementById('submitButton');
        var alertPlaceholder = document.getElementById('alertPlaceholder');

        function showAlert(message, type) {
            var alertDiv = document.createElement('div');
            alertDiv.className = 'alert alert-' + type + ' alert-dismissible fade show';
            alertDiv.role = 'alert';
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            alertPlaceholder.innerHTML = ''; // Clear any existing alerts
            alertPlaceholder.appendChild(alertDiv);
        }

        submitButton.addEventListener('click', function () {
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?= base_url('web/submit_contact_form') ?>', true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    showAlert('Form submitted successfully!', 'success');
                    form.reset(); // Reset the form
                } else {
                    showAlert('An error occurred: ' + xhr.statusText, 'danger');
                }
            };

            xhr.onerror = function () {
                showAlert('An error occurred: ' + xhr.statusText, 'danger');
            };

            xhr.send(formData);
        });
    });
</script>
