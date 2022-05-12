const d = document;
const $imagenes = d.querySelectorAll(".imagen");
const $botones = d.querySelectorAll(".header button");
const $overlay = d.querySelector(".overlay");

d.addEventListener("DOMContentLoaded", () => {
  FiltrosBtn();
  Busqueda();
  VerImagen();
  CerrarImagen();
});

FiltrosBtn = () => {
  ArrayImagenes = [];
  $imagenes.forEach((imagen) => (ArrayImagenes = [...ArrayImagenes, imagen]));
  $contenedor = d.querySelector(".contenedor-imagenes");
  d.addEventListener("click", (e) => {
    let filtro = e.target.innerHTML;
    if (e.target.matches(".paisajes")) filtrado(filtro);
    if (e.target.matches(".ciudades")) filtrado(filtro);
    if (e.target.matches(".personas")) filtrado(filtro);
    if (e.target.matches(".animales")) filtrado(filtro);
    if (e.target.matches(".todos")) {
      $contenedor.innerHTML = "";
      ArrayImagenes.forEach((element) => $contenedor.appendChild(element));
      $botones.forEach((button) => {
        button.classList.remove("active");
      });
      d.querySelector(`.todos`).classList.add("active");
    }
  });
};

    filtrado = (filtro) => {
      $botones.forEach((button) => {
        button.classList.remove("active");
      });
      d.querySelector(`.${filtro}`).classList.add("active");
      categoria = ArrayImagenes.filter(
        (imagen) => imagen.getAttribute("data-id") === filtro
      );
      $contenedor.innerHTML = "";
      categoria.forEach((element) => $contenedor.appendChild(element));
    }


Busqueda = () => {
  d.addEventListener("input", (e) => {
    var fragment = document.createDocumentFragment();
    $imagenes.forEach((imagen) => {
      if (imagen.getAttribute("data-etiquetas").includes(e.target.value)) {
        fragment.appendChild(imagen);
      }
    });
    $contenedor.innerHTML = "";
    $contenedor.appendChild(fragment);
  });
}


VerImagen = () => {
  $imgs = d.querySelectorAll(".contenedor-imagenes img");
  console.log($imgs);
  $imgs.forEach((img) => {
    img.addEventListener("click", () => {
      let src = img.getAttribute("src");
      let descripcion = img.parentNode.dataset.descripcion;
      d.querySelector(".img-overlay").src = src;
      d.querySelector(".descripcion-imagen p").innerHTML = descripcion;
      $overlay.classList.remove("hidden");
    });
  });
}


CerrarImagen = () => {
  d.addEventListener("click", (e) => {
    if (e.target.matches(".overlay") || e.target.matches(".btnClose")) {
      $overlay.classList.add("hidden");
    }
  });
}
