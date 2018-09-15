const instance = basicScroll.create({
   elem: document.querySelector('.card'),
   from: 'top-top',
   to: 'bottom-bottom',
   direct: true,
   props: {
      '--r': {
         from: '0',
         to: '1turn'
      },
      '--tx': {
         from: '-100px',
         to: '100px'
      }
   }
})