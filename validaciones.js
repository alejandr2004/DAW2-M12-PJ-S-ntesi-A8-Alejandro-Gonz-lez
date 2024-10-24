document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Previene el envío del formulario por defecto

        // Limpia los mensajes de error anteriores
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(message => message.remove());

        
        let valid = true;

        
        const lado1 = document.getElementById('lado1');
        const lado2 = document.getElementById('lado2');
        const lado3 = document.getElementById('lado3');

        
        if (lado1 && lado1.value <= 0) {
            valid = false;
            showError(lado1, "El valor debe ser un número positivo.");
        }

        if (lado2 && lado2.value <= 0) {
            valid = false;
            showError(lado2, "El valor debe ser un número positivo.");
        }

        if (lado3 && lado3.value <= 0) {
            valid = false;
            showError(lado3, "El valor debe ser un número positivo.");
        }

        
        if (valid) { //si valid sigue siendo true significa que no hay errores, por tanto se mostrará el mensaje
            Swal.fire({
                icon: 'success',
                title: 'Formulario válido',
                text: '¡Los datos han sido ingresados correctamente!',
            }).then(() => {
                form.submit(); 
            });
        } else {
            //mensaje de error si falla algo
            Swal.fire({
                icon: 'error',
                title: 'Error de validación',
                text: 'Por favor, corrija los campos en rojo.',
            });
        }
    });
});

// función que enseña mensajes de error en los campos del formulario.Crea un nuevo elemento div con el mensaje de error y lo añade al final del input.
function showError(input, message) {
    const errorElement = document.createElement('div');
    errorElement.classList.add('error-message');
    errorElement.style.color = 'red';
    errorElement.innerText = message;

    input.insertAdjacentElement('afterend', errorElement);
}
