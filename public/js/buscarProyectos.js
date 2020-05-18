document.querySelector(".buscar").onkeyup = function(){
    $TableFilter(".tabla", this.value);
}

$TableFilter = function(id, value){
    var rows = document.querySelectorAll(id + ' tbody tr');
    
    for(var i = 0; i < rows.length; i++){
        var showRow = false;
        
        var row = rows[i];
        row.style.display = 'none';
        
        for(var x = 0; x < row.childElementCount; x++){
            if(row.children[x].textContent.toLowerCase().indexOf(value.toLowerCase().trim()) > -1){
                showRow = true;
                break;
            }
        }
        
        if(showRow){
            row.style.display = null;
        }
    }
}