document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            approveItem(id);
        });
    });

    function approveItem(id) {
        const form = document.createElement('form');
        form.method = 'post';
        form.action = 'update-status.php';

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = id;

        form.appendChild(input);
        document.body.appendChild(form);

        form.submit();
    }
});
