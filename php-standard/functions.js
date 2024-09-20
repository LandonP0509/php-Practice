document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const input = form.querySelector('input');

    form.addEventListener('submit', function(event) {
        const isValid = form.checkValidity();

        if (!isValid) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            
            if (input.value.trim() === '') {
                event.preventDefault();
                alert('Please fill out the input field!');
            } else {
                form.submit();
            }
        }

        form.classList.add('was-validated');
    });
});

