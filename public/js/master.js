const toggleButton = document.getElementById('toggleSidebar');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('Content');
let showSidebar = false;
  toggleButton.addEventListener('click', () => {
    showSidebar = !showSidebar;
    if (showSidebar) {
      sidebar.classList.add('block');
      sidebar.classList.remove('hidden');
      content.classList.add('ml-60'); // Thêm margin left khi showSidebar = true
    } else {
      sidebar.classList.add('hidden');
      sidebar.classList.remove('block');
      content.classList.remove('ml-60'); // Xóa margin left khi showSidebar = false
    }
  });
  

  