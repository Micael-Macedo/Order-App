function editQtd(option){
    let quantidade = parseInt($('.value').html());
    if(option == "plus"){
        ++quantidade;
        $('.value').text("0"+quantidade);
    }else{
        --quantidade;
        console.log(quantidade);
        if(quantidade >= 0){
            $('.value').text("0"+quantidade);
        }
    }
}