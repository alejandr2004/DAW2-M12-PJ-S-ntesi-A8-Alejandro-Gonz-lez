document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevenir el envío del formulario

        // Limpiar mensajes de error previos
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(message => message.remove());

        // Validar todos los campos
        let valid = true;

        // Seleccionar los campos del formulario dinámico
        const lado1 = document.getElementById('lado1');
        const lado2 = document.getElementById('lado2');
        const lado3 = document.getElementById('lado3');

        // Validación de números positivos en los campos existentes
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

        // Si el formulario es válido, mostrar un Sweet Alert de éxito
        if (valid) {
            Swal.fire({
                icon: 'success',
                title: 'Formulario válido',
                text: '¡Los datos han sido ingresados correctamente!',
            }).then(() => {
                form.submit();  // Enviar el formulario
            });
        } else {
            // Mostrar alerta de error con Sweet Alert si hay errores
            Swal.fire({
                icon: 'error',
                title: 'Error de validación',
                text: 'Por favor, corrija los campos en rojo.',
            });
        }
    });
});

// Función para mostrar mensajes de error en los campos
function showError(input, message) {
    const errorElement = document.createElement('div');
    errorElement.classList.add('error-message');
    errorElement.style.color = 'red';
    errorElement.innerText = message;

    input.insertAdjacentElement('afterend', errorElement);
}
