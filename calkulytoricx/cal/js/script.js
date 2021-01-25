var total = 0;


function test(item) {
  if (item.checked) {
    total += parseInt(item.value);
  } else {
    total -= parseInt(item.value);
  }
  $('#Totalcost').text(total + ' /-');

  $('.price').html(''); // очищаем список выбранных товаров
  $('.block').each(function() { // перебираем все .block
    if ($(this).find('input').is(':checked')) { // если чекбокс отмечен
      $('.price').append($(this).find('h3').text() + '<br />'); // добавляем текст из h3 в .price
    }
  });
}