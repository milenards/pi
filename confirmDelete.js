function confirmarExclusao(id) {
  let excluir = confirm("Excluir o cliente")
  if (excluir == true) {

    window.location.href = "delete.php? id=" + id;

  }

}