function deleteConfirm(customerId){
  if(!confirm('本当に削除しますか？')){
    return false
  } else{
    const form = document.getElementById('deleteForm'+customerId)
    form.submit();

  }

}
function deleteKaruteConfirm(karuteId){
  if(!confirm('本当に削除しますか？')){
    return false;
  } else{
    const form = document.getElementById('deleteForm' + karuteId)
    form.submit();
  }
}