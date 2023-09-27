document.addEventListener('DOMContentLoaded', function() {
    var botoes = document.querySelectorAll('.button.is-dark');
    
    function redirecionarParaURL(botao) {
      var url = botao.getAttribute('data-url');
      window.location.href = url;
    }
  
    botoes.forEach(function(botao) {
      botao.addEventListener('click', function() {
        redirecionarParaURL(botao);
      });
    });
  });