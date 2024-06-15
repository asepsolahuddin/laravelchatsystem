import "./bootstrap";

("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js");
("https://cdn.jsdelivr.net/npm/sweetalert2@11");

//message with sweetalert
if (session("success"))
    Swal.fire({
        icon: "success",
        title: "BERHASIL",
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 2000,
    });
elseif(session("error"));
Swal.fire({
    icon: "error",
    title: "GAGAL!",
    text: "{{ session('error') }}",
    showConfirmButton: false,
    timer: 2000,
});
endif;
