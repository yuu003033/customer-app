
function deleteConfirm(){
  if(!confirm('本当に削除しますか？')){
    return false
  } else{
    const form = document.getElementById('deleteForm')
    form.submit();
  }
}