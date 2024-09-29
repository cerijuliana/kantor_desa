document.getElementById('order-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            form.reset();
            document.getElementById('form-message').innerHTML = '<p>Terima kasih! Pesanan Anda telah diterima.</p>';
        } else {
            response.json().then(data => {
                if (Object.hasOwn(data, 'errors')) {
                    document.getElementById('form-message').innerHTML = '<p>Oops! Terjadi kesalahan saat mengirimkan pesan.</p>';
                }
            });
        }
    })
    .catch(error => {
        document.getElementById('form-message').innerHTML = '<p>Oops! Terjadi kesalahan jaringan.</p>';
    });
});
