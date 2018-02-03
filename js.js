function userDelete(e) {
	conf = confirm('Удалить пользоватeля '+e);
	if(conf){
		var message = encodeURIComponent(conf);
		location.href = 'index.php?message='+message+'&id='+e;
	}
}