document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const fields = {
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        subject: document.getElementById('subject'),
        message: document.getElementById('message')
    };
    const success = document.getElementById('success-message');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function setError(fieldName, message) {
        const field = fields[fieldName];
        const error = document.getElementById(`${fieldName}-error`);
        field.classList.toggle('invalid', Boolean(message));
        field.setAttribute('aria-invalid', String(Boolean(message)));
        error.textContent = message;
    }

    function validateField(fieldName) {
        const value = fields[fieldName].value.trim();
        if (!value) {
            setError(fieldName, `${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)} is required.`);
            return false;
        }
        if (fieldName === 'email' && !emailPattern.test(value)) {
            setError(fieldName, 'Please enter a valid email address.');
            return false;
        }
        setError(fieldName, '');
        return true;
    }

    Object.keys(fields).forEach((fieldName) => {
        fields[fieldName].addEventListener('blur', () => validateField(fieldName));
        fields[fieldName].addEventListener('input', () => {
            if (fields[fieldName].classList.contains('invalid')) validateField(fieldName);
        });
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        success.classList.remove('show');
        const valid = Object.keys(fields).map(validateField).every(Boolean);
        if (valid) {
            success.classList.add('show');
            form.reset();
            Object.keys(fields).forEach((fieldName) => setError(fieldName, ''));
        } else {
            const firstInvalid = form.querySelector('.invalid');
            firstInvalid?.focus();
        }
    });
});
