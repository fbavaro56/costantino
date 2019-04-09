function cambiarStatusCurso(curso_id){
  if ($('#status_curso_'+curso_id).prop('checked')) {
    alert('activamos curso');
  }else {
    alert('desactivamos curso');
  }

}
