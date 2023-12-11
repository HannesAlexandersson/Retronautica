let cur = 0;

function startImageTransition() {
  const images = document.getElementsByClassName("hero-img");

  for (let i = 0; i < images.length; ++i) {
    if (i !== 0) {
      images[i].style.opacity = 0;
    }
  }

  setInterval(changeImage, 4000);

  async function changeImage() {
    const nextImage = (1 + cur) % images.length;
    images[cur].style.opacity = 0;
    images[nextImage].style.opacity = 1;
    cur = nextImage;
  }
}

startImageTransition();
