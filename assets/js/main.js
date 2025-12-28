(function(){
  const links = [...document.querySelectorAll('[data-spy-link]')];
  const sections = links
    .map(a => document.querySelector(a.getAttribute('href')))
    .filter(Boolean);

  const setActive = (id) => {
    links.forEach(a => a.classList.toggle('is-active', a.getAttribute('href') === '#'+id));
  };

  if (sections.length) {
    const obs = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          setActive(e.target.id);
        }
      });
    }, { rootMargin: "-40% 0px -55% 0px", threshold: 0.01 });

    sections.forEach(s => obs.observe(s));
  }

  const burger = document.querySelector('[data-burger]');
  const sidebar = document.querySelector('.sidebar');
  if(burger && sidebar){
    burger.addEventListener('click', ()=> sidebar.classList.toggle('is-open'));
    document.querySelectorAll('.sidebar a').forEach(a=>{
      a.addEventListener('click', ()=> sidebar.classList.remove('is-open'));
    });
  }
})();