function confirmarExclusao(id) {
  if (confirm('Tem certeza de que deseja excluir este cadastro?'))

    window.location.href = "delete.php? id=" + id;

  }

