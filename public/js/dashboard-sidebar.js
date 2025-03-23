
let exist = true;
const icon = document.getElementById('iconSidebar');
function buttonSidebar() {
    if(exist){
        icon.style.display = 'none';
        exist = !exist;
    }else{
        icon.style.display = 'flex';
        exist = !exist;
    }
    const sidebar = document.getElementById('sidebar');
    const wrapper = document.getElementById('wrapper');
    sidebar.classList.toggle('translate-x-0');
    sidebar.classList.toggle('-translate-x-full');
    wrapper.classList.toggle('ml-56'); // Adjust container margin when sidebar is visible
    
}
