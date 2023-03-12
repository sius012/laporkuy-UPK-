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


function renderIcon(pesan){
    switch (pesan) {
        case "Laporan Ditolak":
            
            break;
        case "Laporan Diproses":
            
            break;
        case "Laporan Di":
            
            break;
        default:
            break;
    }
}