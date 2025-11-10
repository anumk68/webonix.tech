document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const emailInput = document.getElementById("email");
    const otpInput = document.getElementById("otp");
    const otpSection = document.getElementById("otpSection");
    const verifyOtpButton = document.getElementById("verifyOtp");
    const resendOtpButton = document.getElementById("resendOtp");
    const phone = document.getElementById("phone");
    let phoneIti = null;
    let isEmailVerified = false;

    const fields = [
        { id: "service", validate: (value) => (value ? "" : "Please select a service.") },
        { id: "website" }, // optional
        {
            id: "firstName",
            validate: (value, input) => {
                if (!/^[A-Za-z]{2,50}$/.test(value)) return "First name must be 2-50 letters only.";
                if (input.hasAttribute("data-autofilled")) return "Please enter first name manually.";
                return "";
            }
        },
        {
            id: "lastName",
            validate: (value, input) => {
                if (!/^[A-Za-z]{2,50}$/.test(value)) return "Last name must be 2-50 letters only.";
                if (input.hasAttribute("data-autofilled")) return "Please enter last name manually.";
                return "";
            }
        },
        {
            id: "email",
            validate: (value, input) => {
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return "Invalid email format.";
                if (input.hasAttribute("data-autofilled")) return "Please enter email manually.";
                return "";
            }
        },
        {
            id: "phone",
            validate: (_, input) => {
                if (!phone || !phoneIti) return "Phone input not initialized.";
                if (input.hasAttribute("data-autofilled")) return "Please enter phone number manually.";
                return phoneIti.isValidNumber() ? "" : "Invalid phone number.";
            }
        }
    ];

    // Init phone input
    if (phone) {
        phoneIti = window.intlTelInput(phone, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            separateDialCode: true,
            preferredCountries: ["us", "gb", "ca", "au", "in"],
            hiddenInput: "full_phone",
            initialCountry: "us",
            geoIpLookup: (callback) => {
                fetch("https://ipapi.co/json")
                    .then((res) => res.json())
                    .then((data) => callback(data.country_code))
                    .catch(() => callback("in"));
            }
        });
    }

    function detectAutofill(input) {
        if (input.value && !input.hasAttribute("data-user-typed")) {
            input.setAttribute("data-autofilled", "true");
        }
    }

    function validateField(field, input) {
        const errorElement = document.getElementById(`${field.id}-error`);
        if (!field.validate) return true;
        const errorMessage = field.validate(input.value.trim(), input);
        input.classList.remove("is-valid", "is-invalid");
        if (errorMessage) {
            input.classList.add("is-invalid");
            errorElement.textContent = errorMessage;
        } else {
            input.classList.add("is-valid");
            errorElement.textContent = "";
        }
        return !errorMessage;
    }

    // ✅ Send OTP
    async function sendOtp(email) {
        otpSection.style.display = "block";
        otpInput.value = "";
        otpInput.classList.remove("is-valid", "is-invalid");
        const otpError = document.getElementById("otp-error");
        otpError.textContent = "Sending OTP...";

        try {
            const res = await fetch(ajaxurl.url, {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `action=send_email_otp&email=${encodeURIComponent(email)}`
            });
            const result = await res.json();
            console.log("OTP Response:", result);

            const data = typeof result.data === "object" && result.data.status ? result.data.status : result.data;

            if (result.success && (data === "sent" || data?.status === "sent")) {
                otpError.textContent = "✅ OTP sent to email.";
                resendOtpButton.style.display = "inline-block";
                isEmailVerified = false;
            } else {
                otpError.textContent = `❌ Failed to send OTP: ${result?.data?.message || result.message || "Unknown error"}`;
            }
        } catch (err) {
            otpError.textContent = `❌ Failed to send OTP: ${err.message}`;
        }
    }

    // ✅ Verify OTP
    async function verifyOtp() {
        const otpValue = otpInput.value.trim();
        const otpError = document.getElementById("otp-error");

        if (!otpValue) {
            otpInput.classList.add("is-invalid");
            otpError.textContent = "Enter the OTP.";
            return;
        }

        try {
            const res = await fetch(ajaxurl.url, {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `action=verify_email_otp&verify=${encodeURIComponent(otpValue)}`
            });
            const result = await res.json();
            console.log("Verify OTP Response:", result);

            const data = typeof result.data === "object" && result.data.status ? result.data.status : result.data;

            if (result.success && (data === "verified" || data?.status === "verified")) {
                otpInput.classList.add("is-valid");
                otpSection.style.display = "none";
                isEmailVerified = true;
                otpError.textContent = "";
            } else {
                otpInput.classList.add("is-invalid");
                otpError.textContent =
                    result.message === "OTP expired" ? "OTP expired. Resend." : `Invalid OTP: ${result.message || "Unknown"}`;
            }
        } catch (err) {
            otpInput.classList.add("is-invalid");
            otpError.textContent = `Verification failed: ${err.message}`;
        }
    }

    // Setup listeners
    function setupListeners() {
        fields.forEach((field) => {
            const input = document.getElementById(field.id);
            if (input) {
                input.addEventListener("input", () => {
                    input.setAttribute("data-user-typed", "true");
                    input.removeAttribute("data-autofilled");
                    validateField(field, input);
                });
                input.addEventListener("change", () => {
                    detectAutofill(input);
                    validateField(field, input);
                });
            }
        });

        emailInput.addEventListener("blur", () => {
            const field = fields.find((f) => f.id === "email");
            if (validateField(field, emailInput)) {
                sendOtp(emailInput.value);
            } else {
                otpSection.style.display = "none";
            }
        });

        emailInput.addEventListener("input", () => {
            isEmailVerified = false;
        });

        resendOtpButton.addEventListener("click", () => {
            sendOtp(emailInput.value);
        });

        verifyOtpButton.addEventListener("click", verifyOtp);

        // Form submission
        form.addEventListener("submit", async function (event) {
            event.preventDefault();
            let isValid = true;

            fields.forEach((field) => {
                document.getElementById(`${field.id}-error`).textContent = "";
            });

            fields.forEach((field) => {
                const input = document.getElementById(field.id);
                if (!validateField(field, input)) isValid = false;
            });

            try {
                const verificationRes = await fetch(ajaxurl.url, {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "action=check_verification"
                });

                const verificationResult = await verificationRes.json();
                console.log("Verification Status:", verificationResult);

                if (!verificationResult?.data?.isEmailVerified) {
                    isValid = false;
                    emailInput.classList.add("is-invalid");
                    document.getElementById("email-error").textContent = "Email not verified.";
                }

                if (isValid) {
                    const formData = new FormData(form);
                    formData.append("action", "submit_contact_form");
                    formData.append("security", document.querySelector("#contact_form_nonce").value);

                    const submitRes = await fetch(ajaxurl.url, {
                        method: "POST",
                        body: formData
                    });

                    const submitResult = await submitRes.json();
                    console.log("Submit Response:", submitResult);

                    if (submitResult.success) {
                        window.location.href = "/thank-you/";
                        form.reset();
                        fields.forEach((field) => {
                            const input = document.getElementById(field.id);
                            input.classList.remove("is-valid", "is-invalid");
                            input.removeAttribute("data-autofilled");
                            input.removeAttribute("data-user-typed");
                        });
                        otpSection.style.display = "none";
                        isEmailVerified = false;
                    } else {
                        const errorMessage = submitResult.message || submitResult.data?.message || "No error provided";
                        console.error(`Submission failed: ${errorMessage}`);

                        if (submitResult.data?.errors) {
                            submitResult.data.errors.forEach((error) => {
                                const fieldId = error.field;
                                const field = fields.find((f) => f.id === fieldId);
                                if (field) {
                                    document.getElementById(`${fieldId}-error`).textContent = error.message;
                                    document.getElementById(fieldId).classList.add("is-invalid");
                                }
                            });
                        } else {
                            document.getElementById("service-error").textContent = errorMessage;
                        }
                    }
                }
            } catch (err) {
                console.error(`Server error: ${err.message}`);
                document.getElementById("service-error").textContent = "Server error occurred. Please try again.";
            }
        });
    }

    setupListeners();
});