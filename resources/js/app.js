// ES6 Modules or TypeScript
import Swal from "sweetalert2";

require("./bootstrap");

const forms = document.querySelectorAll(".form-del");
forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        Swal.fire({
            title: "Etes vous sûr ?",
            text: "Voulez vous vraiment supprimé cet élément ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, Supprimer",
            cancelButtonText: "Annuler"
        }).then((result) => {
            if (result.isConfirmed) {
                let actionUrl = form.getAttribute("action");
                let data = new FormData(form);
                axios
                    .delete(actionUrl, data)
                    .then((data) => {
                        Swal.fire(
                            "Supprimer!",
                            "L'élépment a étét supprimer avec success",
                            "success"
                        );
                        window.location.reload();
                    })
                    .catch((error) => {});
            }
        });
    });
});
