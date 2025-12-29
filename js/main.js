(function () {
  const links = [...document.querySelectorAll('[data-spy-link]')];

  const getHash = (href) => {
    if (!href) return '';
    // Si es #home -> devuelve #home
    if (href.startsWith('#')) return href;

    // Si es URL completa -> extrae el hash
    try {
      const u = new URL(href, window.location.origin);
      return u.hash || '';
    } catch (e) {
      // fallback simple
      const i = href.indexOf('#');
      return i >= 0 ? href.slice(i) : '';
    }
  };

  const sections = links
    .map(a => {
      const hash = getHash(a.getAttribute('href'));
      return hash ? document.querySelector(hash) : null;
    })
    .filter(Boolean);

  const setActive = (id) => {
    links.forEach(a => {
      const hash = getHash(a.getAttribute('href'));
      a.classList.toggle('is-active', hash === '#' + id);
    });
  };

  if (sections.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) setActive(e.target.id);
      });
    }, { rootMargin: "-40% 0px -55% 0px", threshold: 0.01 });

    sections.forEach(s => obs.observe(s));
  }

  const burger = document.querySelector('[data-burger]');
  const sidebar = document.querySelector('.sidebar');
  if (burger && sidebar) {
    burger.addEventListener('click', () => sidebar.classList.toggle('is-open'));
    document.querySelectorAll('.sidebar a').forEach(a => {
      a.addEventListener('click', () => sidebar.classList.remove('is-open'));
    });
  }
})();
