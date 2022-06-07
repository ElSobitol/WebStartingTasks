//Создаем переменную, в которую добавляем поиск элемента по его id
let toggleThemeBtn = document.getElementById('toggle-theme-btn')
//Пишем обработку события
toggleThemeBtn.addEventListener('click', function(){
  document.body.classList.toggle('dark');

})
