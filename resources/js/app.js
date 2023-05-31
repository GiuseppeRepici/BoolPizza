import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const EliminaBtn = document.querySelectorAll(".elimina");
if (EliminaBtn.length > 0) {
    EliminaBtn.forEach((btn) => {
        btn.addEventListener("click", function (event) {
            event.preventDefault();
            const titolo = btn.getAttribute("titolo");
            const deleteModal = new bootstrap.Modal(
                document.getElementById("delete-modal")
            );

            document.getElementById("action-delete").addEventListener("click", function () {
                btn.parentElement.submit();
            });
            document.getElementById("nome-pizza").innerText = titolo;
            deleteModal.show();
        })
    })
}
