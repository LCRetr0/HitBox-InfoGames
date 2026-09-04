const btnToggle = document.getElementById('btnSidebarToggle');
        const btnClose = document.getElementById('btnCloseSidebar');
        const sidebar = document.getElementById('sidebar');

        btnToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        btnClose.addEventListener('click', () => {
            sidebar.classList.remove('active');
        });

        const trilho = document.getElementById('trilhoNoticias');
const btnPrev = document.getElementById('btnPrev');
const btnNext = document.getElementById('btnNext');


btnNext.addEventListener('click', () => {
    trilho.scrollLeft += trilho.clientWidth;
});

btnPrev.addEventListener('click', () => {
    trilho.scrollLeft -= trilho.clientWidth;
});


let isDown = false;
let startX;
let scrollLeft;

trilho.addEventListener('mousedown', (e) => {
    isDown = true;
    trilho.style.cursor = 'grabbing';
    startX = e.pageX - trilho.offsetLeft;
    scrollLeft = trilho.scrollLeft;
});

trilho.addEventListener('mouseleave', () => {
    isDown = false;
    trilho.style.cursor = 'default';
});

trilho.addEventListener('mouseup', () => {
    isDown = false;
    trilho.style.cursor = 'default';
});

trilho.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - trilho.offsetLeft;
    const walk = (x - startX) * 2; 
    trilho.scrollLeft = scrollLeft - walk;
});