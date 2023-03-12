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
            return " fa fa-window-close text-danger ";
            break;
        case "Laporan Diverifikasi":
            return " fa fa-window-close text-danger ";
            break;
        case "Laporan Diproses":
            return " fa fa-window-close text-danger ";
            break;
        case "Laporan Selesai":
            return " fa fa-window-close text-danger ";
            break;
        default:
            return " fa fa-window-close text-secondary ";
            break;
    }
}