document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    const fields = {
        name:    { input: document.getElementById('name'),    error: document.getElementById('nameError') },
        email:   { input: document.getElementById('email'),   error: document.getElementById('emailError') },
        subject: { input: document.getElementById('subject'), error: document.getElementById('subjectError') },
        message: { input: document.getElementById('message'), error: document.getElementById('messageError') },
    };

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function showError(key, msg) {
        fields[key].error.textContent = msg;
        fields[key].input.classList.add('invalid');
    }

    function clearError(key) {
        fields[key].error.textContent = '';
        fields[key].input.classList.remove('invalid');
    }

    function validateField(key) {
        const value = fields[key].input.value.trim();
        if (value === '') {
            showError(key, 'This field is required.');
            return false;
        }
        if (key === 'email' && !emailRegex.test(value)) {
            showError(key, 'Please enter a valid email address.');
            return false;
        }
        clearError(key);
        return true;
    }

    Object.keys(fields).forEach(key => {
        fields[key].input.addEventListener('input', () => {
            if (fields[key].error.textContent !== '') validateField(key);
        });
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        successMessage.textContent = '';
        let valid = true;
        Object.keys(fields).forEach(key => {
            if (!validateField(key)) valid = false;
        });
        if (valid) {
            successMessage.textContent = 'Thank you! Your message has been sent.';
            form.reset();
        }
    });
});