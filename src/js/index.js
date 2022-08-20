// import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@8/src/sweetalert2.js'

// Swal.fire(
//     '',
//     'Este site faz parte de um projeto acadêmico da turma FLX1554 Curso de Análise e Desenvolvimento de Sistemas - Centro Universitário Leonardo Da Vince e não contém fins lucrativos',
//     'info'
// )
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 10,
  slidesPerGroup: 4,
  loop: true,
  looFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
