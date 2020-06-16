/**
 * Passa os dados da tarefa para o Modal, e atualiza o link para exclusão
*/

$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('atividades');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Atividade #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  }); 


$('#concluir-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('atividades');
    
    var modal = $(this);
    modal.find('.modal-title').text('Concluir Atividade #' + id);
    modal.find('#confirm').attr('href', 'concluir.php?id=' + id);
  });