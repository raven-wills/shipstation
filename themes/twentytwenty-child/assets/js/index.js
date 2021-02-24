function initiateImageObserver() {
  let options = {
    rootMargin: "100px",
    threshold: 1,
  };

  let observer = new IntersectionObserver((entries) => {
    const phoneContainer = entries[0];
    if (phoneContainer.isIntersecting) {
      phoneContainer.target.classList.add("visible");
    } else {
      phoneContainer.target.classList.remove("visible");
    }
  }, options);

  const target = document.querySelector(".phone-container");

  observer.observe(target);
}

initiateImageObserver();
