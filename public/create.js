const form = document.querySelector('form');

if (form) {
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const title = document.getElementById('title').value.trim();
        const price = document.getElementById('price').value.trim();
        const description = document.getElementById('description').value.trim();

        if (!title || !price) {
            alert('Please fill in all required fields');
            return;
        }

        try {
            const res = await fetch('/public/products', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({title,price,description})
            });

            if (res.ok) {
                window.location.href = '/public/';
            } else {
                const err = await res.json();
                alert(err.error || 'Failed to save product')
            }
        } catch (error) {
            console.error('Network error:', error);
            alert('Failed to connect to the server');
        }
    })
}