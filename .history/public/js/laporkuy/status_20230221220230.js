function renderSpan(status){
    if(status=="Menunggu"){
        return "bg-menunggu";
    }else if(status=="Ke Petugas"){
        return "bg-kepetugas";
    }else if(status=="Diproses"){
        return "bg-diproses";
    }else if(status=="Ditunda"){
        return "bg-ditunda";
    }else if(status=="Selesai"){
        return "bg-selesai";
    }
}