let curl = 0;

function startImageTransitionMobile() {
  const imagesMobile = document.getElementsByClassName("movieposter");

  for (let i = 0; i < imagesMobile.length; ++i) {
    if (i !== 0) {
      imagesMobile[i].style.opacity = 0;
    }
  }

  setInterval(changeImage, 4000);

  async function changeImage() {
    const nextImage = (1 + curl) % imagesMobile.length;
    imagesMobile[cur].style.opacity = 0;
    imagesMobile[nextImage].style.opacity = 1;
    curl = nextImage;
  }
}
startImageTransitionMobile();