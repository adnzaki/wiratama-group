document.addEventListener("DOMContentLoaded", function () {});

function resizeImage() {
  const img = document.getElementById("hero-slider");
  const screenWidth = window.innerWidth;

  // Atur atribut width dan height secara dinamis
  if (screenWidth > 768) {
    img.setAttribute("width", "1333");
    img.setAttribute("height", "1250");
  } else {
    img.setAttribute("width", "600");
    img.setAttribute("height", "563");
  }
}

// window.addEventListener("load", resizeImage);
// window.addEventListener("resize", resizeImage);

const getStarted = () => {
  document
    .getElementById("property-overview")
    .scrollIntoView({ behavior: "smooth" });
};
