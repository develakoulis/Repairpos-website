document.querySelectorAll('.workflow-carousel-wrap').forEach((wrapper) => {
  const carousel = wrapper.querySelector('.workflow-carousel');
  const previous = wrapper.querySelector('.workflow-prev');
  const next = wrapper.querySelector('.workflow-next');
  const slide = carousel.querySelector('.workflow-slide');
  if (!slide) return;

  const stepWidth = () => slide.getBoundingClientRect().width + parseFloat(getComputedStyle(carousel).gap);
  const update = () => {
    previous.disabled = carousel.scrollLeft < 2;
    next.disabled = carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 2;
  };
  const move = (direction) => carousel.scrollBy({
    left: direction * stepWidth(),
    behavior: matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth',
  });

  previous.addEventListener('click', () => move(-1));
  next.addEventListener('click', () => move(1));
  carousel.addEventListener('scroll', update, { passive: true });
  carousel.addEventListener('keydown', (event) => {
    if (event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') return;
    event.preventDefault();
    move(event.key === 'ArrowLeft' ? -1 : 1);
  });
  window.addEventListener('resize', update);
  update();
});
