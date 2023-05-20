function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            // Aquí puedes agregar alguna acción cuando se termine el tiempo
            alert("¡Tiempo agotado!");

            // Aquí puedes enviar el formulario automáticamente si lo deseas
            //document.getElementById("myForm").submit();

            submitButton.click();

        }
    }, 1000);
}
