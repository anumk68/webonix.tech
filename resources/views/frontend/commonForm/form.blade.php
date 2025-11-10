<form id="leadFormXYZ" method="POST" novalidate>
    @csrf
    <div class="row">
        <div class="col-md-6">
            <!-- Service -->
            <div class="mb-3">
                <label for="serviceSelect" class="form-label">Service</label>
                <select class="form-select" id="serviceSelect" name="serviceSelect">
                    <option value="" selected disabled>Select Service</option>
                    <option value="web-development">Website Design & Development</option>
                    <option value="app-development">Application Development</option>
                    <option value="software-dev">Software Development</option>
                    <option value="digital-marketing">All Digital Marketing Services</option>
                    <option value="seo-services">SEO Services</option>
                    <option value="smo-services">SMO Services</option>
                    <option value="ppc-services">PPC Services</option>
                    <option value="graphic-design">Graphic Designing</option>
                    <option value="email-marketing">Email Marketing</option>
                    <option value="other-services">Others</option>
                </select>
                <div class="invalid-feedback d-block" id="serviceSelect-error"></div>
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="firstNameInput" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstNameInput" name="firstNameInput"
                    placeholder="Enter Name">
                <div class="invalid-feedback d-block" id="firstNameInput-error"></div>
            </div>

            <!-- Email + OTP -->
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput"
                    placeholder="Please Verify Your Email">
                <div class="invalid-feedback d-block" id="emailInput-error"></div>

                <div id="otpBlock" class="mt-2" style="display:none;">
                    <label for="otpInput" class="form-label">Enter OTP</label>
                    <div class="input-group">
                        <input type="text" id="otpInput" class="form-control" placeholder="Enter OTP">
                        <button type="button" id="verifyOtpBtn" class="btn btn-outline-secondary">Verify OTP</button>
                    </div>
                    <small id="otpInput-error" class="d-block mt-1"></small>
                </div>
                <small id="otpStatus" class="text-info" style="display:none;">Sending OTP...</small>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Website -->
            <div class="mb-3">
                <label for="websiteInput" class="form-label">Website</label>
                <input type="url" class="form-control" id="websiteInput" name="websiteInput"
                    placeholder="Enter URL">
                <div class="invalid-feedback d-block" id="websiteInput-error"></div>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lastNameInput" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastNameInput" name="lastNameInput"
                    placeholder="Enter Last Name">
                <div class="invalid-feedback d-block" id="lastNameInput-error"></div>
            </div>

            <!-- Phone with Country Code -->
            <div class="mb-3">
                <label for="phoneInput" class="form-label">Phone</label>
                <div class="input-group">
                    <select class="form-select country-code-select" id="countryCode" name="countryCode">
                        <option value="+91" selected>🇮🇳 +91</option>
                        <option value="+1">🇺🇸 +1</option>
                        <option value="+44">🇬🇧 +44</option>
                        <option value="+61">🇦🇺 +61</option>
                        <option value="+971">🇦🇪 +971</option>
                    </select>
                    <input type="tel" class="form-control" id="phoneInput" name="phoneInput"
                        placeholder="Enter phone number">
                </div>
                <small id="phoneInput-success" class="text-success d-block mt-1"></small>
                <div class="invalid-feedback d-block" id="phoneInput-error"></div>
                <small id="phoneStatus" class="text-info" style="display:none;"></small>
            </div>
        </div>
    </div>

    <!-- Captcha -->
    <div class="mb-3">
        <div class="row">
            <div class="col-6">
                <label for="captchaInput" class="form-label d-block">Enter the code below</label>
                <input type="text" id="captchaInput" name="captchaInput" class="form-control"
                    placeholder="Enter captcha">
                <div class="invalid-feedback d-block" id="captcha-error"></div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <span id="captchaCode" class="px-3 py-2 bg-light border rounded fw-bold fs-5"></span>
                <button type="button" id="refreshCaptcha" class="btn btn-outline-secondary btn-sm ms-2">↻</button>
            </div>
        </div>
    </div>

    <!-- Submit -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary" id="submitLeadBtn">
            <span class="btn-text">Submit</span>
            <span class="spinner-border spinner-border-sm ms-2" style="display:none;"></span>
        </button>
    </div>

    <div id="formMessage" class="text-center mt-3"></div>
</form>

<style>
    .country-code-select {
        max-width: 90px;
        /* ✅ small width */
        flex: 0 0 90px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(function() {
        const NUMVERIFY_KEY = '64bd819faa1396c164d131c7fdec3b4f';
        let otpVerified = false;
        let phoneVerified = false;
        let verifiedCountryCode = ''; // ✅ Track verified country code
        let verifiedPhoneNumber = ''; // ✅ Track verified phone number
        let generatedCaptcha = '';

        function generateCaptcha() {
            const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789';
            generatedCaptcha = Array.from({
                length: 5
            }, () => chars[Math.floor(Math.random() * chars.length)]).join('');
            $('#captchaCode').text(generatedCaptcha);
            $('#captchaInput').val('');
            $('#captcha-error').text('');
        }
        generateCaptcha();
        $('#refreshCaptcha').click(generateCaptcha);

        // Send OTP
        $('#emailInput').on('blur', function() {
            const email = $(this).val().trim();
            if (!email) return;

            $('#otpStatus').show().text('Sending OTP...');
            $.post("{{ route('contact.sendOtp') }}", {
                    _token: "{{ csrf_token() }}",
                    emailInput: email
                })
                .done(res => {
                    $('#otpStatus').hide();
                    if (res.success) {
                        $('#otpBlock').show();
                        $('#otpInput-error').text(res.message).removeClass('text-danger').addClass(
                            'text-success');
                    } else {
                        $('#otpInput-error').text(res.message).removeClass('text-success').addClass(
                            'text-danger');
                    }
                });
        });

        // Verify OTP
        $('#verifyOtpBtn').click(function() {
            const otp = $('#otpInput').val().trim();
            if (!otp) {
                $('#otpInput-error').text('Please enter OTP').addClass('text-danger');
                return;
            }
            $.post("{{ route('contact.verifyOtp') }}", {
                    _token: "{{ csrf_token() }}",
                    otpInput: otp
                })
                .done(res => {
                    if (res.success) {
                        otpVerified = true;
                        $('#otpInput-error').text(res.message).removeClass('text-danger').addClass(
                            'text-success');
                    } else {
                        otpVerified = false;
                        $('#otpInput-error').text(res.message).removeClass('text-success').addClass(
                            'text-danger');
                    }
                });
        });

        // ✅ Reset verification if country code or phone changes
        $('#countryCode, #phoneInput').on('change input', function() {
            if (phoneVerified) {
                phoneVerified = false;
                verifiedCountryCode = '';
                verifiedPhoneNumber = '';
                $('#phoneInput-success').text('');
                $('#phoneInput').removeClass('is-valid');
            }
        });

        // Numverify check
        $('#phoneInput').on('blur', function() {
            const number = $(this).val().trim();
            const code = $('#countryCode').val();
            $('#phoneInput-error').text('');
            $('#phoneInput-success').text('');
            phoneVerified = false;
            verifiedCountryCode = '';
            verifiedPhoneNumber = '';

            if (!number) return;

            const fullNumber = code + number;
            $('#phoneStatus').show().text('Validating number...');

            $.ajax({
                url: `https://apilayer.net/api/validate?access_key=${NUMVERIFY_KEY}&number=${encodeURIComponent(fullNumber)}&format=1`,
                method: 'GET',
                success: function(res) {
                    $('#phoneStatus').hide();
                    if (res.valid) {
                        phoneVerified = true;
                        verifiedCountryCode = code; // ✅ Store verified country code
                        verifiedPhoneNumber = number; // ✅ Store verified phone number
                        $('#phoneInput').removeClass('is-invalid').addClass('is-valid');
                        $('#phoneInput-success').text('✅ Number verified successfully');
                    } else {
                        $('#phoneInput').removeClass('is-valid').addClass('is-invalid');
                        $('#phoneInput-error').text(
                            'Invalid phone number. Please enter a valid number.');
                    }
                },
                error: function() {
                    $('#phoneStatus').hide();
                    $('#phoneInput-error').text('Could not validate number.');
                }
            });
        });

        // Submit form
        // Helper function to show error with auto-hide
        function showError(fieldId, message, duration = 3000) {
            const errorElement = $(`#${fieldId}-error`);
            const inputElement = $(`#${fieldId}`);

            errorElement.text(message);
            inputElement.addClass('is-invalid');

            // Auto-hide after specified duration
            setTimeout(function() {
                errorElement.text('');
                inputElement.removeClass('is-invalid');
            }, duration);
        }

        // Submit form
        $('#leadFormXYZ').on('submit', function(e) {
            e.preventDefault();
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');
            $('#formMessage').text('');

            // ✅ VALIDATE IN ORDER: Service, First Name, Email, Website, Last Name, Phone, Captcha

            // 1. Service
            if (!$('#serviceSelect').val()) {
                showError('serviceSelect', 'Please select a service.');
                return;
            }

            // 2. First Name
            if (!$('#firstNameInput').val().trim()) {
                showError('firstNameInput', 'Please enter your first name.');
                return;
            }

            // 3. Email + OTP
            const email = $('#emailInput').val().trim();
            if (!email) {
                showError('emailInput', 'Please enter your email.');
                return;
            }
            if (email && !otpVerified) {
                showError('emailInput', 'Please verify your email with OTP.');
                return;
            }

            // 4. Website (optional, skip if not filled)
            const website = $('#websiteInput').val().trim();
            if (website) {
                const urlPattern = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
                if (!urlPattern.test(website)) {
                    showError('websiteInput', 'Please enter a valid URL.');
                    return;
                }
            }

            // 5. Last Name
            if (!$('#lastNameInput').val().trim()) {
                showError('lastNameInput', 'Please enter your last name.');
                return;
            }

            // 6. Phone
            if (!$('#phoneInput').val().trim()) {
                showError('phoneInput', 'Please enter your phone number.');
                return;
            }
            if (!phoneVerified) {
                showError('phoneInput', 'Please enter and verify a valid phone number.');
                return;
            }

            // 7. Captcha
            const captchaValue = $('#captchaInput').val().trim();
            if (!captchaValue) {
                showError('captcha', 'Please enter the captcha code.');
                $('#captchaInput').addClass('is-invalid');
                setTimeout(() => $('#captchaInput').removeClass('is-invalid'), 5000);
                return;
            }
            if (captchaValue !== generatedCaptcha) {
                showError('captcha', 'Captcha does not match. Please try again.');
                $('#captchaInput').addClass('is-invalid');
                setTimeout(() => $('#captchaInput').removeClass('is-invalid'), 5000);
                generateCaptcha();
                return;
            }

            // ✅ ALL VALIDATIONS PASSED - NOW SUBMIT
            const formData = $(this).serialize();
            $('#submitLeadBtn .spinner-border').show();
            $('#submitLeadBtn').prop('disabled', true);

            $.post("{{ route('contact.submit') }}", formData)
                .done(function(res) {
                    $('#submitLeadBtn .spinner-border').hide();
                    $('#submitLeadBtn').prop('disabled', false);
                    if (res.success) {
                        $('#formMessage').text(res.message).addClass('text-success');
                        setTimeout(() => window.location.href = "{{ url('/thank-you') }}", 1000);
                    } else {
                        $('#formMessage').text(res.message).addClass('text-danger');
                        generateCaptcha();
                    }
                })
                .fail(function(err) {
                    $('#submitLeadBtn .spinner-border').hide();
                    $('#submitLeadBtn').prop('disabled', false);
                    if (err.status === 422) {
                        let errors = err.responseJSON.errors;
                        for (let field in errors) {
                            $('#' + field + '-error').text(errors[field][0]);
                            $('#' + field).addClass('is-invalid');
                        }
                    } else {
                        $('#formMessage').text('An error occurred.').addClass('text-danger');
                    }
                    generateCaptcha();
                });
        });
    });
</script>







{{-- <form id="leadFormXYZ" method="POST" novalidate>
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="serviceSelect" class="form-label">Service</label>
                <select class="form-select custom-service" id="serviceSelect" name="serviceSelect">
                    <option selected disabled value="">Select Service</option>
                    <option value="web-development">Website Design & Development</option>
                    <option value="app-development">Application Development</option>
                    <option value="software-dev">Software Development</option>
                    <option value="digital-marketing">All Digital Marketing Services</option>
                    <option value="seo-services">SEO Services</option>
                    <option value="smo-services">SMO Services</option>
                    <option value="ppc-services">PPC Services</option>
                    <option value="graphic-design">Graphic Designing</option>
                    <option value="email-marketing">Email Marketing</option>
                    <option value="other-services">Others</option>
                </select>
                <div class="invalid-feedback" id="serviceSelect-error"></div>
            </div>
            <div class="mb-3">
                <label for="firstNameInput" class="form-label">First Name</label>
                <input type="text" class="form-control input-first" id="firstNameInput" name="firstNameInput"
                    placeholder="Enter first name" autocomplete="off">
                <div class="invalid-feedback" id="firstNameInput-error"></div>
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control input-email" id="emailInput" name="emailInput"
                    placeholder="Enter email" autocomplete="off">
                <div class="invalid-feedback" id="emailInput-error"></div>

                <div id="otpBlock" class="mt-2" style="display: none;">
                    <label for="otpInput" class="form-label">Enter OTP</label>
                    <div class="otp-input-group">
                        <input type="text" class="form-control input-otp" id="otpInput" placeholder="Enter OTP"
                            autocomplete="off">
                        <button type="button" class="btn btn-outline-secondary" id="verifyOtpBtn">
                            Verify OTP
                        </button>
                        <button type="button" class="btn btn-link p-0 ms-2 align-self-center" id="resendOtpBtn"
                            style="display: none;">Resend OTP</button>
                    </div>
                    <small id="otpInput-error" class="text-success"></small>
                </div>

                <small id="otpStatus" class="text-info" style="display: none;">Sending OTP...</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="websiteInput" class="form-label">Website</label>
                <input type="text" class="form-control input-website" id="websiteInput" name="websiteInput"
                    placeholder="Enter website" autocomplete="off">
                <div class="invalid-feedback" id="websiteInput-error"></div>
            </div>
            <div class="mb-3">
                <label for="lastNameInput" class="form-label">Last Name</label>
                <input type="text" class="form-control input-last" id="lastNameInput" name="lastNameInput"
                    placeholder="Enter last name" autocomplete="off">
                <div class="invalid-feedback" id="lastNameInput-error"></div>
            </div>
            <div class="mb-3">
                <label for="phoneInput" class="form-label">Phone</label>
                <input type="tel" class="form-control input-phone" id="phoneInput" name="phoneInput"
                    placeholder="Enter phone number" autocomplete="off">
                <div class="invalid-feedback" id="phoneInput-error"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4">
            <button type="submit" class="btn btn-submit w-100 w-md-auto" id="submitLeadBtn"
                style="background-color: #ff6a00; color: #ffffff;">
                <span class="btn-text">Submit</span>
                <span class="spinner-border spinner-border-sm text-light ms-2" style="display:none;" role="status"
                    aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div id="formMessage" class="text-center"></div>
        </div>
    </div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        let otpVerified = false;

        function clearErrors() {
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');
            $('#formMessage').text('').removeClass('text-success text-danger');
        }
        $('#emailInput').on('blur', function() {
            let email = $(this).val();
            clearErrors();
            if (email) {
                $('#otpStatus').show().text('Sending OTP...');
                $.post("{{ route('contact.sendOtp') }}", {
                        _token: "{{ csrf_token() }}",
                        emailInput: email
                    })
                    .done(function(res) {
                        $('#otpStatus').hide();
                        if (res.success) {
                            $('#otpBlock').show();
                            $('#otpInput-error').text(res.message).removeClass('text-danger')
                                .addClass('text-success');
                        } else {
                            $('#otpInput-error').text(res.message).removeClass('text-success')
                                .addClass('text-danger');
                        }
                    })
                    .fail(function(err) {
                        $('#otpStatus').hide();
                        let message = err.responseJSON?.message || 'Error sending OTP.';
                        $('#emailInput').addClass('is-invalid');
                        $('#emailInput-error').text(message);
                    });
            }
        });
        $('#verifyOtpBtn').on('click', function() {
            let otp = $('#otpInput').val();
            clearErrors();
            if (!otp) {
                $('#otpInput').addClass('is-invalid');
                $('#otpInput-error').text('Please enter OTP');
                return;
            }
            $.post("{{ route('contact.verifyOtp') }}", {
                    _token: "{{ csrf_token() }}",
                    otpInput: otp
                })
                .done(function(res) {
                    if (res.success) {
                        otpVerified = true;
                        $('#otpInput-error').text(res.message).removeClass('text-danger').addClass(
                            'text-success');
                    } else {
                        otpVerified = false;
                        $('#otpInput').addClass('is-invalid');
                        $('#otpInput-error').text(res.message).removeClass('text-success').addClass(
                            'text-danger');
                    }
                });
        });
        $('#leadFormXYZ').on('submit', function(e) {
            e.preventDefault();
            clearErrors();
            let email = $('#emailInput').val().trim();
            if (email && !otpVerified) {
                $('#formMessage').text('Please verify OTP before submitting.').addClass('text-danger');
                return;
            }
            let formData = $(this).serialize();
            let $btn = $('#submitLeadBtn');
            let $spinner = $btn.find('.spinner-border');
            let $btnText = $btn.find('.btn-text');
            $spinner.show();
            $btn.prop('disabled', true);
            $btnText.text('Submitting...');
            $.post("{{ route('contact.submit') }}", formData)
                .done(function(res) {
                    $spinner.hide();
                    $btn.prop('disabled', false);
                    $btnText.text('Submit');
                    if (res.success) {
                        $('#formMessage').text(res.message).addClass('text-success');
                        $('#leadFormXYZ')[0].reset();
                        $('#otpBlock').hide();
                        otpVerified = false;
                        setTimeout(function() {
                            window.location.href = "{{ url('/thank-you') }}";
                        }, 1000);
                    } else {
                        $('#formMessage').text(res.message).addClass('text-danger');
                    }
                })
                .fail(function(err) {
                    $spinner.hide();
                    $btn.prop('disabled', false);
                    $btnText.text('Submit');
                    if (err.status === 422) {
                        let errors = err.responseJSON.errors;
                        for (let field in errors) {
                            let errorField = $('#' + field);
                            errorField.addClass('is-invalid');
                            $('#' + field + '-error').text(errors[field][0]);
                        }
                        $('#formMessage').text('Please check the form details.').addClass(
                            'text-danger');
                    }
                });
        });

    });
</script> --}}
