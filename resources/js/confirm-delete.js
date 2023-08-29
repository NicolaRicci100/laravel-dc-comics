const deleteForms = document.querySelectorAll('.delete-form');

deleteForms.forEach(form =>{
  form.addEventListener('submit', e =>{
    e.preventDefault();
    const comicTitle = form.dataset.name;
    const hasConfirmed = confirm(`Vuoi davvero eliminare ${comicTitle}?`);
    if (hasConfirmed) form.submit();
  });
});